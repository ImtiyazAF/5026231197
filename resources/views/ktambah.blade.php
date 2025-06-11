@extends('template')

@section('content')

	<h3>Data karyawan</h3>

	<a href="/karyawan" class="btn btn-info"> Kembali</a>

	<br/>
	<form action="/karyawan/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
            Kode Pegawai
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="kodepegawai" required="required"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            Nama Lengkap
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="namalengkap" required="required"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            Divisi
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="divisi" required="required"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            Departemen
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="departemen" required="required"> <br/>
            </div>
        </div>
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>

@endsection
