<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include("../include/admin_menu.php");
    include("../include/connection.php");
    ?>



<div id="content">
<?php
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        switch($page) {
            case "addStudent": require_once "addStudent.php"; break;
            case "addTeacher": require_once 'addTeacher.php'; break;
            case "PE1": require_once 'pe1.php'; break;
            case "PE2": require_once 'pe2.php'; break;
            case "PE3": require_once 'pe3.php'; break;
            case "PE4": require_once 'pe4.php'; break;
            default: include "admin_main_page.php"; break;
        }
    } else {
       // include "admin_main_page.php"; // Default page if 'page' parameter is not set
    }
?>

				
<br><br><br>
</div> <!-- end of div content-->


</body>
</html>