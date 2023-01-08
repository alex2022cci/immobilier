<?php

    $con = mysqli_connect("localhost", "root", "", "immobilier");

    if(mysqli_errno($con)){
        die("connexion échouée".mysqli_connect_errno());
    }
?>