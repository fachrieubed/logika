<?php
$angka = 90;
$kelipatanDari = 3;
$kelipatanHingga = 30;

$jumlahPembagian = 0;

for ($i = $kelipatanDari; $i <= $kelipatanHingga; $i += $kelipatanDari) {
    if ($angka % $i === 0) {
        $jumlahPembagian++;
        echo "<br>";
        echo $i;
    }
}
echo "<br>";
echo "angka $angka bisa di bagi dengan kelipatan 3 sebanyak $jumlahPembagian kali";
?>
