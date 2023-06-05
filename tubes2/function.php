<?php 
// koneksi ke database ("namaserver", "username", "password", "namadb")
session_start();
$conn = mysqli_connect("localhost", "root", "", "pemerintah bandung");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


?>