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

				$userid = $_GET['id']; // Replace this with data given from parent page
				settype($user_id, "integer");

			echo"<form action='home.php?edit=Y&id=$userid' method='POST'>
            <input type='submit' value='Home' name='gift'>
        	</form>";

			echo "<form action='seeGame2.php?edit=Y&id=$userid' method='POST'>
	                    <input type='submit' value='Buy New Games' name='submit'>
	                </form>";

	    	$value = mysql_query("SELECT * FROM Game G WHERE gameId in (SELECT gameId FROM Has WHERE userId = ".$userid.")");

				// number of rows must be greater than 0
				echo "-Games Owned-<br>";
				while($row = mysql_fetch_assoc($value)) {
					foreach($row as $key => $val){
						$gameid  = $row['gameId'];
						$gameName = $row['gamename'];
						if($key === 'gamename')
							echo "Game Name: ".$val."<br>";
					}
					echo "<form action='friendCheck.php?edit=Y&id=$userid&game=$gameName&gameid=$gameid' method='POST'>
	                    <input type='submit' value='See Friends Who Play THIS!' name='submit'>
	                </form>";
	                echo "<form action='review.php?edit=Y&id=$userid&gameid=$gameid' method='POST'>
	                    <input type='submit' value='Review' name='submit'>
	                </form>";	
				}
				
	  	?>
	  	</div>

  		<footer> This webpage was made by the best CS 353 group. </footer>
	</body>
</html>
