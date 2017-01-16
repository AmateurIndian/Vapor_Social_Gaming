<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>

    <body>
    <?php
        mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
        mysql_select_db("cs353") or die("Database does not exist.");

            $userid = $_GET['id']; 
            $game = $_GET['game'];
            $gameid = $_GET['gameid'];

        $value= mysql_query("SELECT * FROM `Has` WHERE `gameid` = '$gameid'");
            

            if(mysql_num_rows($value) > 0){
                
                while ($row = mysql_fetch_assoc($value)) {
                    $result = $row['userId'];
                    

                    $check = mysql_query("SELECT * FROM `Friend` WHERE `userid` = '$userid' AND `friendid` = '$result'");
                    if(mysql_num_rows($check) > 0){
                        echo ("$game is played by:<br><br>");
                        while( $friend = mysql_fetch_assoc($check)){
                            $id = $friend['friendId'];
                            
                            $check2= mysql_query("SELECT * FROM `User` WHERE `id` = '$id'");
                            
                            $disp = mysql_fetch_assoc($check2);
                            echo "User Name: ",$disp['username'],"<br>";
                            echo "Name: ",$disp['name'],"<br><br>";
                        } 
                    }
                   else{
                        
                    } 
                }    
            }
            else{
                echo "No Friend plays  $game....";
            }
            echo "<form action='seeGame2.php?edit=Y&id=$userid' method='POST'>
                <br><br><input type='submit' value='Back To More Games' name='submit'>
            </form>";
                       
    ?>
    </body>
</html>
