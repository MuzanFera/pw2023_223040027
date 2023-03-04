<?php

function urutanAngka($angka) {

    $m = 1;
    for ($i = 1; $i <= $angka; $i++) {

        for ($j = 1; $j <= $i; $j++) {

            print $m . " ";
            $m++;

        }

        print "<br>";

    }

}

print urutanAngka(5);

?>