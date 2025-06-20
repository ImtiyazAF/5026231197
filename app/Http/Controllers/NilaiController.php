<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		$nilai = DB::table('nilai')->paginate(10);
    	// mengirim data pegawai ke view index
		return view('indexnilai',['nilai' => $nilai]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahnilai');

	}

	// method untuk insert data ke nilai
	public function store(Request $req)
	{
		// insert data ke table nilai
		DB::table('nilai')->insert([
			'nomorinduksiswa' => $req->nomorinduksiswa,
			'nilaiangka' => $req->nilaiangka,
			'sks' => $req->sks,
		]);
		// alihkan halaman ke halaman tv
		return redirect('/eas');

	}
}
