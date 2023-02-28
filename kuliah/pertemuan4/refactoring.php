<?php 
// refactoring ini bisa membuat code tadi menjadi lebih efisien

    function luas_dua_kubus($a, $b) { //ketahui sisi kubus

        //hitung luas masing-masing
        $luas_a = $a * $a * $a; //return $a * $a * $a + $b * $b * $b; ini cara paling efisien karena hanya mengetik ini saja tanpa mengetik code yang ada dibawah
        $luas_b = $b * $b * $b; //return $luas_a + $b * $b *$b; jika ini di tambahkan tidak perlu menambahkan $total = $luas_a + $luas_b;

        //jumlahkan hasilnya
        $total = $luas_a + $luas_b; //return $total = $luas_a + $luas_b; jika ini di tambahkan tidak perlu menambahkan $total

        //kembalikan nilai jawabannya
        return $total;

    }

    // fungsi hanya mengembalikan nilai $total, karna belum mencetaknya ke layar, jadi tetap harus menggunakan echo atau print
    print luas_dua_kubus(9,4); // menghasilkan 793

    $hasil = Luas_dua_kubus(10, 2);
    print $hasil; // menghasilkan 1008

    $x = 4;
    print Luas_dua_kubus($x*3, $x/2); // menghasilkan 1736


?>