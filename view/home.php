<?php
// Periksa apakah pengguna sudah login
if(isset($_SESSION['role'])) {
  // Jika sudah login
?>
  <div class="card text-center">
    <div class="card-header">
      Welcome
    </div>
    <div class="card-body">
      <h5 class="card-title">Halooo... <?= $_SESSION['full_name']?> </h5>
      <p class="card-text">Anda Sekarang ddapat melihat contact person di page person</p>
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
      <h5 class="card-title">Selamat Datang di Webku</h5>
      <p class="card-text">Jika Ingin Melihat Contact Person Maka Harus Login Terlebih Dahulu</p>
    </div>
  </div>
<?php
}
?>