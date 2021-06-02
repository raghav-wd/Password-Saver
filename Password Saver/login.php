<?php
session_start();
include "config.php";



$username = $_POST['username'];
$password = $_POST['password'];
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);
$username = htmlentities($username);
$password = htmlentities($password);

$sql = "select pass from users where username='$username'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
$pass = $row['pass'];
if($password == $pass)
{
    header("Location: passwords.php");
    $_SESSION['username'] = $username;
}
else
{
    echo "failed";
}


?>