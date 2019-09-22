<!DOCTYPE html>
<html>
<head>
	<title>Create Rest API</title>
</head>
<body>

	<h3>Tambah Kontak</h3>
	
	<br/>
	<br/>
 
	<form action="http://assessment.nibblesoftworks.com/rest_api_test_webservice/api/1.0/candidate/edit.php" method="post">
		{{ csrf_field() }}
		Email <input type="email" name="email" id="email" required="required"> <br/>
		Random Key <input type="text" name="random_key" id="random_key" required="required"> <br/>
		Proud of <input type="text" name="proud_of" id="proud_of" required="required"> <br/>
		<input type="submit" value="Simpan">
	</form>
 
</body>
</html>