<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include("include/menu.php");
    require_once('include/connection.php');
    ?>


<div id="content">
<?php
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        switch($page) {
            case "Home": require_once "index.php"; break;
            case "Login": require_once 'login.php'; break;
            case "mission": require_once 'mission.php'; break;
            case "register": require_once 'register.php'; break;
            default: include "login.php";
        }
    } else {
        include "login.php"; // Default page if 'page' parameter is not set
    }
?>

				
<br><br><br>
</div> <!-- end of div content-->
</body>
</html>