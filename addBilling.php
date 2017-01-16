<!DOCTYPE html>

<html>
    <head>
        <title>DADA NOOB</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
         <header id="headingTitle">
            <h1>Vapour</h1>
        </header>
        
        <header id="headingHome">
            <h3 id="headingText">Add Billing Information</h3>  
        </header>

        <?php
            $val = $_GET['id'];
            
        ?>
        <form action="addingBilling.php?edit=Y&id=<?php echo $val ?>" method="POST">
                <!-- Carry over userId somehow to the addingBilling.php as well-->
                
                <input type="text" placeholder="Card Number" name="cardNo" id="form_input_field" required="true" maxlength="16">
                <input type="text" placeholder="Full Name" name="fullName" id="form_input_field" required="true" maxlength="100">
                <input type="text" placeholder="Billing Address" name="address" id="form_input_field" required="true" maxlength="500">
                <input type="submit" value="Create Billing Information" name="UpdateBillingInfo" id="button1">
        </form>

        <footer> This webpage was made by the best CS 353 group. </footer>

    </body>

</html>
