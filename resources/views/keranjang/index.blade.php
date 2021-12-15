@extends('layout.happy')
@section('title', 'Data Keranjang')

@section('konten')
    <div class="rounded border cont-ktn">
        <br>
    <div class="judul">
        <h1 id="jdl">DATA KERANJANG BELANJA</h1>
    </div>

    <div class="col-tabel">
        <div class="add-btn">
            <a href="/keranjang/add" class="btn btn-default" role="button"> Beli</a>
        </div>
        <br/>
    <table class="table table-striped table-hover table-bordered align-middle">
		<tr>
            <th>Kode Pembelian </th>
			<th>Kode Barang</th>
			<th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
			<th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $k)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $k->KodeBarang }}</td>
			<td>{{ $k->Jumlah }}</td>
            <td>{{ number_format($k->Harga, 0, ',', '.') }}</td>
            <td>{{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
			<td>
				<a href="/keranjang/delete/{{ $k->ID }}" class="btn btn-danger" role="button">Batal</a>
			</td>
		</tr>
		@endforeach

    </table>

    {{ $keranjangbelanja->links()  }}
</div>
</div>
@endsection
