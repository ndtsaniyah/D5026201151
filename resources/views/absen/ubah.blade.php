<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Absensi</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

    @foreach($absen as $abs)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $abs->ID }}"> <br/>
		ID Pegawai <input type="number" required="required" name="IDPegawai" value="{{ $abs->IDPegawai }}"> <br/>
		Tanggal <input type="datetime-local" required="required" name="Tanggal" value="{{ $abs->Tanggal }}"> <br/>
		Status <input type="text" required="required" name="Status" value="{{ $abs->Status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
</html>
