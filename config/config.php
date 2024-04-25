<?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $db = "college_project";

    $con = mysqli_connect($host,$username, $pass , $db);

    if(!$con){
        print "connection error!";
    }


?>