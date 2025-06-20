@extends('template')

@section('content')

    <h3>Data Nilai</h3>

	<a href="/eas/tambah" class="btn btn-primary mb-2"> + Tambah Nilai Baru</a>

	<br/>

	<br/>

	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilai as $n)
		<tr>
			<td class="align-middle">{{ $n->ID }}</td>
            <td class="align-middle">{{ $n->nomorinduksiswa}}</td>
            <td class="align-middle">{{ $n->nilaiangka }}</td>
            <td class="align-middle">{{ $n->sks }}</td>
            @if($n->nilaiangka <='40')
                <td class="align-middle">D</td>
            @elseif($n->nilaiangka <='60')
                <td class="align-middle">C</td>
            @elseif($n->nilaiangka <='80')
                <td class="align-middle">B</td>
            @elseif($n->nilaiangka >='81')
                <td class="align-middle">A</td>
            @endif
            <td class="align-middle">{{ $n->nilaiangka * $n->sks }}</td>

		</tr>
		@endforeach
	</table>
{{  $nilai -> links()  }}

@endsection

