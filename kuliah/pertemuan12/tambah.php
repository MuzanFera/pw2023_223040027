<?php
require('functions.php');

$name = 'Tambah Data Mahasiswa';

// ketika tombol submit di klik
if(isset($_POST["tambah"])) {
    // jalankan fungsi tambah()
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan!')
                document.location.href = 'index.php';
              </script>";
    }
}

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/tambah.view.php');
