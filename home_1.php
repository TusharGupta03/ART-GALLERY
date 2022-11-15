<?php
session_start();
if (isset($_SESSION['loggedin'])) {

    if (time() - $_SESSION["time"] > 6000000000000) {

        header("Location:logout.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="emblem_art2.ico" type="image/ico">
    <title>Antiquities</title>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3269c53e41.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<style>
    #footer {
        text-align: center;
        display:flex;
        margin-top: 30px;
        background-color: #BB46C3;
    }

    .logo {
        width: 10px;
        margin-top: 20px;
    }

    .logo1{
        margin-left: 600px;
    }

    .logo:hover {
        color: blue;
    }

    .footer-text {
        color: black;
        font-weight: bolder;
        background-color: #BB46C3;
        padding-bottom: 30px;
    }

    .ball {
        height: 18px;
        width: 12px;
        border: 1px solid red;
        background-color: white;
        padding-top: 0px;
        color: red;
        /* z-index: 1; */
        border-radius: 12px;
        margin-top: 15px;
        background-color: white;
        font-size: 13px;
        padding-left: 5px;
        font-weight: bolder;
    }
</style>

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
                <li><a href="#about">About Us</a></li>

            </ul>
        </div>

        <div class="space"></div>

        <form class="searchform" action="search.php" method="POST">
            <input type="text" class="search" placeholder="Search" name="search">
        </form>

        <!-- <img class="searchicon" src="icon1.png" alt=""> -->

        <?php
        // session_start();
        if (isset($_SESSION['loggedin'])) {
        ?>

            <div class="navbuttons">

                <div class="buttonnavdiv">
                    <?php
                    $link = mysqli_connect('localhost', 'root', '', 'art_gallery') or die('Unable to connect the server. ');
                    $name = $_SESSION['username'];
                    $query = "select * from c where customername='$name' ";
                    $result = mysqli_query($link, $query);
                    if ($result1 = mysqli_fetch_assoc($result)) {
                        $item = mysqli_num_rows($result);

                    ?>

                        <span>

                            <span style="margin-bottom:0px; margin-left: 47px; margin-right: 9px; padding-bottom: 0px; display: -webkit-box; height: 22px;">
                                <!-- <button class="ball" placeholder="sdf"></button> -->
                                <div class="ball">
                                    <?= $item ?>
                                </div>

                            </span>
                            <span>


                                <a href="account.html"> <img src="cart1.jpg" alt="" style="width: 34px;
                            height: 34px ;
padding-left:12px;
                            padding-right: 13px;
                            "> </a>

                            </span>



                        </span>

                    <?php
                    } else {
                    ?>
                        <span>

                            <span style="margin-bottom:0px; margin-left: 47px; margin-right: 9px; padding-bottom: 0px; display: -webkit-box; height: 22px;">
                                <!-- <button class="ball" placeholder="sdf"></button> -->
                                <div class="ball">
                                    0
                                </div>

                            </span>
                            <span>


                                <a href="account.html"> <img src="cart1.jpg" alt="" style="width: 34px;
height: 34px ;
padding-left:12px;
padding-right: 13px;
"> </a>

                            </span>



                        </span>

                    <?php } ?>



                    <a href="logout.php"> <button class="buttonnav">Logout</button></a>


                    <!-- <li><a href="#about">Cart</a></li> -->
                </div>
            </div>


        <?php
        } else { ?>
            <div class="navbuttons">

                <div class="buttonnavdiv">
                    <a href="signup.php"><button class="buttonnav">Sign Up </button></a>
                </div>

                <div class="buttonnavdiv">
                    <a href="login.php"> <button class="buttonnav">Login</button></a>
                </div>

            </div>

        <?php }

        ?>




    </header>

    <div class="main">
        <div class="head">
            <img class="logo1" src="logo1.png" alt="">
            <div>An online platform to sell your <br> creativity and buy creative arts.</div>
            <?php
            if (isset($_SESSION['loggedin'])) {
            ?>

                <div class="buttondiv">
                    <a href="im.php"><button class="button">Sell</button></a>
                </div>
            <?php
            } else { ?>

                <div class="buttondiv">
                    <button class="button">Explore</button>
                </div>

            <?php }

            ?>
        </div>
        <div>
            <img class="banner" src="banner.png" alt="">
        </div>
        <div class="quote">Being normal for an artist is a disaster</div>
    </div>

    <div class="catagories">
        <div class="bar">
            <p class="text1">
                Jump to catagories
            </p>

            <div class="space"></div>

            <div class="buttonnavdiv">
                <button class="button1">More</button>
            </div>

        </div>



        <div class=" filters">
            <a href="de1.php?uid=retro "><img class="card" src="retro.png" name="retro" alt=""></a>
            <a href="de1.php?uid=abstract"><img class="card" src="abstract.png" name="abstract" alt=""></a>
            <a href="de1.php?uid=classic"><img class="card" src="classic.png" name="classic" alt=""></a>
            <a href="de1.php?uid=illustration"><img class="card" src="illustration.png" name="illustration" alt=""></a>
        </div>
    </div>

    <div class="about">

        <div class="aboutdes">
            <h1>About Us</h1>
            <div class="des" id="about">
                Of all the machine-made items in our home, it's nice to have something <br> that can effortlessly bring a space
                to life. <br> <br> Having art in your home benefits your interior design, well-being and social atmosphere. <br>

                Every day you come home with the cozy atmosphere you created.
                <h3>Who is the artist?</h3>
            </div>

        </div>


        <div class="imgabout">
            <img class="image2" src="about.png" alt="">
        </div>

    </div>

    <footer id="footer">
        <i class="logo logo1 fa-brands fa-twitter"></i>
        <i class="logo fa-brands fa-facebook"></i>
        <i class="logo fa-brands fa-instagram"></i>
        <i class="logo fa-brands fa-linkedin-in"></i>
        <br>


    </footer>
    <p align="center" class="footer-text">© Copyright</p>
</body>

</html>