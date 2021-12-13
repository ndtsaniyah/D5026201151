@extends('layout.happy')
@section('title', 'Data Pegawai')

@section('konten')
    <div class="rounded border cont-ktn">
        <br>
        <div class="judul">
            <h1 id="jdl">DETAIL DATA PEGAWAI</h1>
        </div>
        <br><br>

        @foreach($pegawai as $p)
        <div class="form-body">
            <div class="col">
                    <div class="form-group">
                        <label for="nama" class="col-sm-3 control-label">Nama</label>
                        <label for="nama" class="col-sm-1 control-label">:</label>
                            <div class='col-sm-8 input-group date' id='nama'>
                                <label class="control-label">{{ $p->pegawai_nama }}</label><br/>
                            </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                        <label for="jabatan" class="col-sm-1 control-label">:</label>
                        <div class='col-sm-8 input-group date' id='jabatan'>
                            <label class="control-label">{{ $p->pegawai_jabatan }}</label> <br>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="umur" class="col-sm-3 control-label">Umur</label>
                        <label for="umur" class="col-sm-1 control-label">:</label>
                        <div class='col-sm-8 input-group date' id='umur'>
                            <label class="control-label">{{ $p->pegawai_umur }}</label><br>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                        <label for="alamat" class="col-sm-1 control-label">:</label>
                        <div class='col-sm-8 input-group date' id='alamat'>
                            <label class="control-label">{{ $p->pegawai_alamat }}</label><br>
                        </div>
                    </div>
            </div>
            <br>
            <div class="col">
                <div class="form-group">
                    <div class="col-sm-6 submit-btn">
                        <a href="/pegawai" class="btn btn-default" role="button"> Kembali</a>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
