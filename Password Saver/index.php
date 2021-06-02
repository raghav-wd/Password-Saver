<?php
include 'config.php';
session_start();
?>
<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" href="main.css"/>
        <link rel="stylesheet" href="framework.css"/>
        <meta name="theme-color" content="skyblue"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            .round-signup a{
                text-decoration: none;
                color: black;
                font-size: 16px;

            }
        </style>
    </head>

    <body>
        <div>
            <h1 class="login-container">Login</h1>
        </div>
        
        <form action="login.php" method="POST" id="login">
            <div class="container-4">
                    <h5><?php if(isset($_SESSION['message'])) {
    echo $_SESSION['message'];
            unset($_SESSION['message']);

}?></h5><br/>
                    <label>Username</label><br/>
                    <input type="text" name="username"/><br/>
                    <label>Password</label><br/>
                    <input type="password" name="password"/><br/>
                    <input name="login" type="submit" value="Log in"/>
            </div>
        </form>

        <div class="round-signup">
            <p><a href="signup.php">Sign Up</a></p>
        </div>
    </body>
</html>