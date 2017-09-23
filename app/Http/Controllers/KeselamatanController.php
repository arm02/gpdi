<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Auth;

class KeselamatanController extends Controller
{
		public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
    	 $data['keselamatan'] = \App\Keselamatan::paginate(10);
    	$data['kotakkeselamatan'] = \App\KotakKeselamatan::paginate(10);
    	return view('admin.keselamatandoa.list')->with($data);
    }


   	public function add(){

    	return view('admin.permohonandoa.add');
    }

       public function save()
    {
    	$a = new  \App\Keselamatan;
    	$a->katapengantar = Input::get('katapengantar');
    	$a->ayat = Input::get('ayat');
    	$a->isi = Input::get('isi');
    	$a->kalimatdoa = Input::get('kalimatdoa');
    	$a->save();
    	return redirect(url('keselamatandoa/list'));	
    }

     public function edit($id)
    {
    	$data['keselamatan']=\App\Keselamatan::find($id);
		return view('admin.keselamatandoa.edit')->with($data);
    }

      public function detaildoa($id)
    {
    	$data['kotakkeselamatan']=\App\KotakKeselamatan::find($id);
		return view('admin.keselamatandoa.detaildoa')->with($data);
    }

	public function update()
    {
        $a = \App\Keselamatan::find(Input::get('id'));
    	$a->katapengantar = Input::get('katapengantar');
    	$a->ayat = Input::get('ayat');
    	$a->isi = Input::get('isi');
    	$a->kalimatdoa = Input::get('kalimatdoa');
    	$a->save();
    	return redirect(url('keselamatan/list'));	
    }

    public function deletekotakdoa($id)
    {
    	$a = \App\KotakKeselamatan::find($id);
    	$a->delete();
    	return redirect(url('keselamatan/list'));
    }

}
