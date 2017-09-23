<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class KepengurusanController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    
	public function index()
	{
		$data['kepengurusan'] = \App\KepengurusanMajelis::get();
		return view('admin.kepengurusan.list')->with($data);
	}

	  public function edit($id)
    {
    	$data['kepengurusan']=\App\KepengurusanMajelis::find($id);
		return view('admin.kepengurusan.edit')->with($data);

    }

    public function update()
    {
    	$a = \App\KepengurusanMajelis::find(Input::get('id'));
    	$a->gembala = Input::get('gembala');
    	$a->wakilgembala = Input::get('wakilgembala');
    	$a->seketaris1 = Input::get('seketaris1');
    	$a->seketaris2 = Input::get('seketaris2');
    	$a->bendahara1 = Input::get('bendahara1');
    	$a->bendahara2 = Input::get('bendahara2');
    	$a->tataibadah = Input::get('tataibadah');
    	$a->wakiltataibadah = Input::get('wakiltataibadah');
    	$a->rumahtangga = Input::get('rumahtangga');
    	$a->wakilrumahtangga = Input::get('wakilrumahtangga');
    	$a->pengembangan = Input::get('pengembangan');
    	$a->wakilpengembangan = Input::get('wakilpengembangan');
    	$a->diakonia = Input::get('diakonia');
    	$a->wakildiakonia = Input::get('wakildiakonia');
    	$a->konseling = Input::get('konseling');
    	$a->wakilkonseling = Input::get('wakilkonseling');
    	$a->save();
    	return redirect(url('kepengurusan/list'));
    }

}
