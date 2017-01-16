<?php

    $conn = mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
    mysql_select_db("cs353") or die("Database does not exists.");

    $userid = $_GET['id']; 
    $gameid = $_GET['gameid'];

    $query = "
            INSERT INTO `Has` (`userId`,`gameid`) VALUES ('$userid','$gameid')";

    $result = mysql_query($query);

    if($result){
    	echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Game Bought.') 
                window.location.href='seeGame2.php?edit=Y&id=$userid'
                </SCRIPT>");
    }
    else
    {
    	echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Billing information added. $userid and $gameid') 
                window.location.href='seeGame2.php?edit=Y&id=$userid'
                </SCRIPT>");
    }
    
?>