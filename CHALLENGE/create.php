<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Project</title>
    <?php require_once 'components/boot.php'?>
</head>
<body>
    <form id="form">
        <input type="text"  id="name" name="name" placeholder="fname">
        <input type="email" id="email" name="testemail" placeholder="e-mail">
        <input type="text"  id="pass" name="pass" placeholder="Password">
        <input type="submit"  value="submit">
    </form>
    <script>
        document.getElementById("form").addEventListener("change",insertName); //POST with inserting user into db

        function insertName(e){
            e.preventDefault(); //this prevents the page from refreshing after submitting
            let email= document.getElementById("email").value; //saving name value
            var params=`testemail=${email}&name=${document.getElementById['name']}`; //creating the parameter for the POST method
            console.log(params)
            var request=new XMLHttpRequest(); //creating new request
            // console.log(request);
            request.open("POST", "process.php", true); //connecting to the process.php file
            request.setRequestHeader("Content-type", "applications/x-www-form-urlencoded"); //setting header for POST method
            request.onload=function(){
                if(this.status==200){
                    console.log(this.responseText)
                }
                }
                request.send(params); //send parameters to be further processed by php
            }
    </script>
</body>
</html>