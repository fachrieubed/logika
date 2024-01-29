<?php

$barang = [
    ['nama'=>'Ban', 'diskon'=>10],
    ['nama'=>'Oli Mesin'],
    ['nama'=>'Kampas Rem'],
    ['nama'=>'Busi', 'diskon'=>9],
    ['nama'=>'Akumulator', 'diskon'=>7],
];

echo "Barang dengan diskon \n <br>";

foreach($barang as $item) {
    if(isset($item['diskon'])){
        echo "nama" . $item['nama'] . ",diskon" . $item['diskon'] . "%\n <br>";
    }
}

?>