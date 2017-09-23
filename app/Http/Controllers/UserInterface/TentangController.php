<?php

namespace App\Http\Controllers\UserInterface;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TentangController extends Controller
{
    public function index()
    {
    	return view('tentang');
    }
}
