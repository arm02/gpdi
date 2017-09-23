<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use \App\Multimedia;


class MultimediaController extends Controller
{

	public function index()
	{
		$data['foto'] = \App\Multimedia::get();
		return view('admin.multimedia.list')->with($data);
	}

	public function add()
    {
        return view('admin.multimedia.add');
    }

    public function save(){

        if (Input::hasFile('foto')) {

      $files = Input::file('foto');
      foreach($files as $sampul) {
        $sampul_cek = date("YmdHis").uniqid()."."
        .$sampul->getClientOriginalExtension();

        $sampul->move(storage_path('sampul'), $sampul_cek);

        Multimedia::create([
          'foto' => $sampul_cek
          ]);

    }
     return redirect(url('multimedia/list'));
  }
}


    public function delete($id)
    {
        $a = \App\Multimedia::find($id);
        $a->delete();
        return redirect(url('multimedia/list')); 

    }
    
}
