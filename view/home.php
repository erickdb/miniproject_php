<?php
// Periksa apakah pengguna sudah login
if(isset($_SESSION['role'])) {
  // Jika sudah login
?>
  <div class="coba">
    <center>
      <h3 class="card-title">Halooo... <?= $_SESSION['full_name']?> </h3>
      <p class="card-text">Now you can see the contact person on the person page</p>
    </center>
  </div>
<?php
} else {
  // Jika belum login
?>
  <div class="coba card text-center align-items-center">
    <div class="card-header">
      HOME PAGE
    </div>
    <div class="card-body">
      <h5 class="card-title">Welcome TO Contact Person</h5>
      <p class="card-text">If you want to see the contact person, you must log in first</p>
      <p class="card-text">If you register an account, you will get the user role as default, if you want the admin role then I can give it</p>
    </div>
  </div>
<?php
}
?>