<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Page Two</title>
</head>
<body>
	<h1>Hello</h1>

	<h3> <?php echo $_SESSION["username"];?></h3>


    <h5>Do you want to go to <a href="PageOne.php"> MY Profile</a></h5>

    <br/>



	<br/>
    <h2>Do you want to <a href="../control/LogOut.php">logout</a></h2>

</body>

</body>
</html>