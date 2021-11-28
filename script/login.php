<?php
    include 'connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $passowrd = $_POST['password'];
        
        if ($email != '' and $passowrd != ''){
            $sql = "SELECT `email`, `password` FROM user";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    if ($email == $row['email'] and password_verify($password, $row['password'])){
                        header("Location: ../templates/profile.php");
                    }
                }
            }
            $conn->close();
        } else {
            echo "Please Enter the Valid data";
        }
    }