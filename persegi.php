<?php

function hitungPanjangSisi($luas)
{
    $sisi = 1;

    while ($sisi * $sisi < $luas) {
        $sisi++;
    }

    return $sisi;
}

$luas = 25;

$panjangSisi = hitungPanjangSisi($luas);

echo "Panjang sisi: $panjangSisi cm\n  <br>";
echo "Luas: $luas cm^2\n";

?>
