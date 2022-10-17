<?php
session_start();

if (isset($_SESSION['loggedin'])) {


    $link = mysqli_connect('localhost', 'root', '', 'art_gallery') or die('Unable to connect the server. ');

    $name = $_SESSION['username'];
    $sql = "SELECT name,username ,dob,mobile_no,email from newcustomer where newcustomer.username='$name'";
    $res = mysqli_query($link, $sql);
    $result = mysqli_fetch_assoc($res);





    //     echo '<table border="1"><tr><th>CUSTOMER NAME</th><th>CUSTOMER dob</th><th>gender</th><th>
    // email </th></tr>';
    //     while ($result = mysqli_fetch_assoc($res)) {
    //         echo '<tr><td>' . $result['username'] . '</td>
    //            <td>' .
    //             $result['dob'] . '</td><td>' . $result['gender'] . '</td><td>' . $result['email'] . '</td>
    //                 </tr>';
    //     }
    //     echo '</table>';


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
        <!-- <div class="logodiv" >
           
        </div> -->

        <div class="options">

            <ul>
                <li><img class="logo" src="logo.png" alt=""></li>
                <li><a href="home_1.php">Home</a></li>
                <!-- <li><a href="">Explore</a></li> -->
                <li><a href="account.php">Account</a></li>
                <!-- <li><a href="">Settings</a></li> -->
                <!-- <li><a href="">Saved</a></li> -->
                <li><a href="">About Us</a></li>
            </ul>
        </div>

        <!-- <div class="space"></div>

        <form class="searchform" action="/action_page.php">
            <input type="text" class="search" placeholder="Search" name="search">
        </form>

        <img class="searchicon" src="icon1.png" alt=""> -->


    </header>

    <div class="body">
        <div class="banner">
            <img class="ban" src="banner2.png" alt="">
        </div>

        <div class="main">
            <!-- <div class="animation">
                <img class="anim" src="https://media0.giphy.com/media/yH6LWrrwHUUW6TssXZ/giphy.gif?cid=ecf05e47yln29mgyqe1bsocit9awid6xshmkw1zsfqy7wmce&rid=giphy.gif&ct=s" alt="">
             </div> -->

            <div class="content">
                <div class="pic">
                    <img class="dp" src="me.png" alt="">
                </div>

                <div class="details">
                    <div class="user">

                        <?php
                        echo $result['username'];

                        ?>

                    </div>
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


                        <strong> <a href="user_art.php">Click to see your arts: </a> </strong>

    



                        <?php
                        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        //     // session_start();
                        //     $username = $_POST['username'];
                        //     $password = $_POST['pwd'];
                        //     $_SESSION['loggedin'] = 'log';

                        //     $link = mysqli_connect('localhost', 'root', '', 'art_gallery') or die('Unable to connect the server. ');
                        //     $query = "select admin_id ,admin_password from admin where admin_id='$username' and admin_password='$password' ";
                        //     $result = mysqli_query($link, $query);
                        //     if ($result1 = mysqli_fetch_assoc($result)) {
                        //         $_SESSION['username'] = $result1['username'];
                        ?>
                                <!-- <strong> <a href="user_art.php">Click to see your arts: </a> </strong> -->
                        <?php
                        //         exit();
                        //     }
                        // }
                        ?>


                    </div>
                </div>
            </div>

            <!-- <div class="animation1">
                <img class="anim1" src="https://media1.giphy.com/media/ZEHhZuaNtWnF55kbs8/giphy.gif?cid=ecf05e47i41m4m1ylu9rl3f9l8y8ovgajqoq83tdfojew03u&rid=giphy.gif&ct=s" alt="">
             </div>
        </div> -->


        </div>
</body>

</html>