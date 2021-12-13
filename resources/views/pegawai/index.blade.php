@extends('layout.happy')
@section('title', 'Data Pegawai')

@section('konten')
    <div class="rounded border cont-ktn">
        <br>
    <div class="judul">
        <h1 id="jdl">DATA PEGAWAI</h1>
    </div>

    <div class="col-tabel" align="center">
    <p>Cari Data Pegawai Berdasarkan Nama dan Alamat :</p>
	<form action="/pegawai/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input class="btn btn-block btn-info" type="submit" value="CARI">
    </form>
    </div>


    <div class="col-tabel">
        <div class="add-btn">
            <a href="/pegawai/tambah" class="btn btn-default" role="button"> + Tambah Pegawai Baru</a>
        </div>
        <br/>
    <table class="table table-striped table-hover table-bordered align-middle">
		<tr>
            <th>No.</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>

                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-default btn-sm" role="button">View Detail</a>
                |
				<a href="/pegawai/edit/ {{ $p->pegawai_id }}" class="btn btn-warning" role="button">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger" role="button">Hapus</a>
			</td>
		</tr>
		@endforeach

    </table>

    {{ $pegawai->links()  }}
</div>
</div>
@endsection
