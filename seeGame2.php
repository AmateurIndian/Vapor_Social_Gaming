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
		  	<?php
		    	mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
		    	mysql_select_db("cs353") or die("Database does not exist.");

					$user_id = $_GET['id']; // Replace this with data given from parent page
					settype($user_id, "integer");

				echo "<form action='seeGame.php?edit=Y&id=$user_id' method='POST'>
		                    <input type='submit' value='My Games' name='submit'>
		                </form><br>";

		    	$value = mysql_query("SELECT * FROM Game G WHERE gameId not in (SELECT gameId FROM Has WHERE userId = ".$user_id.")");

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
						echo "<form action='choosePayment.php?edit=Y&id= $user_id&gameid=$gameid' method='POST'>
		                                <input type='submit' value='BUY!' name='submit'>
		                            </form>";
		                echo "<form action='friendCheck.php?edit=Y&id=$user_id&game=$gameName&gameid=$gameid' method='POST'>
		                                <input type='submit' value='See Friends Who Play THIS!' name='submit'>
		                            </form>";
		                            echo "<form action='seeReviews.php?edit=Y&id=$user_id&gameid=$gameid' method='POST'>
		                                <input type='submit' value='Reviews' name='submit'>
		                            </form>";
						echo "<br><br>";
							


					}
		  	?>
	  	</div>

  		<footer> This webpage was made by the best CS 353 group. </footer>
	</body>
</html>
