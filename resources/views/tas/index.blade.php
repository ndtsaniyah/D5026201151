@extends('layout.happy')
@section('title', 'Data Tas')

@section('konten')
    <div class="rounded border cont-ktn">
        <br>
    <div class="judul">
        <h1 id="jdl">DATA TAS</h1>
    </div>

    <div class="col-tabel" align="center">
    <p>Cari Data Tas Berdasarkan Merk Tas :</p>
	<form action="/tas/search" method="GET">
		<input class="form-control" type="text" name="saearch" placeholder="Cari Merk Tas" value="{{ old('search') }}">
		<input class="btn btn-block btn-info" type="submit" value="CARI">
    </form>
    </div>


    <div class="col-tabel">
        <div class="add-btn">
            <a href="/tas/add" class="btn btn-default" role="button"> Tambah Data Tas</a>
        </div>
        <br/>
    <table class="table table-striped table-hover table-bordered align-middle">
		<tr>
            <th>No.</th>
			<th>Merk Tas</th>
			<th>Stock Tas</th>
            <th>Opsi</th>
		</tr>
		@foreach($tas as $t)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $t->merktas }}</td>
			<td>{{ $t->stocktas }}</td>
			<td>

                <a href="/tas/view/{{ $t->kodetas }}" class="btn btn-default" role="button">View Detail</a>
                |
				<a href="/tas/edit/ {{ $t->kodetas }}" class="btn btn-warning" role="button">Edit</a>
				|
				<a href="/tas/delete/{{ $t->kodetas }}" class="btn btn-danger" role="button">Delete</a>
			</td>
		</tr>
		@endforeach

    </table>

    {{ $tas->links()  }}
</div>
</div>
@endsection
