<?php
if (isset($_POST['submit'])) {


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "INTERDATABASE";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO ``(`email`,`password`) values('$ID_number','$F_name')";
    $run = mysqli_query($conn, $sql);
    if ($run) {
        echo "";
    } else {
        echo "error";
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Heebo:wght@800&family=Noto+Sans:wght@100&family=Source+Serif+Pro:ital,wght@1,600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Heebo:wght@800&display=swap');

        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: url('D:/pexels-bill-emrich-230794.jpg');
            background-repeat: no-repeat;

            background-size: cover;
        }

        .container {


            color: whitesmoke;
            position: absolute;
            top: 35%;
            left: 40%;


        }

        .container h1 {

            font-family: 'Heebo', sans-serif;

            font: size 28px;
            width: 100%;
            border-bottom: 2px solid purple;
            margin-bottom: 15px;
            padding: 13px;
            display: inline-block;


        }

        .box {
            width: 100%;
            border-bottom: 2px solid purple;
            margin: 22px 0px;

        }

        .box input {
            font-family: 'Source Serif Pro', serif;
            width: 75%;
            outline: none;
            color: white;
            border: none;
            outline: none;


            padding: 5px 10px;
            font-size: 20px;
            background: none;



        }

        .box i {
            width: 25px;
            text-align: center;



        }

        .btn {
            font-size: 18px;
            cursor: pointer;
            outline: none;
            padding: 10px;
            margin: 12px 0px;
            padding: 10px 21px;
            border-radius: 10px;
            border: 2px solid purple;
            background: none;
            color: whitesmoke;
            font-weight: bold;
            border-radius: 10px;


        }

        .btn:hover {
            color: purple;
            background: white;
            opacity: 0.5;
        }
    </style>

    <script src="https://kit.fontawesome.com/e7f1c13c1e.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>
</head>

<body>
    <form action="INTERDATABASE.php" method="post">
        <div class="container">
            <h1><b>Log in to Mats Digital</b></h1>
            <div class="box">
                <i class="fa fa-envelope"></i>

                <input type="email" name="email" id="email" placeholder="Enter Your Email">
            </div>
            <div class="box">
                <i class="fa fa-key"></i>
                <input type="password" name="password" id="password" placeholder="Emter Your password">

            </div>
            <button class="btn">Sign In</button>
    </form>
    </div>

</body>

</html>