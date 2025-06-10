<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TvController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		$tv = DB::table('tv')->paginate(10);
    	// mengirim data pegawai ke view index
		return view('indextv',['tv' => $tv]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahtv');

	}

	// method untuk insert data ke table tv
	public function store(Request $req)
	{
		// insert data ke table pegawai
		DB::table('tv')->insert([
			'merkTV' => $req->merkTV,
			'hargaTV' => $req->hargaTV,
			'tersedia' => $req->tersedia,
			'berat' => $req->berat
		]);
		// alihkan halaman ke halaman tv
		return redirect('/tv');

	}

	// method untuk edit data tv
	public function edit($idd)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$tv = DB::table('tv')->where('ID',$idd)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edittv',['tv' => $tv]);

	}

	// update data tv
	public function update(Request $req)
	{
		// update data tv
		DB::table('tv')->where('ID',$req->ID)->update([
			'merkTV' => $req->merkTV,
			'hargaTV' => $req->hargaTV,
			'tersedia' => $req->tersedia,
			'berat' => $req->berat
		]);
		// alihkan halaman ke halaman tv
		return redirect('/tv');
	}

	// method untuk hapus data tv
	public function hapus($idd)
	{
		// menghapus data tv berdasarkan id yang dipilih
		DB::table('tv')->where('ID',$idd)->delete();

		// alihkan halaman ke halaman tv
		return redirect('/tv');
	}

    public function cari(Request $req)
	{
		// menangkap data pencarian
		$caritv = $req->caritv;

    		// mengambil data dari table tv sesuai pencarian data
		$tv = DB::table('tv')
		->where('merkTV','like',"%".$caritv."%")
		->paginate();

    		// mengirim data tv ke view index
		return view('indextv',['tv' => $tv,'caritv' => $caritv]);

	}
}
