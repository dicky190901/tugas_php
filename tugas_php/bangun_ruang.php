<?php echo "VOLUME BANGUN RUANG <br><br>" ?>
<?php
    $sisi = 8;
    $kubus = $sisi * $sisi * $sisi;

    echo "Rumus Volume Kubus adalah Sisi x Sisi x Sisi <br>";
    echo "Volume Kubus dengan sisi 8 cm adalah " . $kubus . " cm3 <br>";
    echo "<br>";
?>
<?php
    $panjang = 12;
    $lebar = 8;
    $tinggi = 6;
    $balok = $panjang * $lebar * $tinggi;

    echo "Rumus Volume Balok adalah Panjang x Lebar x Tinggi <br>";
    echo "Volume Balok dengan panjang 12 cm, lebar 8 cm, dan tinggi 6 cm adalah " . $balok . " cm3 <br>";
    echo "<br>";
?>
<?php
    $phi = 22/7;
    $r = 14;
    $bola = 4/3 * $phi * ($r ** 3);
    echo "Rumus Volume Bola adalah 4/3 x phi x r^3 <br>";
    echo "Volume Bola dengan jari-jari 14 cm adalah " . $bola . " cm3 <br>";
    echo "<br>";
?>