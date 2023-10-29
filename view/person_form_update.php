<?php
 $obj_person = new contact_person();
 $id_to_edit = $_GET['id']; // Mengambil ID dari parameter URL
 $tampil = $obj_person->getPersonById($id_to_edit);
?>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    UBAH DATA PERSON
                </h2>
            </div>

            <div class="body">
                <form method="POST" enctype="multipart/form-data">

                    <label for="">Nama</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="nama" class="form-control" value="<?= $tampil['nama']?>" />
                        </div>
                    </div>

                    <label for="">Gender</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="gender" class="form-control show-tick" id="">
                                <option value="">--Pilih Jenis Kelamin--</option>
                                <option value="Laki-Laki" <?php if($tampil['gender']=='Laki-Laki') echo "selected";?> >Laki-Laki</option>
                                <option value="Perempuan" <?php if($tampil['gender']=='Perempuan') echo "selected";?> >Perempuan</option>
                            </select>
                        </div>
                    </div>


                    <label for="">Tempat Lahir</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="tempat_lahir" class="form-control" value="<?= $tampil['tempat_lahir']?>" />
                        </div>
                    </div>

                    <label for="">Tanggal Lahir</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="date" name="tanggal_lahir" class="form-control" value="<?= $tampil['tanggal_lahir']?>" />
                        </div>
                    </div>

                    <label for="">Alamat</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="alamat" class="form-control" value="<?= $tampil['alamat']?>"/>
                        </div>
                    </div>

                    <label for="">No. hp</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" name="hp" class="form-control" value="<?= $tampil['hp']?>" />
                        </div>
                    </div>

                    <label for="">Email</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="email" name="email" class="form-control" value="<?= $tampil['email']?>"/>
                        </div>
                    </div>

                    <label for="">Kampus</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="kampus" class="form-control" value="<?= $tampil['kampus']?>"/>
                        </div>
                    </div>

                    <label for="">Sosmed</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="sosmed" class="form-control" value="<?= $tampil['sosmed']?>"/>
                        </div>
                    </div>

                    <label for="">Agama</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="idagama" class="form-control show-tick" id="">
                                <option value="">--Pilih Agama--</option>
                                <option value="Islam" <?php if($tampil['idagama']== 1) echo "selected";?>>Islam</option>
                                <option value="Kristen" <?php if($tampil['idagama']== 2) echo "selected";?>>Kristen</option>
                                <option value="Buddha" <?php if($tampil['idagama']== 3) echo "selected";?>>Buddha</option>
                                <option value="Hindu" <?php if($tampil['idagama']== 4) echo "selected";?>>Hindu</option>
                            </select>
                        </div>
                    </div>

                    <label for="">Foto</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="foto" class="form-control" value="<?= $tampil['foto']?>" />
                        </div>
                    </div>
                    <label for="">Ganti Foto</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="file" name="foto" class="form-control" value="<?= $tampil['foto']?>"/>
                        </div>
                    </div>

                    <button class="btn btn-success" name="proses" type="submit" value="ubah">Ubah</button>
                    <input type="hidden" name="idx" value="<?= $id ?>" />
                </form>

                <?php
                if (isset($_POST['proses']) && isset($_POST['idagama'])) {

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

                    }elseif ($idagama=="Buddha"){
                        $value_agama = 3;
                    }elseif ($idagama=="Hindu"){
                        $value_agama = 4;
                    }

                    // Perbarui foto hanya jika ada file yang diunggah
                    $foto = $_FILES['foto']['name'];
                    $lokasi = $_FILES['foto']['tmp_name'];
                    $upload = move_uploaded_file($lokasi, "images/" . $foto);
                    unlink("images/".$tampil['foto']);

                    // Periksa apakah foto diunggah, jika tidak, gunakan foto lama
                    $fotoToUpdate = $upload ? $foto : $tampil['foto'];

                    $data = [
                        $nama, // ? 1
                        $gender, // ? 2
                        $tempat_lahir, // ? 3
                        $tanggal_lahir, // ? 4
                        $alamat, // ? 5
                        $hp, // ? 6
                        $email, // ? 7 
                        $kampus, // ? 8 
                        $sosmed, // ? 9 
                        $value_agama, // ? 10 
                        $fotoToUpdate, // ? 11 
                        $id_to_edit // ? 12
                    ];
                
                    // Perbarui data dengan memanggil fungsi updatePerson
                    $obj_person = new contact_person();
                    $sql = $obj_person->updatePerson($data);
                    ?>
                    <script type="text/javascript">
                            alert("Data Berhasil di Simpan");
                            window.location.href = "?hal=contact_person";
                    </script>
                
                    <?php
                }

                ?>