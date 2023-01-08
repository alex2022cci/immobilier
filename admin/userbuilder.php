<?php
session_start();

//require('./config.php');

$con = mysqli_connect("localhost", "root", "", "immobilier");

if(mysqli_errno($con)){
    die("connexion échouée".mysqli_connect_errno());
}

if(!isset($_SESSION[''])){
    header('Location: index.php');
}
?>



<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Ventura - Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
    <?php include("./include/header.php");  ?>

    <!--ADMIN to do list-->

    <div class="page-wrapper">
        <div class="container-fluid content">
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">User</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">User</li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                    <div class="card-header">
                            <h4 class="card-title">Adminlist</h4>
                            <?php
                                if(isset($_GET['msg'])){
                                echo $_GET['msg'];
                                }
                            ?>
                        </div>
                        <div class="card-body">
                            <table class="table" id="basic-datatable">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Image</th>
                                        <th>Phone</th>
                                        <th>Delete</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                     $query = mysqli_query($con, "SELECT * user WHERE utype = 'builder'");
                                    while($row =mysqli_fetch_row($query) ){  // l'index commence à 0
                                    ?>
                                    <tr>
                                        <td><?=$row['0']?></td>
                                        <td><?=$row['1']?></td>
                                        <td><?=$row['2']?></td>
                                        <td><?=$row['3']?></td>
                                        <td><?=$row['5']?></td>
                                        <td> <img src="./user/<?= $row['6'];?>" height="50" alt="avatar"> </td>
                                        <td> <a href="userbuilderdelete.php?id=<?= $row['0']; ?>">Delete builder ?</a> </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



	
		
	<!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.select.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatables/buttons.flash.min.js"></script>
		<script src="assets/plugins/datatables/buttons.print.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

</html>
