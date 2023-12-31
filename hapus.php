<?php

include("config.php");

if (isset($_GET["id"])) {
    // ambil id
    $id = $_GET["id"];

    // buat query hapus
    $sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // cek apakah query hapus berhasil?
    if ($query) {
        header('Location: list-siswa.php');
    } else {
        die("Gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}
