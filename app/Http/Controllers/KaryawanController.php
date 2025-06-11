<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		$karyawan = DB::table('karyawan')->paginate(10);

    	// mengirim data pegawai ke view index
		return view('kindex',['karyawan' => $karyawan]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('ktambah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $reqs)
	{
		// insert data ke table pegawai
		DB::table('karyawan')->insert([
			'kodepegawai' => $reqs->kodepegawai,
			'namalengkap' => $reqs->namalengkap,
			'divisi' => $reqs->divisi,
			'departemen' => $reqs->departemen
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');

	}

	// method untuk hapus data pegawai
	public function hapus($kode)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$kode)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}

}
