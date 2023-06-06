<?php 
// koneksi ke database ("namaserver", "username", "password", "namadb")
session_start();
$conn = mysqli_connect("localhost", "root", "", "pemerintah bandung");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

function koneksi() {
    // Koneksi ke DB
    $conn = mysqli_connect('localhost', 'root', '', 'pemerintah bandung') or die('DATABASE ERROR');
    return $conn;
}

function query($query) {
    $conn = koneksi();
    // Query ke tabel logreg
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
  
    return $rows;
}

function tambah($data) {
    $conn = koneksi();
  
    $username = htmlspecialchars($data['username']);
    $email = htmlspecialchars($data['email']);
    $password = htmlspecialchars($data['password']);
    $gambar = htmlspecialchars($data['gambar']);
  
    $query = "INSERT INTO tb_logreg VALUES(NULL, '$username', '$email', '$password', '$gambar')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
  
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
    $query = "DELETE FROM tb_logreg WHERE id = $id";
  
    mysqli_query($conn, $query) or die(mysqli_error($conn));
  
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();
  
    $id = $data['id'];
  
    $username = htmlspecialchars($data['username']);
    $email = htmlspecialchars($data['email']);
    $password = htmlspecialchars($data['password']);
    $gambar = htmlspecialchars($data['gambar']);
  
    $query = "UPDATE tb_logreg SET
                username = '$username',
                email = '$email',
                password = '$password',
                gambar = '$gambar'
              WHERE
                id = $id";
  
    mysqli_query($conn, $query) or die(mysqli_error($conn));
  
    return mysqli_affected_rows($conn);
}

// func cari
function cari($keyword) {
    $query = "SELECT * FROM tb_logreg
                WHERE
                username LIKE '%$keyword%' OR
                email LIKE '%$keyword%'
                ";
    return query($query);
}


?>
