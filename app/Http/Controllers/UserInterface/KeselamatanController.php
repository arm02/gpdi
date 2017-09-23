<?php

namespace App\Http\Controllers\UserInterface;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class KeselamatanController extends Controller
{
        public function index()
    {
    	$cek = \App\Keselamatan::orderby('id','desc')->first();
    	$data['katapengantar'] = \App\Keselamatan::where('id',$cek->id)->paginate(10);
    	return view('keselamatan')->with($data);
    }

    public function save()
    {
    	$a = new \App\KotakKeselamatan;
    	$a->nama = Input::get('nama');
    	$a->email = Input::get('email');
    	$a->notelp = Input::get('notelp');
    	$a->informasi = Input::get('informasi');
    	$a->save();
    	return redirect(url('kotakkeselamatan/succes'));
    }

    public function succes()
    {
    	return view('succeskeselamatan');
    }
}
