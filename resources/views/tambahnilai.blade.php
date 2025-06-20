@extends('template')

@section('content')

	<h3>Tambah Nilai</h3>

	<a href="/eas" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/eas/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
            NRP
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="nomorinduksiswa" required="required"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            Nilai Angka
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="nilaiangka" required="required"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            SKS
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="sks" required="required"> <br/>
            </div>
        </div>

		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>

@endsection
