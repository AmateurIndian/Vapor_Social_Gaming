 <!DOCTYPE html>
 <html>
 <head>
     <link rel="stylesheet" type="text/css" href="style.css">
      <title>DADA NOOB</title>
 </head>
 <body>
    <header id="headingTitle">
        <h1>Vapour</h1>
    </header>
    
    <header id="headingHome">
        <h3 id="headingText">My Friends</h3>  
    </header>

     <div style="overflow-y: scroll; height:334px; border: 2px solid black; padding: 10px;">
    <?php
            mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
            mysql_select_db("cs353") or die("Database does not exists.");

            $val =  $_GET['id'];
         

            $value= mysql_query("SELECT * FROM `Friend` WHERE `userid` = '$val'");
            


            if(mysql_num_rows($value) > 0){

                while ($row = mysql_fetch_assoc($value)) {
                    $result = $row['friendId'];
                    
                    $check2= mysql_query("SELECT * FROM `User` WHERE `id` = '$result'");
                      $check = mysql_fetch_assoc($check2);
                      $friendname = $check['username'];

                      echo "User Name: ",$friendname,"<br>";
                      echo "Name: ",$check['name'],"<br>";
                      echo "Email: ",$check['email'],"<br>";


                    echo "<form action='remove.php?edit=Y&id= $result&userid=$val' method='POST'>
                            <input type='submit' value='Remove' name='submit'>
                        </form>";
                    echo "<form action='message.php?edit=Y&id=$val&friendid=$result&friendname=$friendname' method='POST'>
                            <input type='submit' value='Send Message' name='submit'>
                        </form>";

                    echo "<form action='gift.php?edit=Y&id=$val&friendid=$result&friendname=$friendname' method='POST'>
                            <input type='submit' value='Send Gifts' name='submit'>
                        </form><br><br>";
                        
                }
            }
            
        ?><br>
        </div>

        <form action='home.php?edit=Y&id=<?php echo $val ?>' method='POST'>
            <input type='submit' value='Home' name='gift' style=" width: 90%;
                                                                  height: 30px;
                                                                  display:block; 
                                                                  margin-left: auto;
                                                                  margin-right: auto;
                                                                  background-color: transparent;
                                                                  border: 2px solid black;
                                                                  border-radius: 8px;
                                                                  margin-top: 5px;
                                                                  cursor: pointer;
                                                                  " class="buttonHover" > 
        </form>

        <footer> This webpage was made by the best CS 353 group. </footer>

 </body>
 </html>   

    	 
    	 	
