<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class RingkasanKhotbahController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$data['ringkasankhotbah'] = \App\RingkasanKhotbah::paginate(10);
    	return view('admin.ringkasankhotbah.list')->with($data);

    }

    public function add()
    {
    	return view('admin.ringkasankhotbah.add');
    }

    public function edit($id)
    {
    	$data['ringkasankhotbah']=\App\RingkasanKhotbah::find($id);
		return view('admin.ringkasankhotbah.edit')->with($data);
    }

        public function save()
    {
    	$a = new  \App\RingkasanKhotbah;
    	$a->judul = Input::get('judul');
    	$a->ayat = Input::get('ayat');
    	$a->pendeta = Input::get('pendeta');
    	$a->isi = Input::get('isi');
        $a->id_user = Auth::user()->id;
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
    	return redirect(url('ringkasankhotbah/list'));	
    }

    public function delete($id)
    {
    	$a = \App\RingkasanKhotbah::find($id);
        $a->delete();
        return redirect(url('ringkasankhotbah/list')); 
    }

  }
