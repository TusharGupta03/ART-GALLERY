<?php
session_start();

if (isset($_SESSION['loggedin'])) {


    $link = mysqli_connect('localhost', 'root', '', 'art_gallery') or die('Unable to connect the server. ');

    $name = $_SESSION['username'];
    $sql = "SELECT name,username ,dob,mobile_no,email from newcustomer where newcustomer.username='$name'";
    $res = mysqli_query($link, $sql);
    $result = mysqli_fetch_assoc($res);
} else {
    header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="account.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <header class="nav">

        <div class="options">

            <ul>
                <li><img class="logo" src="logo.png" alt=""></li>
                <li><a href="home_1.php">Home</a></li>
                <!-- <li><a href="">Explore</a></li> -->
                <li><a href="account.php">Account</a></li>
                <!-- <li><a href="">Settings</a></li> -->
                <!-- <li><a href="">Saved</a></li> -->
                <li><a href="home_1.php#about">About Us</a></li>
            </ul>
        </div>

        <div class="space"></div>

        <div class="btn">
            <ul>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </div>



    </header>

    <div class="body">
        <div class="banner">
            <img class="ban" src="banner2.png" alt="">
        </div>

        <div class="main1">
            <!-- <div class="animation">
                <img class="anim" src="https://media0.giphy.com/media/yH6LWrrwHUUW6TssXZ/giphy.gif?cid=ecf05e47yln29mgyqe1bsocit9awid6xshmkw1zsfqy7wmce&rid=giphy.gif&ct=s" alt="">
            </div> -->

            <div class="content">
                <div class="main">
                    <div class="pic">
                        <img class="dp" src="https://media1.giphy.com/media/TvMVORj5GsjreUpfxX/200w.webp" alt="">
                        <!-- <img class="dp" src="me.png" alt=""> -->
                    </div>
                    <div class="name">
                        <div class="usernametxt">
                            <?php
                            echo $result['username'];

                            ?>
                        </div>

                    </div>
                </div>


                <div class="details">




                    <div class="detailssub">
                        <?php
                        echo $result['name'];

                        ?> <br>
                        <strong> Email: </strong><?php
                                                    echo $result['email'];

                                                    ?><br>
                        <strong> DOB: </strong> <?php
                                                echo $result['dob'];

                                                ?> <br>
                        <strong>Mobile no: </strong> <?php
                                                        echo $result['mobile_no'];

                                                        ?>
                        <br>


                        <!-- <strong> <a href="user_art.php">Click to see your arts: </a> </strong> -->








                    </div>

                    <div class="user">

                        <div class="count">
                            
                            
                            <div class="textcount">
                                Uploaded
                            </div>

                        </div>


                        <div class="clickdiv">
                            <strong> <a class="click" href="user_art.php"> View </a> </strong>
                        </div>

                    </div>
                    <div class="user">

                        <div class="count">

                            
                            <div class="textcount">
                                Purchased
                            </div>

                        </div>


                        <div class="clickdiv">
                            <strong> <a class="click" href="orders.php"> View </a> </strong>
                        </div>

                    </div>

                </div>
            </div>

            <div class="animation1">
                <img class="anim1" src="https://media1.giphy.com/media/ZEHhZuaNtWnF55kbs8/giphy.gif?cid=ecf05e47i41m4m1ylu9rl3f9l8y8ovgajqoq83tdfojew03u&rid=giphy.gif&ct=s" alt="">
            </div>
        </div>


    </div>
</body>

</html>