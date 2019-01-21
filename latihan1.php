<?php 


// $mahasiswa = [
//     [
//         "nama" => "Muhammad Iqbal Aulia Rafi",
//         "NIM" => "16410100012",
//         "email" => "miqbalar16@gmail.com"

//     ],
//     [
//         "nama" => "Indana Nazulfa",
//         "NIM" => "18410100006",
//         "email" => "miqbalar16@gmail.com"

//     ]

// ];




// Menampilkan array assosiatif
// var_dump($mahasiswa);


// Menampilkan isi database -> table mahasiswa menggunakan PDO dan JSON

$dbh = new PDO('mysql:host=localhost;dbname=db_ahp', 'root', 'sepatusandal12');

$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);


// Menampilkan array assosiatif dalam bentuk JSON
$data = json_encode($mahasiswa);
echo $data;
?>  