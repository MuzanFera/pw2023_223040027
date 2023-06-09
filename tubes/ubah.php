<?php
require('function.php');

$username = 'Ubah Akun Admin';
$id = $_GET['id'];
$admin = query("SELECT * FROM tb_logreg WHERE id = $id")[0];

// ketika tombol submit di klik
if (isset($_POST["ubah"])) {
    //jalankan fungsi tambah()
    if (ubah($_POST) > 0) {
        echo "<script>
            alert('Akun Berhasil Diubah!');
            document.location.href = 'admin/dashboard.admin.php';
        </script>";
    }
}

require('views/ubah.view.php');