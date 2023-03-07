<?php 

// $angka = 5;

// Memeriksa apakah $angka itu biangan GANJIL
// Bilangan yang jika dibagi 2 sisanya 1

function cek_ganjil_genap($angka) { // parameter

if($angka % 2 == 1) {
    
    return "$angka adalah BIlangan GANJIL!";

} else {

    return "$angka adalah BIlangan GENAP!";

}

}

print cek_ganjil_genap(10); // argument
print "<br>";
print cek_ganjil_genap(5);
print "<br>";
print cek_ganjil_genap(101);


?>