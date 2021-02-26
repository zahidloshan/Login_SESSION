<?php


include('validfile/validation.php');


if(isset($_SESSION['username'])){
header("location: control/PageOne.php");
}
?>





<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<H1>Login</H1>
	<form action="" method="POST">
		<input type="text" name="username" placeholder="Enter User Name">
		<br>
		<input type="password" name="password" placeholder="Enter Password">
		<br>
		<input type="submit" name="submit">

	</form>


	<br>
<?php 


echo $error; ?>


</body>
</html>