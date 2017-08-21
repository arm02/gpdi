<?php

namespace App\Http\Controllers\UserInterface;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowPictureController extends Controller
{
    public function index()
    {
    	$data['foto']=\App\GalleryKaumBapak::paginate(10);
    	return view('welcome')->with($data);
    }
}
