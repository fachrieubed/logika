<?php
$belanja = 154000;
$diskon = 0;

if ($belanja >= 100000) {
    $diskon = 7 / 100 * $belanja;
} else{
    echo "jika andi berbelanja di bawah Rp.100.000 maka tidak mendapatkan diskon dan ";
}

$bayar = $belanja - $diskon;

echo "membayar sebesar Rp." . number_format($bayar);
?>
