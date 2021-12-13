@extends('layout.happy')
@section('title', 'Data Pegawai')

@section('konten')
    <div class="rounded border cont-ktn">
        <br>
        <div class="judul">
            <h1 id="jdl">TAMBAH DATA PEGAWAI</h1>
        </div>
        <br><br>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="form-body">
            <div class="col">
                    <div class="form-group">
                        <label for="nama" class="col-sm-3 control-label">Nama</label>
                        <label for="nama" class="col-sm-1 control-label">:</label>
                            <div class='col-sm-8 input-group ' id='nama'>
		                    <input type="text" class="form-control" name="nama" required="required"> <br/>
                            </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                        <label for="jabatan" class="col-sm-1 control-label">:</label>
                        <div class='col-sm-8 input-group' id='jabatan'>
                            <input type="text" class="form-control" name="jabatan" required="required"> <br/>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="umur" class="col-sm-3 control-label">Umur</label>
                        <label for="umur" class="col-sm-1 control-label">:</label>
                        <div class='col-sm-8 input-group' id='umur'>
                            <input type="number" class="form-control" name="umur" required="required"> <br/>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                        <label for="alamat" class="col-sm-1 control-label">:</label>
                        <div class='col-sm-8 input-group' id='alamat'>
                            <textarea name="alamat" class="form-control" required="required"></textarea>
                        </div>
                    </div>
            </div>
            <br>
            <div class="col">
                <div class="form-group">
                    <div class="col-sm-6 submit-btn">
                        <input type="submit" class="btn btn-default" value="Simpan Data">
                    </div>
                    <div class="col-sm-6 submit-btn">
                        <a href="/pegawai" class="btn btn-default" role="button"> Kembali</a>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
	</form>
    </div>
@endsection
