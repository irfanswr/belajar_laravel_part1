<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // menampilkan isi session
	public function index(Request $request) {
		if($request->session()->has('nama')){
			echo "Hai, ". $request->session()->get('nama');
		}else{
			echo 'Kamu belum login.';
		}
	}
 
	// membuat session
	public function buatSession(Request $request) {
		$request->session()->put('nama','Irfan');
		echo "Data telah ditambahkan ke session.";
	}
 
	// menghapus session
	public function hapusSession(Request $request) {
		$request->session()->forget('nama');
		echo "Data telah dihapus dari session.";
	}
}
