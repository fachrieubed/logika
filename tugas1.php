<?php
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66, 50, 48,];

$kompeten = [];
$belumKompeten = [];

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $belumKompeten[] = $nilai;
    }
}

echo "Kelompok 1 (Tos Kompeten): ";
foreach ($kompeten as $nilai) {
    echo $nilai . " ";
}

echo "\n  <br>" ;

echo "Kelompok 2 (Teu acan kompeten): ";
foreach ($belumKompeten as $nilai) {
    echo $nilai . " ";
}
?>


