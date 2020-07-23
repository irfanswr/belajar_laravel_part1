<!DOCTYPE html>
<html>
<head>
	<title>Form input</title>
</head>
<body>
 
	<form action="/formulir/proses" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	Nama :
		<input type="text" name="nama" placeholder="masukkan nama"> <br/>
		Alamat :
		<input type="text" name="alamat" placeholder="masukkan alamat"> <br/>
		<input type="submit" value="Simpan">
	</form>
 
</body>
</html>