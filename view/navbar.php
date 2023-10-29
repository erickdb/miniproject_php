<?php
// Periksa apakah pengguna sudah login
if(isset($_SESSION['role'])) {
    // Jika sudah login, sembunyikan nav-item Login dan Register
    $hideLoginRegister = 'style="display:none;"';
} else {
    // Jika belum login, biarkan nav-item Login dan Register terlihat
    $hideLoginRegister = '';
}
if(!isset($_SESSION['role'])) {
    // Jika belum login, sembunyikan nav-item Logout dan nav-item person
    $hideLogout = 'style="display:none;"';
    $hideperson = 'style="display:none;"';
} else {
    // Jika sudah login, sembunyikan nav-item Logout dan nav-item person
    $hideLogout = '';
    $hideperson = '';
}
?>
<div class="row">
    <div class="col-md-12">
        <!----------- awal menu ----------------->
        <nav class="navbar navbar-expand-lg bg-warning" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand fs-3" href="#">Contact <b class="text-dark">Person</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3 fs-6">
                    <li class="nav-item">
                    <a class="active nav-link" aria-current="page" href="index.php?hal=home">Home</a>
                    </li>
                    <li class="nav-item" <?= $hideperson; ?>>
                    <a class="active nav-link" href="?hal=contact_person" aria-current="page">
                        Person
                    </a>
                    </li>
                    <li class="nav-item dropdown" <?=$hideLoginRegister; ?>>
                        <a class="active nav-link dropdown-toggle bg-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Login & Register
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="auth/form_login.php">Login</a></li>
                            <li><a class="dropdown-item" href="auth/form_register.php">Register</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" <?= $hideLogout; ?>>
                        <a class="active nav-link bg-dark" href="logout.php" aria-current="page">
                            Logout
                        </a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <!----------- akhir menu ---------------->
    </div>
</div>