<?php

        mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
        mysql_select_db("cs353") or die("Database does not exists.");

        if (isset($_POST['submit'])){
            $username=mysql_escape_string($_POST['username']);
        
        $userid = $_GET['id'];

        

        if (!$_POST['username']){
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Please fill friend's user name)
                    window.location.href='index.php'
                    </SCRIPT>");
            exit();
        }


        $value= mysql_query("SELECT * FROM `User` WHERE `username` = '$username'");
        $row = mysql_result($value, 0);

        if(mysql_num_rows($value) > 0){

            $checkFriend = mysql_query("SELECT * FROM `Friend` WHERE `userid` = '$userid' AND `friendid` = '$row' ");

            if(mysql_num_rows($checkFriend) > 0){
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('already friends')
                    window.location.href='home.php?edit=Y&id=$userid'
                    </SCRIPT>");

                exit();
            }
            else{

                $query2 = "
                    INSERT INTO `cs353`.`Friend` (`userid`,`friendid`) VALUES ('$userid', '$row');";

                $result = mysql_query($query2);

                $query2 = "
                    INSERT INTO `cs353`.`Friend` (`userid`,`friendid`) VALUES ('$row', '$userid');";

                $result = mysql_query($query2);

                echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Friend Added')
                    window.location.href='home.php?edit=Y&id=$userid'
                    </SCRIPT>");
            
            exit();
            }
        }
        else{

            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('User does not exist.')
                    window.location.href='home.php?edit=Y&id=$userid'
                    </SCRIPT>");
            exit();
        }
    }
    
    else{
    }
?>