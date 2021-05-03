<?php


$conn=mysqli_connect('localhost','root','' ,'ajax_project');


//query

    $query="SELECT * FROM user";


//Get results

$result= mysqli_query($conn,$query);


 //Fetch Data from database

$user=mysqli_fetch_all($result, MYSQLI_ASSOC);


echo json_encode($user); //js_encode is the php method for JSON.stringify


?>

