<?php

    $conn = mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
    mysql_select_db("cs353") or die("Database does not exists.");

    $userid = $_GET['id']; 
    $gameid = $_GET['gameid'];
    $friendid = $_GET['friendid'];

    $query = "
            INSERT INTO `Has` (`userId`,`gameid`) VALUES ('$friendid','$gameid')";

    $result = mysql_query($query);

    if($result){
        $query = "SELECT name FROM User WHERE id = '$friendid'";
    $result = mysql_query($query);
    $friendname = mysql_fetch_assoc($result);
    	echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Game has been gifted.') 
                window.location.href='gift.php?edit=Y&id=$userid&friendid=$friendid&friendname=$friendname'
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