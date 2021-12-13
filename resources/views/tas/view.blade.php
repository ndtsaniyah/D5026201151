@extends('layout.happy')
@section('title', 'Data Tas')

@section('konten')
    <div class="rounded border cont-ktn">
        <br>
        <div class="judul">
            <h1 id="jdl">DETAIL DATA TAS</h1>
        </div>
        <br><br>

        @foreach($tas as $t)
        <div class="form-body">
            <div class="col">
                <div class="form-group">
                    <label for="merk" class="col-sm-4 control-label">Merk Tas :</label>
                        <div class='col-sm-8 input-group date' id='merk'>
                        <label class="control-label">{{ $t->merktas }}</label><br/>
                        </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="stock" class="col-sm-4 control-label">Stock Tas :</label>
                        <div class='col-sm-8 input-group date' id='stock'>
                        <label class="control-label">{{ $t->stocktas }}</label> <br/>
                        </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="stock" class="col-sm-4 control-label">Ketersediaan :</label>
                        <div class='col-sm-8 input-group date' id='stock'>
                        <label class="control-label">{{ $t->tersedia }}</label> <br/>
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
