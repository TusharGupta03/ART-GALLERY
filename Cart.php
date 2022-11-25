<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_SESSION['loggedin'])) {


        $remove = $_GET['uid'];

        $name = $_SESSION['username'];
        $link = mysqli_connect('localhost', 'root', '', 'art_gallery') or die('Unable to connect the server. ');



        $insert = "INSERT INTO c (image,title,customername,price)
SELECT image,title,newcustomer.username,price
FROM image,newcustomer
WHERE title='$remove'
and newcustomer.username='$name'";


        $results = mysqli_query($link, $insert) or die(mysqli_error($link));
    } else {
        header('location:login.php');
    }
} ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="cart.css"> -->
</head>

<style>
    * {
        font-family: "poppins";
        color: blueviolet;
    }

    .nav {
        display: flex;
        align-items: center;
        margin-top: 15px;
    }

    .logo {
        width: 50%;
        padding-top: 1px;
        padding-left: 60px;
    }

    .logodiv {
        padding: 1.2% 2%;

    }

    ul {
        list-style-type: none;
        text-decoration: none;
        display: flex;
        padding: 0px;
    }

    li a {
        text-decoration: none;
        margin: 10px;
        font-size: 85%;
        color: #BB46C3;
        padding: 3px 10px;
    }

    li a:hover {
        text-decoration: none;
        margin: 10px;
        padding: 3px 10px;
        font-size: 85%;
        color: #5d1e61;
        background-color: #fbc9ff;
        border-radius: 50px;
    }

    .space {
        display: flex;
        justify-content: center;
        margin: auto;
        max-width: 100%;
    }

    input[type=text],
    select {
        width: 100%;
        padding: 4px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 0px solid #ffffff;
        background-color: #fbc9ff;
        color: #5b0b61;
        border-radius: 50px;
        box-sizing: border-box;
    }

    .searchicon {
        margin-left: 10px;
        border-radius: 50px;
        border: #ffffff 1px;
    }

    .searchicon:hover {
        margin-left: 10px;
        border-radius: 25px;
        box-shadow: 1px 3px 3px 0px rgba(146, 146, 146, 0.574);
        cursor: pointer;
        border-radius: 50px;
        border: #ffffff 1px;
    }


    .navbuttons {
        display: flex;
        margin-left: 30px;
        margin-right: 10px;
    }

    .buttonnavdiv {
        /* padding-top: 20px; */
        display: flex;
        /* justify-content: center; */
    }

    .buttonnav {

        /* width: 30%; */
        padding: 4px 20px;
        margin: 23px 10px;
        display: inline-block;
        background-color: #ffffff;
        border: 1px solid #C565CC;
        border-radius: 50px;
        box-sizing: border-box;
        font-family: "poppins";
        color: #b639be;
        /* box-shadow: 0px 3px 5px 0px rgba(0,1,17,0.33); */
    }

    .buttonnav:hover {
        /* width: 30%; */
        padding: 4px 20px;
        margin: 23px 10px;
        display: inline-block;
        background-color: #5b0b61;
        /* border: 1px solid #f7f7f7; */
        border-radius: 50px;
        box-sizing: border-box;
        font-family: "poppins";
        color: #ffffff;
        box-shadow: 0px 3px 5px 0px rgba(0, 1, 17, 0.33);
        backdrop-filter: blur(95px);
        -webkit-backdrop-filter: blur(80px);
        cursor: pointer;
        -moz-animation: all .4s ease-in-out;
        -webkit-animation: all .4s ease-in-out;
        -o-animation: all .4s ease-in-out;
        animation: all .4s ease-in-out;
    }


    .head {
        font-size: 45px;
        font-weight: 600;
        /* margin: 40px 70px 60px 30px; */
        padding-left: 20px;
        /* display: flex; */
        text-align: center;
        margin: auto;
    }

    .body {
        display: flex;
        align-items: flex-start;
        padding-left: 240px;
        padding-right: 240px;
        margin-top: 50px;

    }

    .content {
        padding-left: 45px;
        margin-top: 0px;
    }

    .name {
        font-size: 35px;
        padding-bottom: 20px;
        padding-top: 20px;
    }

    .image {
        width: 70vh;
        height: 50vh;
        border-radius: 20px;
    }

    .price {
        font-size: 25px;
        padding-bottom: 30px;
        padding-top: 10px;
    }

    .buy {
        /* padding-top: 20px; */
        display: flex;
        /* justify-content: center; */
    }

    .btns {
        display: flex;
    }

    .buybtn {

        /* width: 30%; */
        padding: 6px 25px;
        margin: 45px 10px;
        display: inline-block;
        background-color: #ffffff;
        border: 1px solid blueviolet;
        border-radius: 50px;
        box-sizing: border-box;
        font-family: "poppins";
        color: blueviolet;
        /* box-shadow: 0px 3px 5px 0px rgba(0,1,17,0.33); */
    }

    .buybtn:hover {
        /* width: 30%; */
        padding: 6px 25px;
        margin: 45px 10px;
        display: inline-block;
        background-color: blueviolet;
        /* border: 1px solid #f7f7f7; */
        border-radius: 50px;
        box-sizing: border-box;
        font-family: "poppins";
        color: #ffffff;
        box-shadow: 0px 3px 5px 0px rgba(0, 1, 17, 0.33);
        backdrop-filter: blur(95px);
        -webkit-backdrop-filter: blur(80px);
        cursor: pointer;
        -moz-animation: all .4s ease-in-out;
        -webkit-animation: all .4s ease-in-out;
        -o-animation: all .4s ease-in-out;
        animation: all .4s ease-in-out;
    }

    .status_error {

        margin-left: 699px;
        margin-top: 43px;
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
                <li><a href="home_1.php#about">About Us</a></li>
            </ul>
        </div>

        <div class="space"></div>


        <div class="navbuttons">

            <div class="buttonnavdiv">
                <a href="orders.php"><button class="buttonnav">Past Orders</button></a>
            </div>

            <div class="buttonnavdiv">
                <a href="logout.php"><button class="buttonnav">Log out</button></a>
            </div>



        </div>


    </header>
    <header class="head">
        Cart
    </header>







    <?php
    $link = mysqli_connect('localhost', 'root', '', 'art_gallery') or die('Unable to connect the server. ');
    $name1 = $_SESSION['username'];
    $query = "select * from c where customername='$name1' ";
    $result = mysqli_query($link, $query);

    ?>
    <?php if ($result->num_rows > 0) { ?>

        <div>
            <?php while ($row = $result->fetch_assoc()) {
                $title = $row['title'];
                $price = $row['price'];

                $link2 = "user_art.php?id=$title";
                $link3 = "Cart_remove.php?id=$title";
                $link4 = "pay.php?id=$price&uid=$title";


            ?>



                <div class="items">
                    <div class="body">
                        <div class="img">
                            <img class="image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
                        </div>

                        <div class="content">
                            <div class="name">
                                <?php echo $title; ?>
                            </div>

                            <div class="price">
                                <?php echo $price; ?>

                            </div>
                            <div class="des">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, labore. A nulla neque alias
                                reiciendis harum minus sint incidunt animi assumenda, aut saepe eligendi amet, tempore atque
                                ullam?
                                Repellendus, recusandae?
                            </div>

                            <div class="btns">
                                <div class="buy">
                                    <a href=<?= $link4 ?>> <button class="buybtn">Buy Now</button></a>
                                </div>
                                <div class="buy">
                                    <a href=<?= $link3 ?>> <button class="buybtn">Remove</button></a>

                                </div>
                            </div>


                        </div>
                    </div>


                </div>

            <?php } ?>
        </div>
    <?php } else { ?>
        <p class="status_error">Oops....NOTHING IN CART</p>
    <?php } ?>
</body>

</html>