<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class JadwalController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $data['jadwal']=\App\JadwalIbadah::paginate(10);
    	return view('admin.jadwal.list')->with($data);
    }

       public function edit($id)
    {
    	$data['jadwal']=\App\JadwalIbadah::find($id);
		return view('admin.jadwal.edit')->with($data);

    }

        public function add()
    {
    	return view('admin.jadwal.add');
    }

        public function save()
    {
    	$a = new  \App\JadwalIbadah;
    	$a->namajadwal = Input::get('namajadwal');
    	$a->pukul = Input::get('pukul');
    	$a->hari = Input::get('hari');
    	$a->save();
    	return redirect(url('jadwal/list'));	
    }


    public function update()
    {
    	$a = \App\JadwalIbadah::find(Input::get('id'));
    	$a->namajadwal = Input::get('namajadwal');
    	$a->pukul = Input::get('pukul');
    	$a->hari = Input::get('hari');
    	$a->save();
    	return redirect(url('jadwal/list'));
    }

        public function delete($id)
    {
        $a = \App\JadwalIbadah::find($id);
        $a->delete();
        return redirect(url('jadwal/list')); 

    }

}
