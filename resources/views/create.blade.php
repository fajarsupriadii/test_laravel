<!DOCTYPE html>
<html>
<head>
	<title>Create Rest API</title>
</head>
<body>

	<h3>Tambah Kontak</h3>
	
	<br/>
	<br/>
 
	<form action="/kontak/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" id="nama" required="required"> <br/>
		Email <input type="email" name="email" id="email" required="required"> <br/>
		No HP <input type=text name="nohp" id="nohp" required="required"> <br/>
		Alamat <textarea name="alamat" id="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan">
	</form>
 
</body>
</html>