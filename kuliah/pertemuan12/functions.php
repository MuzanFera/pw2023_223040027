<?php
define('BASE_URL', '/pw2023_223040027/kuliah/pertemuan12');

function koneksi() {
  // Koneksi ke DB
  $conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040027') or die('DATABASE ERROR');
  return $conn;
}

function query($query) {
  $conn = koneksi();
  // Query ke tabel mahasiswa
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data) {
  $conn = koneksi();

  $nim = $data['nim'];
  $nama = $data['nama'];
  $email = $data['email'];
  $jurusan = $data['jurusan'];
  $gambar = $data['gambar'];

  $query = "INSERT INTO mahasiswa VALUES(NULL, '$nim', '$nama', '$email', '$jurusan', '$gambar')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  die;
  echo "</pre>";
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : '';
}
