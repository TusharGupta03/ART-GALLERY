<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $link = mysqli_connect('localhost', 'root', '', 'art_gallery') or die('Unable to connect the server. ');

    $name = $_SESSION['username'];
    $adress = $_POST['add'];
    $email = $_POST['email'];
    $date = $_POST['dat'];
    $price = $_SESSION['id'];
    $title = $_SESSION['uid'];




    $sql = "INSERT into orders (username,address,titl,date,price) values ('$name','$adress','$title','$date','$price')";
    $res = mysqli_query($link, $sql);

    $insert = "INSERT INTO sold_out (TITLE,IMAGE)
    SELECT title,image
    FROM image
    WHERE title='$title'
   ";

    $res5 = mysqli_query($link, $insert);

    $sql2 = "DELETE FROM c WHERE title='$title' ;";
    $res2 = mysqli_query($link, $sql2);

    $sql3 = "DELETE FROM image WHERE title='$title';";
    $res3 = mysqli_query($link, $sql3);

    header('location:placed.php.');
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>

    <link rel="stylesheet" href="pay.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        body {
            background: url("pay.jpg");
            background-size: 100%;
            height: 100%;
            width: 100%;
            background-size: 100%;
        }

        .pass {
            height: 34px;
            width: 57;
            margin-top: 10px;
            border-radius: 15px;
            border: 1px solid #C565CC;
            padding-left: 4px;
        }
    </style>
</head>



<body>

    <div class="all">

        <div class="body">

            <div class="head">
                Payment

            </div>


            <div class="content">
                <form action="pay.php" method="post">


                    <label for="user">Name</label> <br>
                    <input type="text" name="firstname" /><br />

                    <label for="user">Address</label> <br>
                    <input type="text" name="add" /><br />

                    <label for="email">Email Address</label> <br>
                    <input type="email" name="email">

                    <label for="user">Card Number</label> <br>
                    <input type="text" name="cardnumber" /><br />

                    <div class="side">

                        <div class="space">
                            <label for="user">Date</label> <br>
                            <input type="date" name="dat" /><br />
                        </div>

                        <div class="space1">
                            <label for="user">CVC No.</label> <br>
                            <input class="pass" type="password" name="firstname" /><br />

                        </div>

                        <div class="space1">
                            <label for="user">Amount (Pay <?php
                                                            echo $_GET['id'];

                                                            session_start();
                                                            $_SESSION['id'] = $_GET['id'];
                                                            $_SESSION['uid'] = $_GET['uid'];


                                                            ?>)</label> <br>
                            <input class="pass" type="number" name="firstname" /><br />

                        </div>

                    </div>

                    <!-- <div class="space">
                        <label for="user">Card Number</label> <br>
                    <input type="text" name="firstname" /><br /> -->

                    <div class="buttondiv">
                        <input class="button" type="submit" value="Pay">
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