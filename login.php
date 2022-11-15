



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $_SESSION['time'] = time();
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    $_SESSION['loggedin'] = 'log';

    $link = mysqli_connect('localhost', 'root', '', 'art_gallery') or die('Unable to connect the server. ');
    $query = "select username ,password from newcustomer where username='$username' and password='$password' ";
    $result = mysqli_query($link, $query);
    if ($result1 = mysqli_fetch_assoc($result)) {
        $_SESSION['username'] = $result1['username'];
        header('location:home_1.php?uid=' . $result1['username'] . '');
        exit();
    }

    $link = mysqli_connect('localhost', 'root', '', 'art_gallery') or die('Unable to connect the server. ');
    $query = "select admin_id ,admin_password from admin where admin_id='$username' and admin_password='$password' ";
    $result = mysqli_query($link, $query);
    if ($result1 = mysqli_fetch_assoc($result)) {
        $_SESSION['username'] = $result1['username'];
        header('location:admin.php?uid=' . $result1['username'] . '');
        exit();
    }


    session_unset();
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        body {
            background: url("login.png");
            background-size: 100%;
            height: 100%;
            width: 100%;
            background-size: 100%;
        }
    </style>
</head>

<body>

    <div class="all">

        <div class="body">

            <div class="head">
                Login
            </div>


            <div class="content">
                <form action="login.php" method="post">


                    <label for="user">User name

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $query = "SELECT * FROM newcustomer WHERE username = '$username'";
                            $result = mysqli_query($link, $query);
                            if ($result) {
                                echo '<span style="color: red;">username is incorrect </span>';
                            }
                        }
                        ?>


                    </label>
                    <input type="text" name="username" /><br />

                    <label for="pwd">Password

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $query = "SELECT * FROM newcustomer WHERE username = '$password'";
                            $result = mysqli_query($link, $query);
                            if ($result) {
                                if (mysqli_num_rows($result) < 1) {
                                    echo '<span style="color: red;">password is incorrect </span>';
                                }
                            }
                        }
                        ?>


                    </label>
                    <input type="password" name="pwd" /><br />



                    <div class="buttondiv">
                        <input class="button" type="submit" value="Login">
                    </div>

                </form>
            </div>

        </div>


        <div class="logo">
            <img src="text.png" alt="">
        </div>



    </div>
</body>

</html>