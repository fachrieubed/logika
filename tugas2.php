<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];


$kelompokSama = [];
$kelompokSatu = [];
$kelompokDua = [];

for ($i = 0; $i < count($bil1); $i++) {
    $bilangan = $bil1[$i];


    if (in_array($bilangan, $bil2)) {
        $kelompokSama[] = $bilangan;
    } else {
        $kelompokSatu[] = $bilangan;
    }
}

for ($i = 0; $i < count($bil2); $i++) {
    $bilangan = $bil2[$i];


    if (!in_array($bilangan, $bil1)) {
        $kelompokDua[] = $bilangan;
    }
}

echo "Kelompok yang terdapat di kedua variabel: " . implode(", ", $kelompokSama) . "\n <br>";
echo "Kelompok yang hanya terdapat di variabel \$bil1: " . implode(", ", $kelompokSatu) . "\n <br>";
echo "Kelompok yang hanya terdapat di variabel \$bil2: " . implode(", ", $kelompokDua) . "\n";
?>