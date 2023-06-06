<?php
require 'function.php';
$id= $_GET['id'];
if(hapus($id) > 0) {
    echo "<script>
            alert('Akun Berhasil Dihapus!');
            document.location.href = 'admin/dashboard.admin.php';
        </script>";
}