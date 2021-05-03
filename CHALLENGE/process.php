<?php

$conn = mysqli_connect('localhost','root','','ajax_project');
#var_dump($conn);
#if(isset($_POST['email'])){
    $email= $_POST['testemail'];
    echo $_POST["name"];
    # var_dump($_POST["testemail"]);
    #$query="INSERT INTO user(name, email, password) VALUES('name', 'email', 'password')";
    echo $query = "SELECT email FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        echo "Email exist";
    } else {
        echo "email available";
    }
#}