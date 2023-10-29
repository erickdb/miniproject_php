<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tokoku</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="container-fluid">
        <?php
        include_once 'includes/config.php';
        include_once 'includes/functions.php';
        include_once 'models/person.php';
        include_once 'models/agama.php';
        //potongan2 layout web
        include_once 'view/header.php';
        include_once 'view/navbar.php';
        ?>
        <br/>
               <?php
               //tangkap request di URL
               if (isset($_REQUEST['hal'])){
                  $hal = $_REQUEST['hal'];
                  //tempatkan halaman sesuai request di URL 
                  include_once 'view/'. $hal.'.php';
                  
                }else{
                    include_once 'view/home.php';
                }
               ?>
        <br/>
        <?php include_once 'view/footer.php' ?>
        
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>