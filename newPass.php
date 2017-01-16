<?php

        mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
        mysql_select_db("cs353") or die("Database does not exists.");

        
        if (isset($_POST['submit'])){
            $userid = $_GET['id'];
            $pass=mysql_escape_string($_POST['password']);

            if (!$_POST['password']){
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Please fill all login details')
                        window.location.href='index.php'
                        </SCRIPT>");
                exit();
            }
            else{
                $query = "UPDATE  `Login` SET  `password` =  '$pass' WHERE  `Login`.`userId` = '$userid'";
                $value = mysql_query($query);

                echo ("<SCRIPT LANGUAGE='JavaScript'>   
                window.alert('Password changed successfully')
                window.location.href='home.php?edit=Y&id=$userid'
                </SCRIPT>");
            }
        }


?>