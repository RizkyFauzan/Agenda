<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

	public function hume(){
		return view('hume');
	}

	public function tentang(){
		return view('tentang');
	}

	public function pesan(){
		return view('kontak');
	}

}