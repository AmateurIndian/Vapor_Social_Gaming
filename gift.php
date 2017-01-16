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

        <div style="overflow-y: scroll; height:397px;">
        <?php $userid =$_GET['id'];?>
        <form action="home.php?edit=Y&id=<?php echo $userid;?>" method='POST'>
                                        <input type='submit' value='Home!' name='submit'>
                                    </form> 
                        
            <?php
                mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
                mysql_select_db("cs353") or die("Database does not exist.");
            $userid =$_GET['id'];
            $friendid =$_GET['friendid'];
            $friendname = $_GET['friendname'];

                $value = mysql_query("SELECT * FROM Game G WHERE gameId not in (SELECT gameId FROM Has WHERE userId = ".$friendid.")");

                    // number of rows must be greater than 0
                    echo "-Games On Sale-<br>";
                    while($row = mysql_fetch_assoc($value)) {
                        $gameid  = $row['gameId'];
                        $gameName = $row['gamename'];
                        foreach($row as $key => $val){
                            if($key === 'gamename')
                                echo "Game Name: ".$val."<br>";
                            if($key === 'genre')
                                echo "Game genre: ".$val."<br>";
                            if($key === 'type')
                                echo "Game Type: ".$val."<br>";
                            if($key === 'averagerating')
                                echo "Rating: ".$val."<br>";
                            if($key === 'developer')
                                echo "Developer: ".$val."<br>";
                            if($key === 'price')
                                echo "Price: $".$val."<br>";
                            if($key === 'description')
                                echo $val."  ";
                            
                        }
                        echo "<form action='choosePaymentgift.php?edit=Y&id=$userid&gameid=$gameid&friendid=$friendid' method='POST'>
                                        <input type='submit' value='Gift!' name='submit'>
                                    </form>";
                        echo "<br><br>";
                            


                    }
            ?>
        </div>

        <footer> This webpage was made by the best CS 353 group. </footer>
    </body>
</html>
