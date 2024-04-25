<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script>
        // Check if the session variable is set
        <?php
        session_start();
        if (isset($_SESSION['user_doesnotexist']) && $_SESSION['user_doesnotexist']) {
            // Display the JavaScript alert
            echo "alert('Wrong email or password.');";
            // Unset the session variable to avoid displaying the alert again on page refresh
            unset($_SESSION['user_doesnotexist']);
        }
        
        if (isset($_SESSION['user_is_space']) && $_SESSION['user_is_space']) {
            // Display the JavaScript alert
            echo "alert('empty email or password field!');";
            // Unset the session variable to avoid displaying the alert again on page refresh
            unset($_SESSION['user_is_space']);
        }
        ?>
    </script>
        <link rel="stylesheet" href="../college project/style/style.css">
    </head>
<body>
    <?php
     require('header.php');
    ?>
    <center>
    <div style="max-width: 600px;">
    <h1 class="formheader">Login</h1>
        <form action="../college project/config/login_action.php" method="post">
            <input type="email" name="email" placeholder="email" id="email" autocomplete="off" >
            <input type="password" name="pass" placeholder="password" id="pass" autocomplete="off" >
            <button>Login</button>
        </form>
    </div>
    </center>

    <?php
        require('footer.php');
    ?>
</body>
</html>