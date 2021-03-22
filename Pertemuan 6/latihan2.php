<?php
/*
Dikky Dzikriansyah
143040035
https://github.com/dikkydz/pw2021_143040035
Pertemuan 6 - 11 Maret 2021
Mempelajari mengenai Associative Array
*/
?>


<?php
// $mahasiswa = [
//     ["Dikky Dzikriansyah", "143040035", "Teknik Informatika", "dikkydzikriansyah@gmail.com"],
//     ["irwan", "143041234", "Teknik Informatika", "ierwan@gmail.com"]
// ];

// Array Associative
// Definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
    "nama" => "Dikky Dzikriansyah", 
    "nrp" => "143040035",
    "email" => "dikkydzikriansyah@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "foto1.jpg"
    ],
    [
    "nama" => "irwan setiawan", 
    "nrp" => "143040123",
    "email" => "irwansyah@gmail.com",
    "jurusan" => "Teknik Informatika",
    "tugas" => [90,80, 100],
    "gambar" => "foto2.jpg"

    ]
];

// echo $mahasiswa[1]["tugas"] [1];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"];?>">
        </li>
        
        <li> <?= $mhs["nama"]; ?> </li>
        <li> <?= $mhs["nrp"]; ?> </li>
        <li> <?= $mhs["email"]; ?> </li>
        <li> <?= $mhs["jurusan"]; ?> </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>