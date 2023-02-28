<?php 

    function luas_dua_kubus($a, $b) { //ketahui sisi kubus

        //hitung luas masing-masing
        $luas_a = $a * $a * $a;
        $luas_b = $b * $b * $b;

        //jumlahkan hasilnya
        $total = $luas_a + $luas_b;

        //kembalikan nilai jawabannya
        return $total;

    }

    // fungsi hanya mengembalikan nilai $total, karna belum mencetaknya ke layar, jadi tetap harus menggunakan echo atau print
    print luas_dua_kubus(9,4); //menghasilkan 793

?>