<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class KaumBapakController extends Controller
{

	      public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    	$data['kepengurusan']=\App\KaumPria::paginate(10);
        $data['event']=\App\EventKaumBapak::paginate(10);
        $data['foto']=\App\GalleryKaumBapak::paginate(10);
    	return view('admin.kaumbapak.list')->with($data);
    }

       public function edit($id)
    {
    	$data['kepengurusan']=\App\KaumPria::find($id);
		return view('admin.kaumbapak.edit_kepengurusan')->with($data);

    }

    public function editevent($id)
    {
        $data['event']=\App\EventKaumBapak::find($id);
        return view('admin.kaumbapak.edit_event')->with($data);

    }

        public function editfoto($id)
    {
        $data['foto']=\App\GalleryKaumBapak::find($id);
        return view('admin.kaumbapak.edit_foto')->with($data);

    }

    public function add_event()
    {
    	return view('admin.kaumbapak.add_event');
    }

    public function add_foto()
    {
        return view('admin.kaumbapak.add_foto');
    }

    public function update()
    {
    	$a = \App\KaumPria::find(Input::get('id'));
    	$a->ketua = Input::get('ketua');
    	$a->seketaris = Input::get('seketaris');
    	$a->bendahara = Input::get('bendahara');
        $a->seksiacara = Input::get('seksiacara');
        $a->seksimusik = Input::get('seksimusik');
        $a->seksikonselingdoa = Input::get('seksikonselingdoa');
        $a->motto = Input::get('motto');
    	$a->save();
    	return redirect(url('kaumbapak/list'));

    }

    public function updatefoto()
    {
        $a = \App\GalleryKaumBapak::find(Input::get('id'));
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
        return redirect(url('kaumbapak/list'));
    }

        public function updateevent()
    {
        $a = \App\EventKaumBapak::find(Input::get('id'));
        $a->nama_event = Input::get('nama_event');
        $a->tanggal = Input::get('tanggal');
        $a->isi = Input::get('isi');
        $a->save();
        return redirect(url('kaumbapak/list'));

    }



    public function saveevent()
    {
    	$a = new  \App\EventKaumBapak;
    	$a->nama_event = Input::get('nama_event');
    	$a->tanggal = Input::get('tanggal');
    	$a->isi = Input::get('isi');
    	$a->save();
    	return redirect(url('kaumbapak/list'));	
    }
    public function savefoto(){

        $a = new \App\GalleryKaumBapak;
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
            return redirect(url('kaumbapak/list'));
    }

    public function deleteevent($id)
    {
        $a = \App\EventKaumBapak::find($id);
        $a->delete();
        return redirect(url('kaumbapak/list')); 

    }

        public function deletefoto($id)
    {
        $a = \App\GalleryKaumBapak::find($id);
        $a->delete();
        return redirect(url('kaumbapak/list')); 

    }
}
