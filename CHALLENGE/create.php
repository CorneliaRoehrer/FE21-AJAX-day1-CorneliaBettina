<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="form">
        <input type="text"  id="name" name="name" placeholder ="name">
        <input type="email"  id="email" name="email" placeholder ="email">
        <p id="message"></p>
        <input type="submit"  value="submit">
    </form>
    <script>
        document.getElementById("form").addEventListener ("keyup", insertName);
     //POST with Inserting user into db
        function insertName(e){
            e.preventDefault(); //this prevents the page from refreshing after submitting
            let email=document.getElementById ("email").value; //saving the lastname value
            let params=`email=${email}`; //creating the parameters for the POST method
            console.log(params)
            if(email.length > 5){
                let request=new XMLHttpRequest (); //creating new request
            request.open("POST", "process.php" ,true); //connecting to the process.php file
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); //setting header for POST method
            request.onload=function(){
                if(this.status== 200){
                document.getElementById("message").innerHTML=this.responseText;
            }
            }
            request.send(params);
            }else {
                document.getElementById("message").innerHTML = "Typing...";
            }
             //send parameters to be further processed by php
        }
    </script>
</body>
</html>