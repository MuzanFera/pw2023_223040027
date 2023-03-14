<?php 
$mahasiswa = [
    ["Sandhika Galih", "043040023", "sandhikagalih@unpas.ac.id", "Teknik Informatika"],
    ["Doddy Ferdiansyah", "033040001", "doddy@gmail.com", "Teknik Industri"]
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
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NRP : <?= $mhs[1]; ?></li>
            <li>Email : <?= $mhs[2]; ?></li>
            <li>Jurusan : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>