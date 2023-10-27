<?php 
if(isset($_SESSION['role'])) {
  if ($_SESSION['role'] == 'admin') {
  // Jika sudah login
?>
    <div class="card text-center">
      <div class="card-header">
        Welcome
      </div>
      <div class="card-body">
        <h5 class="card-title">Halooo... <?= $_SESSION['role']?> </h5>
        <p class="card-text">adwa</p>
      </div>
    </div>
  <?php
  } else {
    // Jika belum login
  ?>
    <div class="card text-center">
      <div class="card-header">
        Welcome
      </div>
      <div class="card-body">
        <h5 class="card-title">Halooo... <?= $_SESSION['role']?></h5>
        <p class="card-text">awdasf</p>
      </div>
    </div>
  <?php
  }
}
?>