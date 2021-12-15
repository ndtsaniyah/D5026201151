@extends('layout.happy')
@section('title', 'Data Pegawai')

@section('konten')
    <div class="rounded border cont-ktn">
        <br>
        <div class="judul">
            <h1 id="jdl">TAMBAH DATA PEGAWAI</h1>
        </div>
        <br><br>

	<form action="/keranjang/store" method="post">
		{{ csrf_field() }}
        <div class="form-body">
            <div class="col">
                    <div class="form-group">
                        <label for="kodebarang" class="col-sm-3 control-label">Kode Barang</label>
                        <label for="kodebarang" class="col-sm-1 control-label">:</label>
                            <div class='col-sm-8 input-group ' id='kodebarang'>
		                    <input type="number" class="form-control" name="kodebarang" required="required"> <br/>
                            </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="jumlah" class="col-sm-3 control-label">Jumlah</label>
                        <label for="jumlah" class="col-sm-1 control-label">:</label>
                        <div class='col-sm-8 input-group' id='jumlah'>
                            <input type="number" class="form-control" name="jumlah" required="required"> <br/>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="harga" class="col-sm-3 control-label">Harga</label>
                        <label for="harga" class="col-sm-1 control-label">:</label>
                        <div class='col-sm-8 input-group' id='harga'>
                            <input type="number" class="form-control" id='rupiah' name="harga" required="required"> <br/>
                        </div>
                    </div>
            </div>
            <br>
            <div class="col">
                <div class="form-group">
                    <div class="col-sm-6 submit-btn">
                        <input type="submit" class="btn btn-default" value="Beli">
                    </div>
                    <div class="col-sm-6 submit-btn">
                        <a href="/keranjang" class="btn btn-default" role="button"> Batal</a>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
	</form>
    </div>
@endsection
