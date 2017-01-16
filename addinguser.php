<?php

    $conn = mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
    mysql_select_db("cs353") or die("Database does not exists.");

    if (isset($_POST['submit'])){
        $username=mysql_escape_string($_POST['username']);
        $password=mysql_escape_string($_POST['password']);
        $email=mysql_escape_string($_POST['email']);
        $name=mysql_escape_string($_POST['name']);
        $country=mysql_escape_string($_POST['country']);
        $birth=mysql_escape_string($_POST['birth']);
        $image=mysql_escape_string($_POST['image']);


        if (!$_POST['username'] | !$_POST['password']| !$_POST['country']| !$_POST['birth']| !$_POST['email']| !$_POST['image']| !$_POST['password']){
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Please fill all login details')
                    window.location.href='addUser.php'
                    </SCRIPT>");
            exit();
        }
        else{

            $value= mysql_query("SELECT * FROM `Login` WHERE `username` = '$username'");

            if(mysql_num_rows($value) > 0){

                echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Username already exists')
                        window.location.href='addUser.php'
                        </SCRIPT>");
                
                exit();
            }

            else{
                $query = "
                    INSERT INTO `cs353`.`User` (`id`, `username`,`name`,`country`, `birth`, `email`, `image`) VALUES (NULL,'$username','$name','$country', '$birth', '$email','$image');";

                $result = mysql_query($query);

                if($result){

                    $query2 = "
                    INSERT INTO `cs353`.`Login` (`userId`,`username`, `password`) VALUES (NULL,'$username', '$password');";
                    

                    $result = mysql_query($query2);

                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Account created. Please login.')
                        window.location.href='index.php'
                        </SCRIPT>");
                }
                exit(); 
            }    
        }


        
    }
    
    else{
    }
?>