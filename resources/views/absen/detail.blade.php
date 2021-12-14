@extends('layout.happy')
@section('title', 'Data Pegawai')

@section('konten')
    <div class="rounded border cont-ktn">
        <br>
        <div class="judul">
            <h1 id="jdl">DETAIL DATA PEGAWAI</h1>
        </div>
        <br><br>

        @foreach($absen as $a)
        <div class="form-body">
            <div class="col">
                <div class="form-group">
                    <label for="nama" class="col-sm-3 control-label">Nama Pegawai</label>
                    <label for="nama" class="col-sm-1 control-label">:</label>
                    <div class='col-sm-8 input-group date' id='nama'>
                        <label class="control-label">{{ $a->pegawai_nama }}</label><br/>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="dtpickerdemo" class="col-sm-3 control-label">Tanggal</label>
                    <label for="dtpickerdemo" class="col-sm-1 control-label">:</label>
                    <div class='col-sm-8 input-group date' id='dtpickerdemo'>
                        <label class="control-label">{{ $a->Tanggal }}</label> <br>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="status" class="col-sm-3 control-label">Status</label>
                    <label for="status" class="col-sm-1 control-label">:</label>
                    <div class='col-sm-8 input-group date' id='radiopicker'>
                        <label class="control-label">{{ $a->Status }}</label><br>
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
