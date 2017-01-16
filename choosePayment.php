 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
     <body>
        <?php
                mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
                mysql_select_db("cs353") or die("Database does not exists.");

                $userid = $_GET['id']; 
                $gameid = $_GET['gameid'];
             

                $value= mysql_query("SELECT * FROM `PaymentInfo` WHERE `userid` = '$userid'");

                if(mysql_num_rows($value) > 0){

                    while ($row = mysql_fetch_assoc($value)) {
                        $userid = $row['userId'];
                        $cardno = $row['cardno'];
                        $holdername = $row['holdername'];
                        $billing = $row['billingaddress'];
                        
                        echo "Card No: ",$cardno,"<br>";
                        echo "Card Holder: ",$holdername,"<br>";
                        echo "Billing Address: ",$billing,"<br>";
                          

                        echo "<form action='buyGame.php?edit=Y&id= $userid&gameid=$gameid' method='POST'>
                                <input type='submit' value='Choose' name='submit'>
                            </form>";    
                    }
                }
                else{
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('No billing information. Please register billing information to proceed with purchase.')
                        window.location.href='billingList.php?edit=Y&id=$userid' 
                        </SCRIPT>");
                }
                
            ?><br>

        <form action='seeGame2.php?edit=Y&id=<?php echo $userid ?>' method='POST'>
            <input type='submit' value='Back' name='gift'>
        </form><br><br>
     </body>
 </html>   

    	 
    	 	
