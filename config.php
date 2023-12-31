<?php

$server = "sql111.infinityfree.com";
$user = "if0_35697730";
$password = "hacker99";
$nama_database = "if0_35697730_pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>