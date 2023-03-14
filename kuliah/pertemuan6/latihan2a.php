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
    ]
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