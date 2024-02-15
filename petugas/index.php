<?php
session_start();
include "../conn/koneksi.php";

$user = $_SESSION['username'];
if ($_SESSION['username']=="") {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <script src="../assets/jquery.min.js"></script>
    <script src="../assets/bootstrap.min.js"></script>
    <style>
      
        .row.content {height: 640px}
        
        
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }
            
        @media screen and (max-width: 767px) {
        .row.content {height: auto;} 
        }
    </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2><?php echo $_SESSION['level'] ?></h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="index.php">Dashboard</a></li>
        <li><a href="?page=stok">Stok</a></li>
        <li><a href="?page=user">User</a></li>
        <li><a href="?page=logout">Log Out</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
    <?php
            if (isset($_GET['page'])) {
                $laman = $_GET['page'];

                switch ($laman) {
                    case 'user':
                        include "user.php";
                        break;

                    case 'stok':
                        include "stok.php";
                        break;

                    case 'logout':
                        include "logout.php";
                        break;
                
                    case 'tambahbarang':
                        include "tambahbarang.php";
                        break;

                    case 'tambahuser':
                         include "tambahuser.php";
                         break;

                    case 'hapususer':
                        include "hapususer.php";
                        break;

                    case 'edituser':
                        include "edituser.php";
                        break;

                    case 'editbarang':
                        include "editbarang.php";
                        break;

                    case 'hapusbarang':
                        include "hapusbarang.php";
                        break;
                         
                    default:
                        # code...
                        break;
                }
            }
            else {
                include "dashboard.php";
            }
        ?>
     </div>
  </div>
</div>


</body>
</html>   