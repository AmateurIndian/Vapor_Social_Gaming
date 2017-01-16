 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
 </head>
     <body>

        <header id="headingTitle">
            <h1>Vapour</h1>
        </header>
        
        <header id="headingHome">
            <h3 id="headingText">All Games</h3>  
        </header>
        
        <?php
                mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
                mysql_select_db("cs353") or die("Database does not exists.");

                $val =  $_GET['id'];
             

                $value= mysql_query("SELECT * FROM `PaymentInfo` WHERE `userid` = '$val'");
                


                if(mysql_num_rows($value) > 0){

                    while ($row = mysql_fetch_assoc($value)) {
                        $userid = $row['userId'];
                        $cardno = $row['cardno'];
                        $holdername = $row['holdername'];
                        $billing = $row['billingaddress'];
                        
                        echo "Card No: ",$cardno,"<br>";
                        echo "Card Holder: ",$holdername,"<br>";
                        echo "Billing Address: ",$billing,"<br>";
                          

                        echo "<form action='removeBilling.php?edit=Y&id= $userid&cardno=$cardno' method='POST'>
                                <input type='submit' value='remove' name='submit'>
                            </form>";    
                    }
                }
                
            ?><br>

        <form action="addBilling.php?edit=Y&id=<?php echo $val ?>" method="POST">
            <input type="submit" value="Add New Billing Information" name="submit">
        </form>
        <form action='home.php?edit=Y&id=<?php echo $val ?>' method='POST'>
            <input type='submit' value='Home' name='gift'>
        </form><br><br>

        <footer> This webpage was made by the best CS 353 group. </footer>
     </body>
 </html>   

    	 
    	 	
