<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
require_once("include/function.php");
require_once("include/connection.php");
?>
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
.success{
	color: green;
	font-size: 24px;
	padding-left: 50px;
    text-align: center;
}
.fail{
	color: red;
	font-size: 24px;
	padding-left: 50px;
    text-align: center;
}
</style>
</head>


<body>
    <?php 
    //start session
    //check if login is true
    session_start();


    if(isset($_POST['submit'])){

    if($fc->login()==true){
        echo '<p class="success">You have successfully logged in!.</p>';
       header("refresh:1;url=AdminFiles/admin_main_page.php");
       exit;
    }
   else if($fc->loginTeacher()==true){
    header("Location:teacherfile/mainteacher.php");
   exit;
    }
    else {
        echo '<p class="fail">You Enter Invalid Password or Username.</p>';
        //echo '<script>alert("ERROR: Username and password incorrect.");</script>';
        header("refresh:1;url=index.php");
    }
}
    
   
?>

    
    <center>

<div class="form">

<h1>Log In</h1>
<br>
<form autocomplete="off" action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<br><br>
<input type="password" name="password" placeholder="Password" required />
<br><br>
<input name="submit" type="submit" value="Submit" />
</form>
<p>Not registered yet? <a href='index.php?page=register'>Register Here</a></p>

<br /><br />

</div>
</center>

</body>
</html>
<?php

