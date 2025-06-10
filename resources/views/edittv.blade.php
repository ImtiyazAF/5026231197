@extends('template')

@section('content')

	<h3>Edit TV</h3>

	<a href="/tv" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	@foreach($tv as $t)
	<form action="/tv/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="ID" value="{{ $t->ID }}">

        <div class="row">
            <div class="col-3">
            Merk TV
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="merkTV" value="{{ $t->merkTV }}" required="required"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            Harga TV
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="hargaTV" value="{{ $t->hargaTV }}" required="required"> <br/>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-3">
                    <label>Tersedia</label>
                </div>
                <div class="col-9">
                    <select name="tersedia" class="form-control" required>
                        <option value="1" {{ $t->tersedia == 1 ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ $t->tersedia == 0 ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            Berat
            </div>
            <div class="col-9">
            <input type="text" class="form-control" name="berat" value="{{ $t->berat }}" required="required"> <br/>
            </div>
        </div>

		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
	@endforeach

@endsection

