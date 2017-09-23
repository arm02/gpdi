<?php

namespace App\Http\Controllers\UserInterface;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JadwalController extends Controller
{
    public function index()
    {

     $data['jadwal'] = \App\JadwalIbadah::get();
    	return view('jadwalibadah')->with($data);
    }
}
