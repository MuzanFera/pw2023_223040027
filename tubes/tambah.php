<?php
require('function.php');

$username = 'Tambah Akun Admin';

// ketika tombol submit di klik
if(isset($_POST["tambah"])) {
    // jalankan fungsi tambah()
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Akun Berhasil Ditambahkan!')
                document.location.href = 'admin/dashboard.admin.php';
              </script>";
    }
}

require('views/tambah.view.php');