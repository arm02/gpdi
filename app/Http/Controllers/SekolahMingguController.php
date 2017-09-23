<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class SekolahMingguController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    	$data['kepengurusan']=\App\SekolahMinggu::paginate(10);
        $data['event']=\App\EventSekolahMinggu::paginate(10);
        $data['foto']=\App\GallerySekolahMinggu::paginate(10);
    	return view('admin.sekolahminggu.list')->with($data);
    }

     public function edit($id)
    {
    	$data['kepengurusan']=\App\SekolahMinggu::find($id);
		return view('admin.sekolahminggu.edit_kepengurusan')->with($data);

    }

    public function editevent($id)
    {
        $data['event']=\App\EventSekolahMinggu::find($id);
        return view('admin.sekolahminggu.edit_event')->with($data);

    }

        public function editfoto($id)
    {
        $data['foto']=\App\GallerySekolahMinggu::find($id);
        return view('admin.sekolahminggu.edit_foto')->with($data);

    }

    public function add_event()
    {
    	return view('admin.sekolahminggu.add_event');
    }

    public function add_foto()
    {
        return view('admin.sekolahminggu.add_foto');
    }

    public function update()
    {
    	$a = \App\SekolahMinggu::find(Input::get('id'));
    	$a->ketua = Input::get('ketua');
    	$a->seketaris = Input::get('seketaris');
    	$a->bendahara = Input::get('bendahara');
        $a->seksiacara = Input::get('seksiacara');
        $a->seksimusik = Input::get('seksimusik');
        $a->seksikonselingdoa = Input::get('seksikonselingdoa');
        $a->motto = Input::get('motto');
    	$a->save();
    	return redirect(url('sekolahminggu/list'));

    }

    public function updatefoto()
    {
        $a = \App\GallerySekolahMinggu::find(Input::get('id'));
        $a->judul = Input::get('judul');
        if(Input::hasFile('sampul')){
            $sampul = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('sampul')->getClientOriginalExtension();
            Input::file('sampul')->move(storage_path('sampul'),$sampul);
            $a->sampul = $sampul;
        }
        $a->save();
        return redirect(url('sekolahminggu/list'));
    }

        public function updateevent()
    {
        $a = \App\EventSekolahMinggu::find(Input::get('id'));
        $a->nama_event = Input::get('nama_event');
        $a->tanggal = Input::get('tanggal');
        $a->isi = Input::get('isi');
        $a->save();
        return redirect(url('sekolahminggu/list'));

    }



    public function saveevent()
    {
    	$a = new  \App\EventSekolahMinggu;
    	$a->nama_event = Input::get('nama_event');
    	$a->tanggal = Input::get('tanggal');
    	$a->isi = Input::get('isi');
    	$a->save();
    	return redirect(url('sekolahminggu/list'));	
    }
    public function savefoto(){

        $a = new \App\GallerySekolahMinggu;
            $a->judul = Input::get('judul');
            $a->sampul ='';
            if(Input::hasFile('sampul')){
                $sampul = date("YmdHis")
                .uniqid()
                ."."
                .Input::file('sampul')->getClientOriginalExtension();
                Input::file('sampul')->move(storage_path('sampul'),$sampul);
                $a->sampul = $sampul;
            }
            $a->save();
            return redirect(url('sekolahminggu/list'));
    }

    public function deleteevent($id)
    {
        $a = \App\EventSekolahMinggu::find($id);
        $a->delete();
        return redirect(url('sekolahminggu/list')); 

    }

        public function deletefoto($id)
    {
        $a = \App\GallerySekolahMinggu::find($id);
        $a->delete();
        return redirect(url('sekolahminggu/list')); 

    }
}
