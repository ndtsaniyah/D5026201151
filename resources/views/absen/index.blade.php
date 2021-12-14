@extends('layout.happy')
@section('title', 'Data Absen')

@section('konten')
<div class="rounded border cont-ktn">
    <br>
<div class="judul">
    <h1 id="jdl">DATA ABSEN</h1>
</div>

    <div class="col-tabel" align="center">
    <p>Cari Data Absensi Berdasarkan Nama Pegawai :</p>
	<form action="/absen/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Absensi .." value="{{ old('cari') }}">
		<input class="btn btn-block btn-info" type="submit" value="CARI">
    </form>
    </div>


    <div class="col-tabel">
        <div class="add-btn">
            <a href="/absen/buat/" class="btn btn-default" role="button"> Tambah Absensi Baru</a>
        </div><br>

	<table class="table table-striped table-hover table-bordered align-middle">
		<tr>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
                <a href="/absen/detail/{{ $a->ID }}" class="btn btn-default" role="button">View Detail</a>
                |
				<a href="/absen/ubah/ {{ $a->ID }}" class="btn btn-warning" role="button">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}" class="btn btn-danger" role="button">Delete</a>
			</td>
		</tr>
		@endforeach


	</table>
    {{ $absen->links() }}

    </div>

</div>
@endsection
