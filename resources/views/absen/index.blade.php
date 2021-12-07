@extends('layout.happy')
@section('title', 'Data Absen')

@section('konten')
<div class="rounded border cont-ktn">
    <br>
<div class="judul">
    <h1 id="jdl">DATA ABSEN</h1>
</div>


	<br/>
	<br/>
    <div class="col-tabel">
	<table class="table table-striped table-hover table-bordered align-middle">
		<tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $abs)
		<tr>
			<td>{{ $abs->IDPegawai }}</td>
			<td>{{ $abs->Tanggal }}</td>
			<td>{{ $abs->Status }}</td>
			<td>
				<a href="/absen/ubah/{{ $abs->ID }}">Edit</a>
				|
				<a href="/absen/hapus/{{ $abs->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
        <div class="add-btn">
            <a href="/absen/buat/" class="btn btn-default" role="button"> + Tambah Absensi Baru</a>
        </div>
	</table>
    </div>
</div>
@endsection
