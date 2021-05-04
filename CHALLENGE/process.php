<?php

$conn = mysqli_connect('localhost','root','','ajax_project');

if(isset($_POST['email'])){
    $email= $_POST['email'];
    // echo $_POST["name"];
    // $query="INSERT INTO user(name, email) VALUES('name', 'email')";
    $query = "SELECT email FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        echo "Email exist";
    } else {
        echo "email available";
    }
}