<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    TAMBAH DATA PERSON
                </h2>
            </div>

            <div class="body">
                <form method="POST" enctype="multipart/form-data">

                    <label for="">Nama</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="nama" class="form-control" />
                        </div>
                    </div>

                    <label for="">Gender</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="gender" class="form-control show-tick" id="">
                                <option value="">--Pilih Jenis Kelamin--</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>


                    <label for="">Tempat Lahir</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="tempat_lahir" class="form-control" />
                        </div>
                    </div>

                    <label for="">Tanggal Lahir</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="date" name="tanggal_lahir" class="form-control" />
                        </div>
                    </div>

                    <label for="">Alamat</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="alamat" class="form-control" />
                        </div>
                    </div>

                    <label for="">No. hp</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" name="hp" class="form-control" />
                        </div>
                    </div>

                    <label for="">Email</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="email" name="email" class="form-control" />
                        </div>
                    </div>

                    <label for="">Kampus</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="kampus" class="form-control" />
                        </div>
                    </div>

                    <label for="">Sosmed</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="sosmed" class="form-control" />
                        </div>
                    </div>

                    <label for="">Agama</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select name="idagama" class="form-control show-tick" id="">
                                    <option value="">--Pilih Agama--</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                </select>
                            </div>
                        </div>

                    <label for="">Foto</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="file" name="foto" class="form-control" />
                        </div>
                    </div>

                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary mt-5">
                </form>

                <?php
                if (isset($_POST['simpan']) && isset($_POST['idagama'])) {

                    $obj_person = new contact_person();

                    $nama = $_POST['nama'];
                    $gender = $_POST['gender'];
                    $tempat_lahir = $_POST['tempat_lahir'];
                    $tanggal_lahir = $_POST['tanggal_lahir'];
                    $alamat = $_POST['alamat'];
                    $hp = $_POST['hp'];
                    $email = $_POST['email'];
                    $kampus = $_POST['kampus'];
                    $sosmed = $_POST['sosmed'];
                    $idagama = $_POST['idagama'];
                    $value_agama;
                    if ($idagama=="Islam"){
                        $value_agama = 1;
                    }elseif ($idagama=="Kristen"){
                        $value_agama = 2;

                    }elseif ($idagama=="Budha"){
                        $value_agama = 3;
                    }elseif ($idagama=="Hindu"){
                        $value_agama = 4;
                    }
                    $foto=$_FILES['foto'] ['name'];
                    $lokasi=$_FILES['foto']['tmp_name'];
                    $upload=move_uploaded_file($lokasi, "images/".$foto);

                    $data = [
                        $nama, // ? 1
                        $gender, // ? 2
                        $tempat_lahir, // ? 3
                        $tanggal_lahir, // ? 4
                        $alamat, // ? 5
                        $hp, // ? 6
                        $email, // ? 6
                        $kampus, // ? 6
                        $sosmed, // ? 6
                        $value_agama, // ? 6
                        $foto, // ? 7
                    ];

                    if ($upload){
                        
                                ?>
                                <script type="text/javascript">
                                alert ("Data Berhasil di Simpan");
                                window.location.href="?hal=contact_person";
                                </script>
                                <?php
                        }
                ?>
                <?php
                }

                ?>