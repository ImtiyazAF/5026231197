@extends('template')

@section('content')

    <h3>Data TV</h3>

	<a href="/tv/tambah" class="btn btn-primary mb-2"> + Tambah TV Baru</a>

	<br/>

    <p>Cari TV :</p>
	<form action="/tv/cari" method="GET">
		<input type="text" class="form-control" name="caritv" placeholder="Cari tv ..">
		<input type="submit" class="btn btn-info mt-2" value="CARI">
	</form>

	<br/>

	<table class="table table-striped">
		<tr>
			<th>Merk TV</th>
			<th>Harga TV</th>
			<th>Tersedia</th>
			<th>Berat</th>
            <th>Opsi</th>
		</tr>
		@foreach($tv as $t)
		<tr>
			<td class="align-middle">{{ $t->merkTV }}</td>
            <td class="align-middle">Rp {{ number_format($t->hargaTV, 0, ',', '.') }}</td>
            <td class="align-middle">{{ $t->tersedia ? 'Ya' : 'Tidak' }}</td>
            <td class="align-middle">{{ $t->berat }}</td>
            <td class="align-middle">
                <a href="/tv/edit/{{ $t->ID }}" class="btn btn-success">Edit</a>
                <a href="/tv/hapus/{{ $t->ID }}" class="btn btn-danger">Hapus</a>
            </td>
		</tr>
		@endforeach
	</table>
{{  $tv -> links()  }}

@endsection
