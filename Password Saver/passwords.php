<?php
include "config.php";
session_start();
if(isset($_POST['save'])) {
    $text = $_POST['text'];
    $username = $_SESSION['username'];
    $sql = "UPDATE users SET text='$text' WHERE username='$username'";
    $res = mysqli_query($conn, $sql);
}
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Passwords</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="materialize.min.css" />
    <script src="materialize.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css"/>
    
    <style>
        .ck-container{
            margin: 10px;
        }
        button[type="submit"] {
            background-color: white;
            border: none;
            width: 60px;
            position: absolute;
            right: 10px;
            font-size: 15px;
        }
        body{
            padding: 10px;
        }

    </style>
</head>

<body>
        <div class="bar">
            <div class="user">
               <b></b><?php
               echo $_SESSION['username'];
               ?></b>

                <form action="passwords.php" method="POST" id="formtxt">
                    <div class="ck-container"><textarea id="ckeditor" class="ckeditor" name="text" rows="40" col="40" style="height: 100%;"><?php 
                    $username = $_SESSION['username'];
                    $sql = "select text from users where username='$username'";
                    $res = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($res);
                    $text = $row['text'];
                    echo $text;
                    ?>
                    </textarea></div>
                    <button name="save" type="submit" form="formtxt" value="ave">Save</button>
                </form>
                <div id="count"></div>
            </div>
        </div>
        <script src="ckeditor/ckeditor.js"></script>
        

        <script>
        </script>
</body>
</html>