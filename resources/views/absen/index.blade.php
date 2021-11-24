<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Absensi</h3>

	<a href="/absen/buat"> + Tambah Absensi Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $abs)
		<tr>
			<td>{{ $abs->IDPegawai }}</td>
			<td>{{ $abs->Tanggal }}</td>
			<td>{{ $abs->Status }}</td>
			<td>
				<a href="/absen/ubah/{{ $abs->ID }}">Edit</a>
				|
				<a href="/absen/hapus/{{ $abs->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
