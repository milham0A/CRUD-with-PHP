<?php

include 'config.php';

if (isset($_GET['hapus'])) {
    mysqli_query($koneksi, "DELETE from data_mahasiswa where data_mahasiswa.nim='$_GET[hapus]'");
    header("location:../index.php");
}
