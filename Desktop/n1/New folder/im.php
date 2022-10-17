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
            background: url("upload.jpg");
            background-size: 100%;
            height: 100%;
            width: 100%;
            background-size: 100%;
        }

        .img-up {
            margin: 10px 10px;
            margin-bottom: 0px;
        }
    </style>
</head>




<body>

    <div>
        <?php


        if ($_SERVER["REQUEST_METHOD"] == "POST") {







            session_start();
            $_user = $_SESSION['username'];

            $title = $_POST['title'];
            $date = $_POST['date'];
            $category = $_POST['category'];
            $price = $_POST['price'];





            $link = mysqli_connect('localhost', 'root', '', 'art_gallery') or die('Unable to connect the server. ');






            $files = addslashes(file_get_contents($_FILES['image']['tmp_name']));

            $insert = "INSERT INTO image(image,title,category,date,price,username) VALUES ('$files','$title','$category','$date','$price','$_user')";

            $results = mysqli_query($link, $insert) or die(mysqli_error($link));


            header('location:landing_page.php');
        }



        ?>
    </div>

    <div class="all">

        <div class="logo">
            <img src="text.png" alt="">
        </div>


        <div class="body">

            <div class="head">
                Upload Your Art
            </div>


            <div class="content">
                <form action="im.php" method="post" enctype="multipart/form-data">





                    <label for="title">Title

                      


                    </label>
                    <input type="text" class="name" name="title" /><br />

                    <div class="side">

                        <label for="date">Date</label>
                        <input type="date" class="dob" name="date"> <br>

                        <label for="Category"> Category</label>
                        <br>
                        <select class="gen" name="category">
                            <option class="opt" value="retro">retro</option>
                            <option class="opt" value="abstract">abstract</option>
                            <option class="opt" value="illustration">illustration</option>
                            <option class="opt" value="classic">classic</option>
                            <option class="opt" value="Select Category" hidden selected>Select Category</option>

                        </select>

                    </div>


                    <label for="price">Price</label>
                    <input type="text" name="price"> <br>






                    File

                    <input class="img-up" type="file" name="image" accept="image/*" /><br />








                    <div class="buttondiv">
                        <input class="button" type="submit" value="Upload">
                    </div>

                </form>
            </div>





        </div>
    </div>
</body>

</html>