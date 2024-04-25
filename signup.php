<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <script>
        // Check if the session variable is set
        <?php
        session_start();
        if (isset($_SESSION['user_exists']) && $_SESSION['user_exists']) {
            // Display the JavaScript alert
            echo "alert('User already exists.');";
            // Unset the session variable to avoid displaying the alert again on page refresh
            unset($_SESSION['user_exists']);
        }
        
        if (isset($_SESSION['user_isspace']) && $_SESSION['user_isspace']) {
            // Display the JavaScript alert
            echo "alert('empty fields!');";
            // Unset the session variable to avoid displaying the alert again on page refresh
            unset($_SESSION['user_isspace']);
        }
        ?>

           // Check if the session variable is set
       
    </script>
    <link rel="stylesheet" href="../college project/style/style.css">
</head>
<body>
    <?php
     require('header.php');
    ?>

        <center>
            <div  style="max-width: 600px;"  >
                <h1 class="formheader">SignUp</h1>
                    <form action="../college project/config/signup_action.php" method="post"  autocomplete="off">
                        <input type="text" name="username" placeholder="username" id="username" autocomplete="off">
                        <input type="email" name="email" placeholder="email@" id="email" autocomplete="off">
                        <input type="password" name="pass" placeholder="password" id="pass" autocomplete="off">
                        <button>SignUp</button>
                    </form>
            </div>
        </center>

    
    <?php
        require('footer.php');
    ?>
</body>
</html>