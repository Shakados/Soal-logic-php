<?php
const TOTAL_CABANG = 100;
$hariSatu = 10000;
$hariEnamDelapan = 30100;
$increment = ($hariEnamDelapan - $hariSatu)/(68-1);
$hariDelapanSatu = 10000;

for ($i=1; $i < 81; $i++) {
    $hariDelapanSatu+=300;    
}
echo "Biaya Hari Ke-1 = 10000 <br>";
echo "Biaya Hari Ke-68 = 30100 <br>";
echo "Increment = (Biaya Hari Ke-68 - Biaya Hari Ke-1)/(68-1) <br>";
echo "Increment = 300 <br>";
echo "Pengeluaran Hari Ke-81 = 10000 + (80 * Increment) <br>";
echo "Pengeluaran Hari Ke-81 = $hariDelapanSatu <br?";
?>
