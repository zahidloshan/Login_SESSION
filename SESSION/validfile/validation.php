<?php

session_start();

if(isset($_POST['submit'])) {

	$error="";

     if (empty($_POST['username']) || empty($_POST['password'])) {

			$error="Please Enter username or password";
			
		}
		else {

			

			
			$_SESSION["username"] = $_POST['username'];
            $_SESSION["password"] = $_POST['password'];
            include("control/FileHand.php");


/*
            $user=$_POST['username'];
            $pass=$_POST['password'];

	        $filePath = "file/File.txt";
            $f = fopen($filePath, "a");
            fwrite($f, $user. " " .$pass ."\n");

            fclose($f);*/
			
		}

	}



  ?>