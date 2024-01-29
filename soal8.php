<?php


$umurAndi =  67 / 4; 

$nilaiMatematikaAndi = 83;
$nilaiInggrisAndi = 87;
$nilaiIndonesiaAndi = 86;

$umurMin = 16;
$umurMax = 25;
$nilaiMatematikaMin = 87;
$nilaiInggrisMin = 85;
$nilaiIndonesiaMin = 87;
$nilaiRataRataMin = 85;

$umurValid = ($umurAndi >= $umurMin && $umurAndi <= $umurMax);

$nilaiMatematikaValid = ($nilaiMatematikaAndi >= $nilaiMatematikaMin);
$nilaiInggrisValid = ($nilaiInggrisAndi >= $nilaiInggrisMin);
$nilaiIndonesiaValid = ($nilaiIndonesiaAndi >= $nilaiIndonesiaMin);

$nilaiRataRata = ($nilaiMatematikaAndi + $nilaiInggrisAndi + $nilaiIndonesiaAndi) / 3;
$rataRataValid = ($nilaiRataRata >= $nilaiRataRataMin);

if ($umurValid && $nilaiMatematikaValid && $nilaiInggrisValid && $nilaiIndonesiaValid && $rataRataValid) {
    echo "Andi diterima di ikatan dinas";
} else {
    echo "Andi ditolak di ikatan dinas";
}

?>
