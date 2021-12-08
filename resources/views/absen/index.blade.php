@extends('layout.happy')
@section('title', 'Data Absen')

@section('konten')
<div class="rounded border cont-ktn">
    <br>
<div class="judul">
    <h1 id="jdl">DATA ABSEN</h1>
</div>

    <div class="col-tabel">

        <div class="add-btn">
            <a href="/absen/buat/" class="btn btn-default" role="button"> + Tambah Absensi Baru</a>
        </div><br>

	<table class="table table-striped table-hover table-bordered align-middle">
		<tr>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $abs)
		<tr>
			<td>{{ $abs->pegawai_nama }}</td>
			<td>{{ $abs->Tanggal }}</td>
			<td>{{ $abs->Status }}</td>
			<td>
				<a href="/absen/ubah/{{ $abs->ID }}">Edit</a>
				|
				<a href="/absen/hapus/{{ $abs->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach


	</table>
    {{ $absen->links() }}

    </div>

</div>
@endsection
