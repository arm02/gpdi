<?php

namespace App\Http\Controllers\UserInterface;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class PermohonanDoaController extends Controller
{
    public function index()
    {
    	$cek = \App\AdminPermohonanDoa::orderby('id','desc')->first();
    	$data['katapengantar'] = \App\AdminPermohonanDoa::where('id',$cek->id)->paginate(10);
    	return view('permohonandoa')->with($data);
    }

    public function save()
    {
    	$a = new \App\PermohonanDoa;
    	$a->nama = Input::get('nama');
    	$a->email = Input::get('email');
    	$a->alamat = Input::get('alamat');
    	$a->umur = Input::get('umur');
    	$a->isi = Input::get('isi');
    	$a->save();
    	return redirect(url('kotakdoa/succes'));
    }

    public function succes()
    {
    	return view('succespermohonandoa');
    }
}
