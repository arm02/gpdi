<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class ArtikelRohaniController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$data['artikelrohani'] = \App\ArtikelRohani::paginate(10);
    	return view('admin.artikelrohani.list')->with($data);

    }

        public function add()
    {
    	return view('admin.artikelrohani.add');
    }

       public function save()
    {
    	$a = new  \App\ArtikelRohani;
    	$a->judul = Input::get('judul');
    	$a->ayat = Input::get('ayat');
    	$a->isi = Input::get('isi');
    	$a->sumber = Input::get('sumber');
            $a->sampul ='';
            if(Input::hasFile('sampul')){
                $sampul = date("YmdHis")
                .uniqid()
                ."."
                .Input::file('sampul')->getClientOriginalExtension();
                Input::file('sampul')->move(storage_path('sampul'),$sampul);
                $a->sampul = $sampul;
            }
        $a->id_user = Auth::user()->id;
    	$a->save();
    	return redirect(url('artikelrohani/list'));	
    }

        public function edit($id)
    {
    	$data['artikelrohani']=\App\ArtikelRohani::find($id);
		return view('admin.artikelrohani.edit')->with($data);
    }

         public function update()
    {
        $a = \App\ArtikelRohani::find(Input::get('id'));
        $a->judul = Input::get('judul');
        $a->ayat = Input::get('ayat');
        $a->isi = Input::get('isi');
        $a->sumber = Input::get('sumber');
            if(Input::hasFile('sampul')){
                $sampul = date("YmdHis")
                .uniqid()
                ."."
                .Input::file('sampul')->getClientOriginalExtension();
                Input::file('sampul')->move(storage_path('sampul'),$sampul);
                $a->sampul = $sampul;
            }
        $a->id_user = Auth::user()->id;
        $a->save();
        return redirect(url('artikelrohani/list'));  
    }
}
