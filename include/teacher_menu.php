<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        nav {
    background-color: aliceblue; /* Change the background color as needed */
    padding: 10px 20px;
    display: flex;
    align-items: center;
}

.logo {
    margin-right: auto; /* Pushes the logo to the left */
}

.logo img {
    height: 40px; /* Adjust the height of the logo as needed */
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

ul li {
    display: inline;
    margin-right: 20px; /* Adjust spacing between menu items */
}

ul li a {
    color: black; /* Change the text color as needed */
    text-decoration: none;
}

ul li a:hover {
    color: #ccc; /* Change the hover color as needed */
}
header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px; /* Adjust padding as needed */
}



.cont{
    width: 100%;
}


.img2 {
    float: left;
    height: 100px; /* Adjust height as needed */
    width: 100px; /* Maintain aspect ratio */
    margin-left: auto; /* Pushes the image to the left */
}
.h1s{
   text-align: center;
   font-size: 24px; /* Adjust font size as needed */
    color: #333; /* Adjust text color as needed */
    text-align: center; /* Center the text */
    margin-bottom: 10px; /* Adjust margin as needed */
}
.ps {
    font-size: 18px; /* Adjust font size as needed */
    color: #666; /* Adjust text color as needed */
    text-align: center; /* Center the text */
    margin-bottom: 20px; /* Adjust margin as needed */
}

    </style>
</head>
<body>
<header >
	
    <div class="cont">

    <image src="../images/csi.png" class="img2">
        <center>
    <h1 class="h1s">COMPUTER SYSTEMS INSTITUTE</h1>
    <p class="ps">Physical Education E-Learning System</p>
    </center>
    </div>
   </header>

<nav class="navbar navbar-custom">
	<div class="container-fluid">
		
		
		<ul class="nav navbar-nav navbar-left">
		 <li><a href="#">Home</a></li>
		 
		 <li><a href="teacher_mainpage.php?page=addStudent">Add Student</a></li>
		 <li><a href="teacher_mainpage.php?page=PE1">PE-1</a></li>
		 <li><a href="teacher_mainpage.php?page=PE2">PE-2</a></li>
		 <li><a href="teacher_mainpage.php?page=PE3">PE-3</a></li>
         <li><a href="teacher_mainpage.php?page=PE4">PE-4</a></li>
		
		</ul>
	</div>

	</nav>
	
	
	
	

</body>
</html>