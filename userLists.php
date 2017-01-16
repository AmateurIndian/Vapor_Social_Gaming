<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		
	 
	 	mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
        mysql_select_db("cs353") or die("Database does not exists.");

        $val =  $_GET['id'];

   		$value= mysql_query("SELECT * FROM `Friend` WHERE `userId` = '$val'");

   		

         
            
	?>
	
</body>
</html>
	
