<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class dosencontroller extends Controller
{
    public function index(){
    	$nama = "suratman";
    	
    	$pelajaran = ["design","pemrograman","web"];

    	return view('biodata',['nama' => $nama , 'mapel' => $pelajaran]);

    }
}