<?php
/*
Dikky Dzikriansyah
143040035
https://github.com/dikkydz/pw2021_143040035
Pertemuan 7 - 18 Maret 2021
Mempelajari mengenai Get & Post juga mengenai SUPERGLOBALS & VARIABLE SCOPE
*/
?>


<!-- <?php
// Variable Scope / lingkup variabel
$x = 10;

function tampilX() {
    // $x = 20;
    global $x;
    echo $x;
}

tampilX();
// echo "<br>";
// echo $x;


?> -->



<!-- <?php
// SUPERGLOBALS
// Variable global milik PHP
// merupakan Array Associative

// var_dump($_SERVER);
// echo $_SERVER["SERVER_NAME"];

?> -->


<?php
// $_GET

$mahasiswa = [
    [
    "nama" => "Dikky Dzikriansyah", 
    "nrp" => "143040035",
    "email" => "dikkydzikriansyah@gmail.com",
    "jurusan" => "Teknik Informatika",
    "tugas" => [90,80, 100],
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
?>

<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
</body>
</html>


    <!-- <ul>
        <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
        <li><?= $mhs["nama"]; ?></li>
        <li><?= $mhs["nrp"]; ?></li>
    </ul> -->

