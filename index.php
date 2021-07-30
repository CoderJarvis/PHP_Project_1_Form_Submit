<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Apply</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Apply for the US Trip</h2>






        <form action="index.php" method="post" class="form">

            <input type="text" placeholder="enter your name" name="name" id="name">
            <input type="number" placeholder="enter your age" name="age" id="age">
            <input type="text" placeholder="enter your gender" name="gender" id="gender">
            <input type="email" placeholder="enter your email" name="email" id="email">
            <input type="number" placeholder="enter your phone no" name="phone" id="phone">
            <textarea name="descrip" id="desc" cols="10" rows="5" placeholder="enter if you have some suggetion"></textarea>

            <button class="btn">submit</button>

        </form>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "projectdb";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database);

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // echo "Connected successfully";
            //php variables
            $name = $_POST["name"];
            $age = $_POST["age"];
            $gender = $_POST["gender"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $descrip = $_POST["descrip"];

            //user entered data passed to databaseby query
            $sql = "INSERT INTO `ustrip` (`sl no`, `name`, `age`, `gender`, `email`, `phone`, `descrip`) VALUES (NULL, '$name', '$age', '$gender', '$email', '$phone', '$descrip');";
            //this is like run the query//this command exectes the query
            $result = mysqli_query($conn, $sql);


            echo '<p style="color: green" >Your form succesfully submitted</p>';
        }






        ?>

    </div>







</body>

</html>