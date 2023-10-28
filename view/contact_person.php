<?php 
if(isset($_SESSION['role'])) {
  if ($_SESSION['role'] == 'admin') {
  // Jika sudah login
?>
    <?php
//buat array scalar judul kolom
$ar_judul = ['NO','NAMA','GENDER','TEMPAT LAHIR','TANGGAL LAHIR','ALAMAT','NO HP','EMAIL','KAMPUS','SOSMED','AGAMA','FOTO','ACTION'];
//ciptakan object dari class Produk
$obj_person = new contact_person();
//panggil fungsionalitas terkait
$rs=$obj_person->index();
//print_r($rs); die();
?>
<h3>Daftar Produk</h3>
<a href="index.php?hal=produk_form" class="btn btn-primary">Tambah</a>
<table class="table table-striped">
	<thead>
		<tr>
			<?php
				foreach($ar_judul as $jdl){
					echo '<th>'.$jdl.'</th>';
				}
			?>
		</tr>
	</thead>
	<tbody>
		<?php
		$no = 1;
		foreach($rs as $person){
        ?>    
			<tr>
				<td><?= $no ?></td>
				<td><?= $person['nama'] ?></td>
				<td><?= $person['gender'] ?></td>
				<td><?= $person['tempat_lahir'] ?></td>
				<td><?= $person['tanggal_lahir'] ?></td>
				<td><?= $person['alamat'] ?></td>
				<td><?= $person['hp'] ?></td>
				<td><?= $person['email'] ?></td>
				<td><?= $person['kampus'] ?></td>
				<td><?= $person['sosmed'] ?></td>
				<td><?= $person['idagama'] ?></td>
				<td width="15%">
					<?php
					if(!empty($person['foto'])){
					?>
						<img src="images/<?= $person['foto'] ?>" width="50%" />
					<?php
					}
					else{
					?>
						<img src="images/nophoto.jpg" width="50%" />
					<?php } ?>	
				</td>
        <td>
					<form method="POST" action="produk_controller.php">
					<a href="index.php?hal=produk_detail&id=<?= $person['id'] ?>" 
					   title="Detail Produk" class="btn btn-info btn-sm">
						<i class="bi bi-eye"></i>
					</a>
					<a href="index.php?hal=produk_form&id=<?= $person['id'] ?>" 
					   title="Ubah Produk" class="btn btn-warning btn-sm">
						<i class="bi bi-pencil"></i>
					</a>
					<button type="submit" title="Hapus Produk" class="btn btn-danger btn-sm"
					    name="proses" value="hapus" onclick="return confirm('Anda Yakin diHapus?')">
						<i class="bi bi-trash"></i>
					</button>
					<input type="hidden" name="id" value="<?= $person['id'] ?>" /> 
					</form>
				</td>
			</tr>
        <?php    
		$no++;
		}	
		?>
	</tbody>
</table>
  <?php
  } elseif ($_SESSION['role'] == 'user'){
    // Jika belum login
  ?>
  <?php
    //buat array scalar judul kolom
$ar_judul = ['NO','NAMA','GENDER','TEMPAT LAHIR','TANGGAL LAHIR','ALAMAT','NO HP','EMAIL','KAMPUS','SOSMED','AGAMA','FOTO'];
//ciptakan object dari class Produk
$obj_person = new contact_person();
//panggil fungsionalitas terkait
$rs=$obj_person->index();
//print_r($rs); die();
?>
<h3>Daftar Produk</h3>
<table class="table table-striped">
	<thead>
		<tr>
			<?php
				foreach($ar_judul as $jdl){
					echo '<th>'.$jdl.'</th>';
				}
			?>
		</tr>
	</thead>
	<tbody>
		<?php
		$no = 1;
		foreach($rs as $person){
        ?>    
			<tr>
				<td><?= $no ?></td>
				<td><?= $person['nama'] ?></td>
				<td><?= $person['gender'] ?></td>
				<td><?= $person['tempat_lahir'] ?></td>
				<td><?= $person['tanggal_lahir'] ?></td>
				<td><?= $person['alamat'] ?></td>
				<td><?= $person['hp'] ?></td>
				<td><?= $person['email'] ?></td>
				<td><?= $person['kampus'] ?></td>
				<td><?= $person['sosmed'] ?></td>
				<td><?= $person['idagama'] ?></td>
				<td width="15%">
					<?php
					if(!empty($person['foto'])){
					?>
						<img src="images/<?= $person['foto'] ?>" width="50%" />
					<?php
					}
					else{
					?>
						<img src="images/nophoto.jpg" width="50%" />
					<?php } ?>	
				</td>
			</tr>
        <?php    
		$no++;
		}	
		?>
	</tbody>
</table>
  <?php
  } else {
    echo 'Error 404 Page Not Found';
  }
}
?>