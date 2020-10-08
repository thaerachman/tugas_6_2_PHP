<?php
$hargaJambu = 15000;
$isiPerDus = 5 ;
$stokDus = 2;
$hargaDusBekas = 2000;

$totalJual = (($hargaJambu*$isiPerDus) * $stokDus) + ($hargaDusBekas*$stokDus);

echo "==================================<br>";
echo "Harga Jambu = Rp.$hargaJambu /Kg <br>";
echo "Harga Kardus = Rp.$hargaDusBekas /Pcs <br> ";
echo "Total Penjualan (Dus dan Jambu) = Rp.$totalJual <br>";
echo "==================================<br>";

?>