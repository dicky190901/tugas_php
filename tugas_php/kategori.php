<form method="POST" action="kategori.php">
  <label for="nama">Nama:</label>
  <input type="text" id="nama" name="nama" required>

  <label for="tinggi_badan">Tinggi Badan (cm):</label>
  <input type="number" id="tinggi_badan" name="tinggi_badan" required>

  <label for="berat_badan">Berat Badan (kg):</label>
  <input type="number" id="berat_badan" name="berat_badan" required>

  <button type="submit">Hitung BMI</button>
</form>

<?php

if (!isset($_POST['nama']) || !isset($_POST['tinggi_badan']) || !isset($_POST['berat_badan'])) {
  echo "Isi Form diatas untuk mengetahui BMI mu";
  exit();
}




$nama = $_POST['nama'];
$tinggi_badan = $_POST['tinggi_badan'];
$berat_badan = $_POST['berat_badan'];


$tinggi_m = $tinggi_badan / 100;
$bmi = $berat_badan / ($tinggi_m * $tinggi_m);


if ($bmi < 18.5) {
  $status = "kurus";
} elseif ($bmi >= 18.5 && $bmi <= 24.9) {
  $status = "normal";
} elseif ($bmi >= 25 && $bmi <= 29.9) {
  $status = "gemuk";
} else {
  $status = "obesitas";
}


echo "Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk $status.";
?>
