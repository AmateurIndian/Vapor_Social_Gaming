
<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>DADA NOOB</title>
    </head>
    
    <?php
    	$userid = $_GET['id'];
    ?>

    <body>
        <header id="headingTitle">
            <h1>Vapour</h1>
        </header>

        <header id="headingHome">
            <h3 id="headingText">Change Password</h3>
            <!-- <form action="home.php" method="get">
                <input type="image" value="submit" src="logout.png" alt="submit Button" onMouseOver="this.src='logout.png'" id="logoutButton">
            </form> -->
        </header>

        <form action="newPass.php?edit=Y&id=<?php echo $userid?>" method="POST">   
                <input type="password" name="password" placeholder="Password" id="form_input_field" required="true" maxlength="32"> 
                <input type="submit" value="Change Password" name="submit" id="button1">    
        </form>

        <footer> This webpage was made by the best CS 353 group. </footer>

    </body>
</html>