<?php

include("config.php");

$email = trim($_POST['email']);
$pass = trim($_POST['pass']);

if(!empty($email) && !empty($pass)){
    $select_query = "SELECT * From `user` where email = '$email'  and pass = '$pass'";
    $result_select = mysqli_query($con,$select_query);
    $number = mysqli_num_rows($result_select);
 
    if($number>0){
        header("Location:../home/index.php");
    }
    else{
        // Set a session variable to indicate that the user already exists
        session_start();
        $_SESSION['user_doesnotexist'] = true;
        header('Location: ../login.php');
        exit(); // Make sure to exit after redirection
    }
}

else{
    // Set a session variable to indicate that the user already exists
    session_start();
    $_SESSION['user_is_space'] = true;
    header('Location: ../login.php');
    exit(); // Make sure to exit after redirection
}

?>