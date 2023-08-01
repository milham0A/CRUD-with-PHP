<?php

include 'config.php';

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
}

$sql = "SELECT * FROM data_mahasiswa WHERE nim='$nim'";

$biodata = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($biodata) > 0) {
    $data = mysqli_fetch_assoc($biodata);
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];


    mysqli_query($koneksi, "update data_mahasiswa set nama='$nama',gender='$gender',jurusan='$jurusan',alamat='$alamat' where nim='$nim'");

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Update Data Berhasil');window.location='../index.php';</script>";
    } else {
        echo "Ouppsss..., maap proses menyimpan data tidak berhasil";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                UPDATE <small>DATA MAHASISWA</small>
                            </h3>
                        </div>
                        <form method="POST" action="">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NAMA</label>
                                    <input class="form-control" type="text" placeholder="Nama Lengkap" name="nama" value="<?php echo $data['nama']; ?>" required>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <label>JENIS KELAMIN</label><br>
                                        <input class="custom-control-input" type="radio" id="customRadio1" name="gender" value="L" required>
                                        <label for="customRadio1" class="custom-control-label">LAKI-LAKI</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio2" name="gender" value="P" required>
                                        <label for="customRadio2" class="custom-control-label">PEREMPUAN</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>JURUSAN</label>
                                    <select class="form-control select2" style="width: 100%;" name="jurusan">
                                        <option selected="selected" value="teknik kimia" required>TEKNIK KIMIA</option>
                                        <option value="bisnis ditital">BISNIS DIGITAL</option>
                                        <option value="informatika">INFORMATIKA</option>
                                        <option value="sastra jepang">SASTRA JEPANG</option>
                                        <option value="administrasi negara">ADMINISTRASI NEGARA</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>ALAMAT</label>
                                    <textarea class="form-control" rows="3" placeholder="Alamat ..." name="alamat" value="<?php echo $data['alamat']; ?>" required></textarea>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="submit">
                                        Update
                                    </button>
                                </div>
                        </form>
                        <p><a href="../index.php" class="btn btn-primary w-25 mt-4 mb-5">Kembali ke Tampil Data</a></p>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>
    </div>
</body>

</html>