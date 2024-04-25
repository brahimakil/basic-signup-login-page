<?php

    include("config.php");

    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $pass =trim($_POST['pass']);


    if(!empty($username) && !empty($email) && !empty($pass)){
        $select_query = "SELECT * From `user` where email = '$email' ";
        $result_select = mysqli_query($con,$select_query);
        $number = mysqli_num_rows($result_select);

        if ($number > 0) {
            // Set a session variable to indicate that the user already exists
            session_start();
            $_SESSION['user_exists'] = true;
            header('Location: ../signup.php');
            exit(); // Make sure to exit after redirection
        }

        else{
            $inserting_query = "INSERT INTO user(name,email,pass) values('$username' , '$email' , '$pass' )";
            $result = mysqli_query($con , $inserting_query);
            header("Location: ../login.php");
        }
            
       
    }

    else if( empty($username) || empty($email) || empty($pass)){
        session_start();
        $_SESSION['user_isspace'] = true;
        header('Location: ../signup.php');
        exit(); // Make sure to exit after redirection
    }


    

  
    


?>