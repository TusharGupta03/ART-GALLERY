<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmed</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        .body {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: "poppins";
            color: #b639be;
            vertical-align: middle;
            padding-top: 30px;
        }


        .buttondiv {
            padding-top: 20px;
            display: flex;
            justify-content: center;
        }

        .button {

            width: 100%;
            padding: 8px 20px;
            margin: 23px 0;
            display: inline-block;
            background-color: #ffffff;
            border: 1px solid #C565CC;
            border-radius: 50px;
            box-sizing: border-box;
            font-family: "poppins";
            color: #b639be;
            /* box-shadow: 0px 3px 5px 0px rgba(0,1,17,0.33); */
        }

        .button:hover {
            width: 100%;
            padding: 8px 20px;
            margin: 23px 0;
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

        .gif {
            align-items: center;
            max-width: 50%;
            border-radius: 100%;
        }

        .animation{
            align-items: center;
            text-align: center;
            margin-bottom: 50px;
        }
        
    </style>
</head>

<body>
    <div class="body">
        <div class="animation">
            <img class="gif" src="https://media0.giphy.com/media/E3y79zUo2V4v8AFG2V/giphy.gif?cid=ecf05e47ucd7rf0rm6zfno45b6r1r5sjvlq3hnjip9ilbmkh&rid=giphy.gif&ct=g" alt="">
        </div>

        <div class="message">
            Your order has been placed
        </div>
        <div class="buttondiv">

            <a href="home_1.php"> <button class="button">Back to home</button></a>

        </div>
    </div>

</body>

</html>