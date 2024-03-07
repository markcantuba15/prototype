<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #Gender {
  width: 200px; /* Adjust the width as needed */
  padding: 5px;
  font-size: 16px;
}
form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

input[type="text"], select {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

/* Optional: Styles for placeholders */
::placeholder {
    color: #ccc;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder {
    color: #ccc;
}

::-ms-input-placeholder {
    color: #ccc;
}
.success{
	color: green;
	font-size: 24px;
	padding-left: 50px;
    text-align: center;
}
    </style>
</head>
<body>



<?php 
require_once("../include/connection.php");

require_once('../include/function.php');

if(isset($_POST['submit'])){


    $firstname = $fc->sanitize($_REQUEST['firstname']);
    $middlename = $fc->sanitize($_REQUEST['Middlename']);
    $lastname= $fc->sanitize($_REQUEST['Lastname']);
    $gender = $fc->sanitize($_REQUEST['gender']);
    $age = $fc->sanitize($_REQUEST['age']);
    $email = $fc->sanitize($_REQUEST['email']);
    $course= $fc->sanitize($_REQUEST['course']);
    $section = $fc->sanitize($_REQUEST['section']);
  

    $id = uniqid();

    if($fc->checkStudentCode($id)== true){
        echo 'username is taken';
        return false;
    }
    else {

        if($fc->SaveStudent($id,$firstname,$middlename,$lastname,$gender,$age,$email,$course,$section)==true){
            echo '<p class="success">Successfully Added!!!.</p>';
            header("refresh:1;teacher_mainpage.php?page=addStudent");
            exit;
        }
    }
}

?>
<br>
<br>
<form autocomplete="off" name="registration" action="" method="post">
<input type="text" name="firstname" placeholder="firstname" required />
<br><br>
<input type="text" name="Middlename" placeholder="Middlename" required />
<br><br>
<input type="text" name="Lastname" placeholder="Lastname" required />
<br><br>
<select id="Gender" name="gender">
  <option value="male">MALE</option>
  <option value="female">Female</option>

  <!-- Add more options as needed -->
</select>
<br><br>
<input type="text" name="age" placeholder="Age" required />
<br><br>
<input type="text" name="email" placeholder="email" required />
<br><br>
<input type="text" name="course" placeholder="course" required />
<br><br>
<input type="text" name="section" placeholder="section" required />
<br><br>
<br><br>

<input type="submit" name="submit" value="Register" />
</body>
</html>