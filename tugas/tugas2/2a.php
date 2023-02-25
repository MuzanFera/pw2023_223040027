<?php 

$nama_depan = "Muhammad";
$nama_belakang = "Nugraha";


$i = 1;

// 1 - 100
while ($i <= 100) {
    // if number end dibagi 3 & 5, change number with full mame ($nama_depan & $nama_belakang)
    if ($i % 3 == 0 && $i % 5 == 0) {
        print $nama_depan . " " . $nama_belakang;
    }
    // if number end dibagi 3, change number with front_name ($nama_depan)
    elseif ($i % 3 == 0) {
        print $nama_depan;
    }
    // if number end dibagi 6, change number with last_name ($nama_belakang)
    elseif ($i % 5 == 0) {
        print $nama_belakang;
    }
    // if not, show default number
    else {
        print $i;
    }
    // if not, show default number
    print "<br>";
    $i = $i + 1;
    
}

?>