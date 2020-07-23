<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Irfan Siswara";
        $matkul = ["Web","Android","Game"];

    	return view('bio',['nama' =>$nama,'matkul' =>$matkul]);
    }
}
