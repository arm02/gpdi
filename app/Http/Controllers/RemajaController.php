<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class RemajaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    	$data['kepengurusan']=\App\Remaja::paginate(10);
        $data['event']=\App\EventRemaja::paginate(10);
        $data['foto']=\App\GalleryRemaja::paginate(10);
    	return view('admin.remaja.list')->with($data);
    }

     public function edit($id)
    {
    	$data['kepengurusan']=\App\Remaja::find($id);
		return view('admin.remaja.edit_kepengurusan')->with($data);

    }

    public function editevent($id)
    {
        $data['event']=\App\EventRemaja::find($id);
        return view('admin.remaja.edit_event')->with($data);

    }

        public function editfoto($id)
    {
        $data['foto']=\App\GalleryRemaja::find($id);
        return view('admin.remaja.edit_foto')->with($data);

    }

    public function add_event()
    {
    	return view('admin.remaja.add_event');
    }

    public function add_foto()
    {
        return view('admin.remaja.add_foto');
    }

    public function update()
    {
    	$a = \App\Remaja::find(Input::get('id'));
    	$a->ketua = Input::get('ketua');
    	$a->wakil = Input::get('wakil');
    	$a->seketaris = Input::get('seketaris');
    	$a->bendahara = Input::get('bendahara');
    	$a->save();
    	return redirect(url('remaja/list'));

    }

    public function updatefoto()
    {
        $a = \App\GalleryRemaja::find(Input::get('id'));
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
        return redirect(url('remaja/list'));
    }

        public function updateevent()
    {
        $a = \App\EventRemaja::find(Input::get('id'));
        $a->nama_event = Input::get('nama_event');
        $a->tanggal = Input::get('tanggal');
        $a->isi = Input::get('isi');
        $a->save();
        return redirect(url('remaja/list'));

    }



    public function saveevent()
    {
    	$a = new  \App\EventRemaja;
    	$a->nama_event = Input::get('nama_event');
    	$a->tanggal = Input::get('tanggal');
    	$a->isi = Input::get('isi');
    	$a->save();
    	return redirect(url('remaja/list'));	
    }
    public function savefoto(){

        $a = new \App\GalleryRemaja;
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
            return redirect(url('remaja/list'));
    }

    public function deleteevent($id)
    {
        $a = \App\EventRemaja::find($id);
        $a->delete();
        return redirect(url('remaja/list')); 

    }

        public function deletefoto($id)
    {
        $a = \App\GalleryRemaja::find($id);
        $a->delete();
        return redirect(url('remaja/list')); 

    }
}
