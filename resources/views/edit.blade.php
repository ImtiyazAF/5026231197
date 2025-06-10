@extends('template')

@section('content')

	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
        <div class="row">
            <div class="col-3">
            Nama
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="nama" value="{{ $p->pegawai_nama }}" required="required"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            Jabatan
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="jabatan" value="{{ $p->pegawai_jabatan }}" required="required"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            Umur
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="umur" value="{{ $p->pegawai_umur }}" required="required"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            Alamat
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="alamat" value="{{ $p->pegawai_alamat }}" required="required"> <br/>
            </div>
        </div>

		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
    @endforeach

@endsection


