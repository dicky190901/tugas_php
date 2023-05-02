<!DOCTYPE html>
<html>
<head>
	<title>Program Menghitung Kategori Nilai</title>
</head>
<body>
	<h1>Program Menghitung Kategori Nilai</h1>
	<form method="post">
		<label for="nilai">Masukkan Nilai:</label>
		<input type="number" name="nilai" id="nilai" required>
		<br><br>
		<input type="submit" name="submit" value="Hitung Kategori">
	</form>

	<?php
	if(isset($_POST['submit'])){
	    $nilai = $_POST['nilai'];

	    switch (true) {
	        case ($nilai >= 90 && $nilai <= 100):
	            echo "Nilai Anda $nilai, kategori nilai A";
	            break;
	        
	        case ($nilai >= 80 && $nilai < 90):
	            echo "Nilai Anda $nilai, kategori nilai B";
	            break;
	        
	        case ($nilai >= 70 && $nilai < 80):
	            echo "Nilai Anda $nilai, kategori nilai C";
	            break;
	        
	        default:
	            echo "Nilai Anda $nilai, kategori nilai D";
	            break;
	    }
	}
	?>
</body>
</html>
