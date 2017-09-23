<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class AdminPermohonanDoaController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

      public function index()
    {
    	$data['permohonandoa'] = \App\AdminPermohonanDoa::paginate(10);
    	$data['kotakdoa'] = \App\PermohonanDoa::paginate(10);
    	return view('admin.permohonandoa.list')->with($data);

    }

    public function add(){

    	return view('admin.permohonandoa.add');
    }

       public function save()
    {
    	$a = new  \App\AdminPermohonanDoa;
    	$a->katapengantar = Input::get('katapengantar');
    	$a->ayat = Input::get('ayat');
    	$a->save();
    	return redirect(url('permohonandoa/list'));	
    }

    public function edit($id)
    {
    	$data['permohonandoa']=\App\AdminPermohonanDoa::find($id);
		return view('admin.permohonandoa.edit')->with($data);
    }

      public function detaildoa($id)
    {
    	$data['permohonandoa']=\App\PermohonanDoa::find($id);
		return view('admin.permohonandoa.detaildoa')->with($data);
    }

	public function update()
    {
        $a = \App\AdminPermohonanDoa::find(Input::get('id'));
    	$a->katapengantar = Input::get('katapengantar');
    	$a->ayat = Input::get('ayat');
    	$a->save();
    	return redirect(url('permohonandoa/list'));	
    }

    public function deletekotakdoa($id)
    {
    	$a = \App\PermohonanDoa::find($id);
    	$a->delete();
    	return redirect(url('permohonandoa/list'));
    }

}
