<?php 
// $mahasiswa = [
//     ["Sandhika Galih", "043040023", "sandhikagalih@unpas.ac.id", "Teknik Informatika"],
//     ["Doddy Ferdiansyah", "033040001", "doddy@gmail.com", "Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array nuerik, kecuali
// Key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Sandhika Galih", 
        "nrp" => "043040023",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Tenik Informatika",
        "gambar" => "1.jpg"
    ],
    [
        "nama" => "Doddy Ferdiansyah", 
        "nrp" => "043040001",
        "email" => "doddy@gmail.com",
        "jurusan" => "Tenik Industri",
        "gambar" => "2.jpg"
    ],
    [
        "nama" => "Asep Saepudin", 
        "nrp" => "043040030",
        "email" => "saepudin@gmail.com",
        "jurusan" => "Tenik Informatika",
        "gambar" => "3.png"
    ],
    [
        "nama" => "Afrizal", 
        "nrp" => "043040047",
        "email" => "afrizal@unpas.ac.id",
        "jurusan" => "Tenik Industri",
        "gambar" => "4.jpg"
    ],
    [
        "nama" => "Kiki Nugraha", 
        "nrp" => "043040100",
        "email" => "kiki_nugraha@gmail.com",
        "jurusan" => "Tenik Industri",
        "gambar" => "5.jpg"
    ],
    [
        "nama" => "Pratama Putra", 
        "nrp" => "043040156",
        "email" => "putra_pratama@unpas.ac.id",
        "jurusan" => "Tenik Informatika",
        "gambar" => "6.jpg"
    ],
    [
        "nama" => "Sifa", 
        "nrp" => "043040240",
        "email" => "sifa@gmail.com",
        "jurusan" => "Tenik Informatika",
        "gambar" => "7.png"
    ],
    [
        "nama" => "Dikdik Dharmawan", 
        "nrp" => "043040400",
        "email" => "dkdharmawan@unpas.ac.id",
        "jurusan" => "Tenik Industri",
        "gambar" => "8.jpg"
    ],
    [
        "nama" => "Indri", 
        "nrp" => "043040259",
        "email" => "indri@@unpas.ac.id",
        "jurusan" => "Tenik Informatika",
        "gambar" => "9.png"
    ],
    [
        "nama" => "Bimo", 
        "nrp" => "043040001",
        "email" => "bimo2000@gmail.com",
        "jurusan" => "Tenik Industri",
        "gambar" => "10.jpg"
    ],

];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>

        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["jurusan"]; ?></li>
            <li>Jurusan : <?= $mhs["email"]; ?></li>
        </ul>
        
    <?php endforeach; ?>
    
</body>
</html>