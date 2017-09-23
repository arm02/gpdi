<?php

namespace App\Http\Controllers\UserInterface;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class WadahController extends Controller
{
      public function index()
    {
    	$data['wadahpria']=\App\GalleryKaumBapak::paginate(3);
    	$data['katapengantarpria']=\App\KaumPria::paginate(3);
    	$data['eventwadahpria']=\App\EventKaumBapak::paginate(3);
    	$data['wadahwanita']=\App\GalleryKaumIbu::paginate(3);
    	$data['katapengantarwanita']=\App\KaumWanita::paginate(3);
    	$data['wadahpemuda']=\App\GalleryPemuda::paginate(3);
    	$data['katapengantarpemuda']=\App\Pemuda::paginate(3);
    	$data['wadahremaja']=\App\GalleryRemaja::paginate(3);
    	$data['katapengantarremaja']=\App\Remaja::paginate(3);
    	$data['wadahsekolahminggu']=\App\GallerySekolahMinggu::paginate(3);
    	$data['katapengantarsekolahminggu']=\App\SekolahMinggu::paginate(3);
    	return view('wadah.index')->with($data);
    }
}
