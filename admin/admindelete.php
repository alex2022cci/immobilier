<?php
   require("./config.php");
        $_GET = $_GET['aid'];
        $sql = "DELETE FROM admin WHeRE aid = {$aid}";
        $result = mysqli_query($con, $sql);

        if($result == true ){
            $msg = '<p class="alert alert-success">Admin deleted</p>';
            header("Location: adminlist.php? msg=$msg");
        } else {
            $msg = '<p class="alert alert-warning">Admin not deleted</p>';
            header("Location: adminlist.php? msg=$msg");
        }

        mysqli_close ( $con );
?>

