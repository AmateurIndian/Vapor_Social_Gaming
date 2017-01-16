 <?php
            mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
            mysql_select_db("cs353") or die("Database does not exists.");

            $val =  $_GET['id'];
            $userid = $_GET['userid'];
         

            $value= mysql_query("DELETE FROM `Friend` WHERE `userid` = '$userid' AND friendid = '$val'");

            if($value){
             echo  ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Deleted')
                        window.location.href='friendList.php?edit=Y&id=$userid'
                  </SCRIPT>");
            }


            $value2= mysql_query("DELETE FROM `Friend` WHERE `userid` = '$val' AND friendid = '$userid'");
  
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('$val')
                        window.location.href='friendList.php?edit=Y&id=$userid'
                  </SCRIPT>");

            
        ?>