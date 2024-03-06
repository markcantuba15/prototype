<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
    text-align: center;
    margin-top: 50px; /* Adjust margin-top as needed */
}

h1 {
    font-size: 36px; /* Adjust font size as needed */
    color: #333; /* Adjust text color as needed */
}

form {
    margin-top: 20px; /* Adjust margin-top as needed */
}

input[type="text"],
input[type="password"],
input[type="submit"] {
    padding: 10px;
    margin: 5px;
    border: 1px solid #ccc; /* Adjust border color as needed */
    border-radius: 5px; /* Adjust border radius as needed */
    width: 200px; /* Adjust input width as needed */
}

input[type="submit"] {
    background-color: #007bff; /* Adjust button background color as needed */
    color: #fff; /* Adjust button text color as needed */
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3; /* Adjust button background color on hover as needed */
}

    </style>
</head>
<body>

<?php 


require_once('include/connection.php');

require_once('include/function.php');



if(isset($_POST['submit'])){

$password = $fc->sanitize($_REQUEST['password']);

$username = $fc->sanitize($_REQUEST['username']);


if($fc->checkusername($username)==true){

echo 'USERNAME IS ALREADY TAKEN';

}
else {

if($fc->SaveUsers($username,$password)== true){

    echo 'REGISTERED';
}
}
}


?>


<center>
<div class="cointainer">
    
<h1>Registration</h1>
<br>
<form autocomplete="off" name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<br><br>
<input type="password" name="password" placeholder="Password" required />
<br><br>


<input type="submit" name="submit" value="Register" />
<p>Already Have An Account? <a href='index.php?page=Login'>Login</a></p>
</div>
</center>
</body>
</html>