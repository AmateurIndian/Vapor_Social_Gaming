<?php
	    	mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
	    	mysql_select_db("cs353") or die("Database does not exist.");

				$userid = $_GET['id']; // Replace this with data given from parent page
				$gameid = $_GET['gameid'];
				settype($user_id, "integer");

			echo"<form action='home.php?edit=Y&id=$userid' method='POST'>
            <input type='submit' value='Home' name='gift'>
        	</form>";

			$query = "SELECT max(rating) FROM Review WHERE ratingid in (SELECT ratingid FROM Gives WHERE gameid = '$gameid')";

	    	$value = mysql_query($query);

				// number of rows must be greater than 0
				echo "-Review-<br>";

				if(mysql_num_rows($value) == 0) {
					echo "Max Rating : 0<br>";
				} 

				while($row = mysql_fetch_assoc($value)) {
					foreach($row as $key => $val){
							echo "Max Rating: ".$val."<br>";
					}
						
				}

			$query2 = "SELECT * FROM Review WHERE ratingid in (SELECT ratingid FROM Gives WHERE gameid = '$gameid')";
			$value2 = mysql_query($query2);

			while($row = mysql_fetch_assoc($value2)) {
				echo "Rating:", $row['rating'], "<br>" ;
				echo "Content:", $row['content'], "<br><br>" ;			
			}
	  	?>			
