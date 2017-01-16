
<html>
<head>
    <title></title>
</head>
<body>

    


    <?php

        mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
        mysql_select_db("cs353") or die("Database does not exists.");

        if (isset($_POST['submit'])){
            $username=mysql_escape_string($_POST['username']);
            $password=mysql_escape_string($_POST['password']);
            

            if (!$_POST['username'] | !$_POST['password']){
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Please fill all login details')
                        window.location.href='index.php'
                        </SCRIPT>");
                exit();
            }


            $value= mysql_query("SELECT * FROM `Login` WHERE `username` = '$username' AND `password` = '$password'");
            $row = mysql_result($value, 0);

            if(mysql_num_rows($value) > 0){

                echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Login Succesful')
                        window.location.href='home.php?edit=Y&id=$row'
                        </SCRIPT>");
                
                exit();
            }
            else{

                echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Wrong username password combination.Please re-enter.')
                        window.location.href='index.php'
                        </SCRIPT>");
                exit();
            }
        }
        
        else{
        }
    ?>

    </body>
</html>