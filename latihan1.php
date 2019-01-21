<?php 


$mahasiswa = [
    "nama" => "Muhammad Iqbal Aulia Rafi",
    "NIM" => "16410100012",
    "email" => "miqbalar16@gmail.com"
];

// Menampilkan array assosiatif
// var_dump($mahasiswa);


// Menampilkan array assosiatif dalam bentuk JSON
$data = json_encode($mahasiswa);
echo $data;
?>