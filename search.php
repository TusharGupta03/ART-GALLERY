<?php


$link = mysqli_connect('localhost', 'root', '', 'art_gallery') or die('Unable to connect the server. ');

$sea = $_POST['search'];
$sql = "SELECT* from image where title like'$sea%' ";
$res = mysqli_query($link, $sql);
// echo $cat;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>
    <!-- <link rel="stylesheet" href="explore.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<style>
    * {
        font-family: "poppins";
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

    .anim {
        max-width: 30%;
        justify-content: end;
    }

    .animation {
        display: flex;
        justify-content: end;
    }

    .all {
        color: #BB46C3;
    }

    .catagories {
        color: #BB46C3;
        padding-bottom: 50px;
    }

    .bar {
        display: flex;
        flex-direction: row;
        margin: 100px 90px 0px 100px;
    }

    .text1 {
        vertical-align: middle;
        padding-top: 8 px;
        font-size: 50px;
    }

    .filters {
        display: flex;
        justify-content: space-evenly;
        padding-left: 30px;
        padding-right: 0px;
        margin-top: 10px;
    }

    .card {
        box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 28vw;
        /* height: 20vh; */
        border-radius: 8px;
        margin: 20px;
    }

    .card:hover {
        box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.5);
        transition: 0.3s;
        width: 28vw;
        /* height: 20vh; */
        border-radius: 8px;
    }

    .ab {
        float: left;
        /* display: flex; */
        /* justify-content: space-around; */
        height: 425px;


    }
</style>


<body>
    <div class="all">
        <div class="nav">

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

        <div class="bar">
            <h1 class="text1">
                Search Results
            </h1>

            <div class="space"></div>

            <div class="animation">
                <img class="anim" src="https://media4.giphy.com/media/SmVVp30ymr3OznAOVj/giphy.gif?cid=ecf05e47p4ocmh47bswc4kpaagrcqn53nc69884wbyvvf8aa&rid=giphy.gif&ct=s" alt="">
            </div>

        </div>



        <div class=" filters">
            <!-- <a href="#"><img class="card" src="retro.png" alt=""></a> -->
            <!-- <a href="#"><img class="card" src="abstract.png" alt=""></a>
            <a href="#"><img class="card" src="classic.png" alt=""></a>
            <a href="#"><img class="card" src="illustration.png" alt=""></a> -->

            <?php if ($res->num_rows > 0) { ?>

                <div>
                    <?php while ($row = $res->fetch_assoc()) {
                        $link = "image2.php";
                        $price = $row['price'];



                    ?>

                        <div class="ab">
                            <a href="<?= $link ?>"> <img class="card" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /></a>
                            <center>
                                <p class="card">Price : <?php echo $price ?>Rs Only</p>
                            </center>

                        </div>

                    <?php } ?>
                </div>
            <?php } else { ?>
                <p class="status error">Image(s) not found...</p>
            <?php } ?>



        </div>
    </div>

    </div>
</body>

</html>