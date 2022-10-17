<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        body {
            background: url("signup.png");
            background-size: 100%;
            height: 100%;
            width: 100%;
            background-size: 100%;
        }
    </style>
</head>

<body>

    <div>
        <?php


        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $name = $_POST['firstname'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['pwd'];
            $pass = $_POST['confpwd'];


            $link = mysqli_connect('localhost', 'root', '', 'art_gallery') or die('Unable to connect the server. ');


            $query = "SELECT * FROM newcustomer WHERE username = '$username'";
            $result = mysqli_query($link, $query);
            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                } else {
                    if ($pass == $password) {



                        $insert = "INSERT INTO  newcustomer (name,dob,mobile_no,email,username,password) VALUES
('$name','$dob','$gender','$email','$username','$password')";

                        $results = mysqli_query($link, $insert) or die(mysqli_error($link));


                        header('location:login.php');
                    }
                }
            }
        }


        ?>
    </div>

    <div class="all">

        <div class="logo">
            <img src="text.png" alt="">
        </div>


        <div class="body">

            <div class="head">
                Sign Up
            </div>


            <div class="content">
                <form action="signup.php" method="post">

                    <label for="name">Name</label>
                    <input type="text" class="name" name="firstname" /><br />

                    <div class="side">

                        <label for="dob">Date of birth</label>
                        <input type="date" class="dob" name="dob"> <br>

                        <label for="gender"> Mobile Number</label>
                        <br>
                        <!-- <select class="gen" name="gender">
                            <option class="opt" value="male">Male</option>
                            <option class="opt" value="female">Female</option>
                            <option class="opt" value="other">Other</option>
                            <option class="opt" value="other" hidden selected>Select Gender</option>

                        </select> -->
                        <input type="text" class="abc" name="gender">

                    </div>


                    <label for="email">Enter your email</label>
                    <input type="email" id="email" name="email"> <br>

                    <label for="user">User name

                        <?php




                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $query = "SELECT * FROM newcustomer WHERE username = '$username'";
                            $result = mysqli_query($link, $query);
                            if ($result) {
                                if (mysqli_num_rows($result) > 0) {
                                    echo '<span style="color: red;">this username has been already taken</span>';
                                }
                            }
                        }


                        ?>



                    </label>
                    <input type="text" name="username" /><br />

                    <label for="pwd">Password

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                            if ($pass != $password) {
                                echo  '<span style="color: red;">password dosent match</span>';
                            }
                        }

                        ?>


                    </label>
                    <input type="password" name="pwd" /><br />

                    <label for="pwd">Confirm password</label>
                    <input class="conpass" type="password" name="confpwd" /><br />


                    <div class="buttondiv">
                        <input class="button" type="submit">
                    </div>

                </form>
            </div>





        </div>
    </div>
</body>

</html>