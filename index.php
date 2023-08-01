<?php
include 'CRUD/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container col-md-6 mt-4">
        <div class="card">
            <div class=" text-center md-5 card-header bg-secondary text-white">
                Tabel Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table table-striped mt-3 table-hover table-bordered">
                    <thead class="table-dark fw-bold text-center align-items-center">
                        <tr>
                            <td>NO</td>
                            <td>NIM</td>
                            <td>NAMA</td>
                            <td>JENIS KELAMIN</td>
                            <td>JURUSAN</td>
                            <td>ALAMAT</td>
                            <td colspan="2">AKSI</td>
                        </tr>
                    </thead>
                    <tbody class="text-center align-items-center">
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * from data_mahasiswa");
                        while ($tampil = mysqli_fetch_array($sql)) {
                            echo "
                            <tr>
                                <td class='align-middle'>$no</td>
                                <td class='align-middle'>$tampil[nim]</td>
                                <td class='align-middle'>$tampil[nama]</td>
                                <td class='align-middle'>$tampil[gender]</td>
                                <td class='align-middle'>$tampil[jurusan]</td>
                                <td class='align-middle'>$tampil[alamat]</td>
                                <td class='align-middle'><a class='btn btn-warning' href='CRUD/editdata.php?nim=" . $tampil['nim'] . "'> EDIT </a></td>
                                <td class='align-middle'><a class='alert-button btn btn-danger' href='javascript:hapusdata(" . $tampil['nim'] . ")'> HAPUS </a></td>
                            </tr>
                            ";
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
                <a href=" CRUD/input.php"><button class="btn btn-primary w-25 mt-4 mb-5">Tambah Data</button></a>
            </div>
        </div>
    </div>
</body>
<script language="JavaScript" type="text/javascript">
    function hapusdata(nim) {
        if (confirm("Apakah anda yakin akan menghapus data ini?")) {
            window.location.href = 'CRUD/delete.php?hapus=' + nim;
            header("location:CRUD/delete.php");
        }
    }
</script>

</html>