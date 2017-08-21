<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class KaumIbuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    	$data['kepengurusan']=\App\KaumWanita::paginate(10);
        $data['event']=\App\EventKaumIbu::paginate(10);
        $data['foto']=\App\GalleryKaumIbu::paginate(10);
    	return view('admin.kaumibu.list')->with($data);
    }

     public function edit($id)
    {
    	$data['kepengurusan']=\App\KaumWanita::find($id);
		return view('admin.kaumibu.edit_kepengurusan')->with($data);

    }

    public function editevent($id)
    {
        $data['event']=\App\EventKaumIbu::find($id);
        return view('admin.kaumibu.edit_event')->with($data);

    }

        public function editfoto($id)
    {
        $data['foto']=\App\GalleryKaumIbu::find($id);
        return view('admin.kaumibu.edit_foto')->with($data);

    }

    public function add_event()
    {
    	return view('admin.kaumibu.add_event');
    }

    public function add_foto()
    {
        return view('admin.kaumibu.add_foto');
    }

    public function update()
    {
    	$a = \App\KaumWanita::find(Input::get('id'));
    	$a->ketua = Input::get('ketua');
    	$a->wakil = Input::get('wakil');
    	$a->seketaris = Input::get('seketaris');
    	$a->bendahara = Input::get('bendahara');
    	$a->save();
    	return redirect(url('kaumibu/list'));

    }

    public function updatefoto()
    {
        $a = \App\GalleryKaumIbu::find(Input::get('id'));
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
        return redirect(url('kaumibu/list'));
    }

        public function updateevent()
    {
        $a = \App\EventKaumIbu::find(Input::get('id'));
        $a->nama_event = Input::get('nama_event');
        $a->tanggal = Input::get('tanggal');
        $a->isi = Input::get('isi');
        $a->save();
        return redirect(url('kaumibu/list'));

    }



    public function saveevent()
    {
    	$a = new  \App\EventKaumIbu;
    	$a->nama_event = Input::get('nama_event');
    	$a->tanggal = Input::get('tanggal');
    	$a->isi = Input::get('isi');
    	$a->save();
    	return redirect(url('kaumibu/list'));	
    }
    public function savefoto(){

        $a = new \App\GalleryKaumIbu;
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
            return redirect(url('kaumibu/list'));
    }

    public function deleteevent($id)
    {
        $a = \App\EventKaumIbu::find($id);
        $a->delete();
        return redirect(url('kaumibu/list')); 

    }

        public function deletefoto($id)
    {
        $a = \App\GalleryKaumIbu::find($id);
        $a->delete();
        return redirect(url('kaumibu/list')); 

    }
}
