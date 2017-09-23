<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class PemudaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    	$data['kepengurusan']=\App\Pemuda::paginate(10);
        $data['event']=\App\EventPemuda::paginate(10);
        $data['foto']=\App\GalleryPemuda::paginate(10);
    	return view('admin.pemudajoshua.list')->with($data);
    }

     public function edit($id)
    {
    	$data['kepengurusan']=\App\Pemuda::find($id);
		return view('admin.pemudajoshua.edit_kepengurusan')->with($data);

    }

    public function editevent($id)
    {
        $data['event']=\App\EventPemuda::find($id);
        return view('admin.pemudajoshua.edit_event')->with($data);

    }

        public function editfoto($id)
    {
        $data['foto']=\App\GalleryPemuda::find($id);
        return view('admin.pemudajoshua.edit_foto')->with($data);

    }

    public function add_event()
    {
    	return view('admin.pemudajoshua.add_event');
    }

    public function add_foto()
    {
        return view('admin.pemudajoshua.add_foto');
    }

    public function update()
    {
    	$a = \App\Pemuda::find(Input::get('id'));
    	$a->ketua = Input::get('ketua');
    	$a->seketaris = Input::get('seketaris');
    	$a->bendahara = Input::get('bendahara');
        $a->seksiacara = Input::get('seksiacara');
        $a->seksimusik = Input::get('seksimusik');
        $a->seksikonselingdoa = Input::get('seksikonselingdoa');
        $a->motto = Input::get('motto');
    	$a->save();
    	return redirect(url('pemuda/list'));

    }

    public function updatefoto()
    {
        $a = \App\GalleryPemuda::find(Input::get('id'));
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
        return redirect(url('pemuda/list'));
    }

        public function updateevent()
    {
        $a = \App\EventPemuda::find(Input::get('id'));
        $a->nama_event = Input::get('nama_event');
        $a->tanggal = Input::get('tanggal');
        $a->isi = Input::get('isi');
        $a->save();
        return redirect(url('pemuda/list'));

    }



    public function saveevent()
    {
    	$a = new  \App\EventPemuda;
    	$a->nama_event = Input::get('nama_event');
    	$a->tanggal = Input::get('tanggal');
    	$a->isi = Input::get('isi');
    	$a->save();
    	return redirect(url('pemuda/list'));	
    }
    public function savefoto(){

        $a = new \App\GalleryPemuda;
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
            return redirect(url('pemuda/list'));
    }

    public function deleteevent($id)
    {
        $a = \App\EventPemuda::find($id);
        $a->delete();
        return redirect(url('pemuda/list')); 

    }

        public function deletefoto($id)
    {
        $a = \App\GalleryPemuda::find($id);
        $a->delete();
        return redirect(url('pemuda/list')); 

    }
}
