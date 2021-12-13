@extends('layout.happy')
@section('title', 'Data Tas')

@section('konten')
    <div class="rounded border cont-ktn">
        <br>
        <div class="judul">
            <h1 id="jdl">EDIT DATA TAS</h1>
        </div>
        <br><br>

	@foreach($tas as $t)
	<form action="/tas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->kodetas }}"> <br/>
        <div class="form-body">
            <div class="col">
                <div class="form-group">
                    <label for="merk" class="col-sm-3 control-label">Merk Tas</label>
                    <label for="merk" class="col-sm-1 control-label">:</label>
                        <div class='col-sm-8 input-group date' id='merk'>
                        <input type="text" class="form-control" name="merk" required="required" value="{{ $t->merktas }}"> <br/>
                        </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="stock" class="col-sm-3 control-label">Stock Tas</label>
                    <label for="stock" class="col-sm-1 control-label">:</label>
                        <div class='col-sm-8 input-group date' id='stock'>
                        <input type="number" class="form-control" name="stock" required="required" value="{{ $t->stocktas }}"> <br/>
                        </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="ketersediaan" class="col-sm-3 control-label">Ketersediaan</label>
                    <label for="ketersediaan" class="col-sm-1 control-label">:</label>
                    <div class='col-sm-8 input-group date' id='radiopicker'>
                        <input type="radio" id="y" name="ketersediaan" value="Y" @if($t->tersedia==='Y') checked="checked" @endif>
                        <label for="h">TERSEDIA</label><br>
                        <input type="radio"  id="n" name="ketersediaan" value="N" @if($t->tersedia==='N') checked="checked" @endif>
                        <label for="a">TIDAK TERSEDIA</label><br>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <div class="col-sm-6 submit-btn">
                        <input type="submit" class="btn btn-default" value="Simpan Data">
                    </div>
                    <div class="col-sm-6 submit-btn">
                        <a href="/tas" class="btn btn-default" role="button"> Kembali</a>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
	</form>

	@endforeach
</div>
@endsection
