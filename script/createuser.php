<?php
    include 'connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $passowrd = $_POST['password'];
        
        if ($name != '' and $email != '' and $passowrd != ''){
            $hash_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (`name`, `email`, `password`) VALUES ('$name', '$email', '$hash_password')";
            if ($conn->query($sql) === TRUE) {
                header("Location: ../templates/login.php");
                die();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
              
            $conn->close();
        } else {
            echo "Please Enter the Valid data";
        }
    }