<!DOCTYPE html>

<html>
    <head>
        <title>Vapour</title>
    </head>

    <body>
        <?php

            $userid =$_GET['id'];
            $friendid =$_GET['friendid'];
            $friendname = $_GET['friendname'];

        ?>

        <font>
            <center><h2>Compose Message</h2></center>
        </font>
        <h2>To: <?php echo $friendname ?><h2>
        <form action="sendmessage.php?edit=Y&id=<?php echo $userid ?>&friendid=<?php echo $friendid?>&friendname=<?php echo $friendname?>" method="POST">
                Message:<input type="text" name="message"><br><br>
                <input type="submit" value="Send Message" name="submit">
        </form><br><br>
        <form action='home.php?edit=Y&id=<?php echo $userid ?>' method='POST'>
            <input type='submit' value='Home' name='gift'>
        </form>

    </body>

</html>
