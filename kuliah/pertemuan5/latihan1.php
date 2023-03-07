<?php 

// ARRAY

// Membuat Array

$hari = array('Senin', 'Selasa', 'Rabu');

$bulan = ['Januari', 'Februari', 'Maret'];

$myArray = ['MuzanFera', 19, false];

$binatang = ['🐈‍⬛', '🐇', '🐒', '🐼', '🐨', '🐄'];

// Mencetak Array

print $hari[1]; // 1 elemen menggunakan elemennya

print "<hr>";

var_dump($hari);

print "<hr>";

print_r($bulan);

print "<hr>";

var_dump($myArray);

print "<hr>";


// Manipulasi array
// Menambah elemen diakhir menggunakan index
$hari[] = 'Kamis';
$hari[] = "Jum'at";
print_r($hari);
print "<hr>";


// menambah elemen di akhir menggunakan array_push()
array_push($bulan, 'April', 'Mei', 'Juni');
print_r($bulan);
print "<hr>";

// Menambahkan elemen di awal menggunakan array_unshift()
array_unshift($binatang, '🐍');
print_r($binatang);
print "<hr>";

// Menghapus elemen di akhir, menggunakan array_pop()
array_pop($hari);
print_r($hari);
print "<hr>";

// Menghapus elemen di awal, mengguanakan array_shift()
array_shift($hari);
print_r($hari);
print "<hr>";


?>