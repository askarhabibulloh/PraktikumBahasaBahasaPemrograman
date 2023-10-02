<?php
$a = 0b10110101;
$b = 0b01101100;

$hasil = $a & $b;
echo $hasil."<br>";

$hasil = $a | $b;
echo $hasil."<br>";

$hasil = $a ^ $b;
echo $hasil."<br>";

$hasil = ~$a;
echo $hasil."<br>";

$hasil = $a >> 1;
echo $hasil."<br>";

$hasil = $b << 2;
echo $hasil."<br>";


?>