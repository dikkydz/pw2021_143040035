<?php
/*
Dikky Dzikriansyah
143040035
https://github.com/dikkydz/pw2021_143040035
Pertemuan 5 - 4 Maret 2021
Mempelajari mengenai Array
*/
?>


<?php

$mahasiswa = [
    ["Dikky Dzikriansyah", "143040035", "Teknik Informatika", "dikkydzikriansyah@gmail.com"],
    ["irwan", "143041234", "Teknik Informatika", "ierwan@gmail.com"],
    ["tedyu", "143021414", "Teknik Informatika", "hgdfasdwqeq@gmail.com"]
];




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
    <li>Nama : <?= $mhs[0]; ?> </li>
    <li>NRP  : <?= $mhs[1]; ?> </li>
    <li>Jurusan : <?= $mhs[2]; ?> </li>
    <li>Email : <?= $mhs[3]; ?> </li>
</ul>
<?php endforeach; ?>

</body>
</html>