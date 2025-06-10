@extends('template')

@section('content')

	<h3>Data TV</h3>

	<a href="/tv" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/tv/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
            Merk TV
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="merkTV" required="required"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            Harga TV
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="hargaTV" required="required"> <br/>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-3">
                    <label>Tersedia</label>
                </div>
                <div class="col-9">
                    <select name="tersedia" class="form-control" required>
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            Berat
            </div>
            <div class="col-9">
            <textarea type="text" class="form-control" name="berat" required="required"></textarea> <br/>
            </div>
        </div>

		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>

@endsection
