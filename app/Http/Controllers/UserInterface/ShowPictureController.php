<?php

namespace App\Http\Controllers\UserInterface;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ShowPictureController extends Controller
{
    public function index()
    {
    	$data['foto']=\App\Multimedia::get();
    	return view('welcome')->with($data);
    }
}
