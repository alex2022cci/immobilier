<?php
require("./config.php");
     $_GET = $_GET['uid'];
     $sql = "DELETE FROM user WHeRE uid = {$uid}";
     $result = mysqli_query($con, $sql);

     if($result == true ){
         $msg = '<p class="alert alert-success">User deleted</p>';
         header("Location: userlist.php? msg=$msg");
     } else {
         $msg = '<p class="alert alert-warning">User not deleted</p>';
         header("Location: userlist.php? msg=$msg");
     }

     mysqli_close ( $con );
?>
