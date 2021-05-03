<?php
const HARGA_BOLPOIN = 1750;
const LIMA_RIBU_RUPIAH = 5000;
$total = 12 * HARGA_BOLPOIN;
$cash = 5 * LIMA_RIBU_RUPIAH;
$kembalian = $cash-$total;
echo "Harga 1 Buah Bolpoin = 1750 <br>";
echo "Harga Total = 12 * Harga 1 Buah Bolpoin <br>";
echo "Harga Total = $total <br>";
echo "Cash = 5 * 5000 <br>";
echo "Cash = $cash <br>";
echo "Kembalian Rian = Cash - Harga Total <br>";
echo "Kembalian Rian = $kembalian"
?> 

