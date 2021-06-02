<?php
include 'config.php';
session_start();

if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $name = $_POST['uname'];
    $pass = $_POST['pass'];

    $sql = "insert into users(username, name, pass, text) values('$username','$name','$pass','')";
    $res = mysqli_query($conn, $sql);
    if($res) {
        $_SESSION['message'] = "You have been registered successfully.";
        header("Location: index.php");
    }
    else{
        echo "Something went wrong. Try Again!";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Texdo | Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css"/>
    <link rel="stylesheet" href="framework.css"/>
    <meta name="theme-color" content="skyblue"/>

    <style>
        .form-container{
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <div class="form-container container-2">
        <form action="signup.php" method="POST">
        <label>Username</label><br />
        <input type="text" name="username"/><br /><br />
        <label>Name</label><br />
        <input type="text" name="uname"/><br /><br />
        <label>Password</label><br />
        <input type="password" name="pass" /><br /><br />
        <input type="submit" name="signup" value="signup"/>
        </form>
    </div>

</body>

</html>