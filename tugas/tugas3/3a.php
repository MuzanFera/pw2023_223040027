<?php

print "<h4>Menghitung Luas Lingkaran</h4>";

function hitungLuasLingkaran($r) {

    print "Jari-jari = $r cm.";

    print "<br>";

    $result = 3.14 * $r * $r;

    print "Luas lingkaran = $result cm<sup>2</sup>";

}

hitungLuasLingkaran(10);

print "<hr>";


print "<h4>Menghitung Keliling Lingkaran</h4>";

function hitungKelilingLingkaran($r) {

    print "Jari-jari = $r cm.";

    print "<br>";

    $result = 2 * 3.14 * $r;

    print "Keliling lingkaran = $result cm";

}

hitungKelilingLingkaran(20);

print "<hr>";

?>