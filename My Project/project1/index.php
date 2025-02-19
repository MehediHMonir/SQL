<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "sajek_travel"; // actual database name in xampp

        $con = mysqli_connect($server,$username,$password,$database);

        if(!$con){
            die("connection to this database failed due to". mysqli_connect_error());
        }
        // echo "Connect Successfully to database."

        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $other = $_POST['other'];

        $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES 
        ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";

        // echo $sql;

        if($con->query($sql) == true){
            echo "Successfully Inserted.";
        }
        else{
            die("Error inserting record: " . $con->error);
        }
        
        mysqli_close($con);
    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Piedra&family=Poppins&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="sajek.jpg" alt="sajek valley img">
    <div class="container">
        <h1>Welcome to Sajek Valley Trip form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
        <p class="submitMsg">Thank you for submitting your form. We happy to see you joining with us.</p>
    
    <form action="index.php" method="post">
        <input type="text" id="name" name="name" placeholder="enter your name">
        <input type="text" id="age" name="age" placeholder="enter your age">
        <input type="text" id="gender" name="gender" placeholder="enter your gender">
        <input type="email" id="email" name="email" placeholder="enter your email">
        <input type="tel" id="phone" name="phone" placeholder="enter your phone number">
        <textarea name="other" id="other" cols="30" rows="10" placeholder="enter your feedback"></textarea>
        <button class="btn">submit</button>
    </form>
    </div>

    <script src="index.js"></script>


<!-- INSERT INTO `trip` (`sl_no`, `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES 
('2', 'Rizwan', '10', 'male', 'rizwan@gmail.com', '01444444444', 'I hope this journey will help me lot.', current_timestamp()); -->
</body>
</html>