<?php 
if(isset($_SESSION['role'])) {
  if ($_SESSION['role'] == 'admin') {
  // Jika sudah login
?>
    <?php
//buat array scalar judul kolom
$ar_judul = ['NO','NAMA','GENDER','TEMPAT LAHIR','TANGGAL LAHIR','ALAMAT','NO HP','EMAIL','KAMPUS','SOSMED','AGAMA','FOTO','ACTION'];
//ciptakan object dari class person
$obj_person = new contact_person();
//panggil fungsionalitas terkait
$rs=$obj_person->index();
//print_r($rs); die();
?>
<h3>Daftar person</h3>
<a href="index.php?hal=person_form_create" class="btn btn-warning text-dark fs-6"><b>Tambah</b></a>
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
				<td><?= $person['agama'] ?></td>
				<td width="5%">
					<?php
					if(!empty($person['foto'])){
					?>
						<img src="images/<?= $person['foto'] ?>" width="100%" />
					<?php
					}
					else{
					?>
						<img src="images/nophoto.jpg" width="100%" />
					<?php } ?>	
				</td>
        		<td width="3%">
					<form method="POST" action="person_controller.php">
					<a  href="?hal=person_form_update&id=<?php echo $person['id'];?>" class="btn btn-warning">
						<i class="bi bi-pencil"></i>
					</a> 
					<a onclick="return confirm ('Anda Yakin Ingin Menghapus Data Ini?')" href="?hal=person_form_delete&id=<?php echo $person['id'];?>" class="btn btn-danger">
						<i class="bi bi-trash"></i>
					</a> 
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
//ciptakan object dari class person
$obj_person = new contact_person();
//panggil fungsionalitas terkait
$rs=$obj_person->index();
//print_r($rs); die();
?>
<h3>Daftar person</h3>
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
				<td width="5%">
					<?php
					if(!empty($person['foto'])){
					?>
						<img src="images/<?= $person['foto'] ?>" width="100%" />
					<?php
					}
					else{
					?>
						<img src="images/nophoto.jpg" width="100" />
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