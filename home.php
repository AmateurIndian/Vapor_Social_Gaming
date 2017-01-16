<!DOCTYPE html>
<html>
<head>
	<title>DADA NOOB</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header id="headingTitle">
        <h1>Vapour</h1>
    </header>

    <h3 id="headingLogin">Home</h3>

	<?php
	 
	 	mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
        mysql_select_db("cs353") or die("Database does not exists.");

	 	$val =  $_GET['id'];
	 

	 	$value= mysql_query("SELECT * FROM `User` WHERE `id` = '$val'");

        while ($row = mysql_fetch_assoc($value)) {
              $username =  $row['username'];
              $name =  $row['name'];
              $country =  $row['country'];
              $birth =  $row['birth'];
              $email =  $row['email'];
              
        }

	?><br>

    <div id = user>
        <?php
            echo "Username:",$username;
        ?><br>
    </div>
    <div id = personname>
        <?php
            echo "Name:",$name;
        ?><br>
    </div>
    <div id = email>
        <?php
            echo "Email:",$country;
        ?><br>Country
    </div>
    <div id = birth>
        <?php
            echo "Birth:",$birth;
        ?><br>
    </div>
    <div id = email>
        <?php
            echo "Email:", $email;
        ?><br>
    </div>





	<form action="friendList.php?edit=Y&id=<?php echo $val ?>" method="POST">
            <input type="hidden" name="userid">
            <input type="submit" value="See Friends" name="submit">
    </form><br>
    <form action="addfriend.php?edit=Y&id=<?php echo $val ?>" method="POST">
            <input type="text" name="username">
            <input type="submit" value="Add Friends" name="submit">
    </form><br>
    <form action="seeMessage.php?edit=Y&id=<?php echo $val ?>" method="POST">
            <input type="hidden" name="userid" value= <?php echo $_POST[$val] ?>>
            <input type="submit" value="See Message" name="submit">
    </form><br> 
    <form action="seeGame.php?edit=Y&id=<?php echo $val ?>" method="POST">
            <input type="submit" value="My Games" name="submit">
    </form><br> 
    <form action="index.php" method="POST">
            <input type="submit" value="Log out" name="submit">
    </form>
    <form action="billingList.php?edit=Y&id=<?php echo $val ?>" method="POST">
            <input type="submit" value="Edit Billing Information" name="submit">
    </form>
     <form action="changePass.php?edit=Y&id=<?php echo $val ?>" method="POST">
            <input type="submit" value="Edit Password" name="submit">
    </form>

    <footer> This webpage was made by the best CS 353 group. </footer>

</body>
</html>