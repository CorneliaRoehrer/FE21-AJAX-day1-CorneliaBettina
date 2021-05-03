<!DOCTYPE html>
<html lang="en">

<head>
    <meta  charset="UTF-8">
    <meta  name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Show all user</title >
</head>

<body>

    <button id="button">Get user</button>

    <h1>User</h1>
    <div id="user">
    <!--our user will be displayed in this div-->
    </div>

    <script>
    
        document.getElementById("button").addEventListener("click", getUser, false); //create an eventlistener to call getUser() function when button clicked

        function getUser() {
            const request = new XMLHttpRequest(); //create new request
            request.open( "GET", "user.php", true); //set request as a GET method connecting to user.php
            request.onload = function () {
                if (this.status == 200) {
                    let user = JSON.parse(this.responseText); //data received is turned into JS objects
                   console .log(user) //see the array of objects in your console
                    let output = ''; //create container variable
                   // user.forEach(user => {
                    for (let i in user) {
                        output += `<p>first name: ${user[i].fname} 
                       last name: ${user[i].lname}</p>`; //loop through each object and display their properties
                    }
                   document.getElementById('user').innerHTML = output; //output results in div#user
                    // });
                }
            }
           request.send(); //send request
        }
    </script>
</body>
</html>