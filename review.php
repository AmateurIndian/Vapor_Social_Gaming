<!DOCTYPE html>

<html>
    <head>
        <title>DADA NOOB</title>
    </head>

    <body>
        <font>
            <center><h1>Review Game</h1></center>
        </font>
        <?php
            $userid = $_GET['id'];
            $gameid = $_GET['gameid'];
        ?>
        <form action="reviewing.php?edit=Y&id=<?php echo "$userid&gameid=$gameid"?>" method="POST">
                Text:<input type="text" name="content"><br><br>
                Rating (1-5):<input type="text" name="rating"><br><br>
                <input type="submit" value="Review Game" name="submit">
        </form>

    </body>

</html>
