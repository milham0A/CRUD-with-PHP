<?php

include 'config.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];


mysqli_query($koneksi, "INSERT into data_mahasiswa(nim,nama,gender,jurusan,alamat) values('$nim','$nama','$gender','$jurusan','$alamat')");


header("location:../index.php");
