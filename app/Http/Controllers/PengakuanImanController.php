<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class PengakuanImanController extends Controller
{
    
         public function __construct()
    {
        $this->middleware('auth');
    }

      public function index()
    {
    	$data['katapengantar'] = \App\PengakuanIman::paginate(10);
    	$data['pengakuaniman'] = \App\IsiPengakuanIman::paginate(10);
    	return view('admin.pengakuaniman.list')->with($data);

    }

       public function add(){

    	return view('admin.pengakuaniman.add');
    }

           public function save()
    {
    	$a = new  \App\IsiPengakuanIman;
    	$a->isi = Input::get('isi');
    	$a->save();
    	return redirect(url('pengakuaniman/list'));	
    }

        public function edit($id)
    {
    	$data['pengakuaniman']=\App\IsiPengakuanIman::find($id);
		return view('admin.pengakuaniman.edit')->with($data);
    }

    	public function update()
    {
        $a = \App\IsiPengakuanIman::find(Input::get('id'));
    	$a->isi = Input::get('isi');
    	$a->save();
    	return redirect(url('pengakuaniman/list'));	
    }


    public function delete($id)
    {
    	$a = \App\IsiPengakuanIman::find($id);
    	$a->delete();
    	return redirect(url('pengakuaniman/list'));
    }

    public function editpengakuaniman($id)
    {
   		 $data['editpengakuaniman']=\App\PengakuanIman::find($id);
		return view('admin.pengakuaniman.editpengakuaniman')->with($data);
    }

    public function updatepengakuaniman()
    {
    	  $a = \App\PengakuanIman::find(Input::get('id'));
    	$a->katapengantar = Input::get('katapengantar');
    	$a->save();
    	return redirect(url('pengakuaniman/list'));	
    }

}
