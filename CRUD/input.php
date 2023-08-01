<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Baru</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 text-center">
                        <h1>DATA MAHASISWA BARU</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title text-center">
                                    FORMULIR <small>DATA MAHASISWA</small>
                                </h3>
                            </div>
                            <form method="POST" action="input_aksi.php">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NIM</label>
                                        <input class="form-control" type="text" placeholder="NIM" name="nim" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NAMA</label>
                                        <input class="form-control" type="text" placeholder="Nama Lengkap" name="nama" required>
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
                                        <textarea class="form-control" rows="3" placeholder="Alamat ..." name="alamat" required></textarea>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">
                                            SIMPAN
                                        </button>
                                    </div>
                            </form>
                        </div>

                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>