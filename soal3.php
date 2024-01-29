<?php

function hitungsuku($a)
{
    $hasil = array();

    for ($n = 1; $n <= 12; $n++) {
        $suku = $a * 4 +$n * 3;
        $hasil[] = $suku;
    }

    return $hasil;
}

$a = 9;

$hasilPerhitungan = hitungsuku($a);

echo "Suku pertama sampai ke-12 dari rumus a*4+n*3 (dengan a = $a):\n <br>";
echo implode(', ', $hasilPerhitungan);