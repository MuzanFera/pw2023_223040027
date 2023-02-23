<?php 

// Pengulangan while
// 1. Inisialisasi / Nilai awal
// 2. Kondisi Terminasi / Kapan pengulangannya berhenti
// 2. Increment / Decrement

print "Mulai <br>";

// inisialisasi
$nilai_awal = 10;

// kondisi terminasi
while ($nilai_awal >= 1) {
    print "Hello World $nilai_awal x<br>";

    // increment / decrement
    // cara1
    $nilai_awal = $nilai_awal - 1;

    // cara2
    // $nilai_awal--;
}

print "Selesai <br>";

print "<hr>";


// for
for ($nilai_awal = 1; $nilai_awal <= 10; $nilai_awal++) {
    print "Hello World $nilai_awal x<br>";
}

?>