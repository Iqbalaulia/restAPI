<?php 

// Mengambil JSON dari file sendiri
$data = file_get_contents('coba.json');
// Menjadi Array
$mahasiswa = json_decode($data, true);

// Mengambil JSON dari file orang lain
// $data = file_get_contents('http://....');



?>