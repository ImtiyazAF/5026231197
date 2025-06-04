@extends('template')

@section('content')

	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
            Nama
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="nama" required="required"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            Jabatan
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="jabatan" required="required"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            Umur
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="umur" required="required"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            Alamat
            </div>
            <div class="col-9">
            <textarea type="text" class="form-control" name="alamat" required="required"></textarea> <br/>
            </div>
        </div>

		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>

@endsection
