<html>
	<head>
		<title></title>
	</head>

	<body>
  	<?php
    	mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
    	mysql_select_db("cs353") or die("Database does not exist.");

			$user_id = $_GET['id']; // Replace this with data given from parent page

    	$value = mysql_query("SELECT * FROM Message WHERE receiverid = ".$user_id);

			echo "-Messages Received-<br><br>";

			while($row = mysql_fetch_assoc($value)) {
        $sender;
				foreach($row as $key => $val) {
					if($key === 'messageid')
						echo "Message ID:".$val;
          if($key === 'senderid') {
            $temp = $val;
            settype($temp, "integer");
            $nested_value = mysql_query("SELECT username FROM User WHERE id = ".$temp);

            while($nrow = mysql_fetch_assoc($nested_value)) {
              foreach($nrow as $key => $val) {
                $sender = $val;
              }
            }
          }
          if($key === 'content')
            echo "<br>Message: ".$val."<br>Sent by ".$sender."<br><br>";
        }
			}

      echo "-Messages Sent-<br><br>";
      $value = mysql_query("SELECT * FROM Message WHERE senderid = ".$user_id);

      while($row = mysql_fetch_assoc($value)) {
        $sender;
        foreach($row as $key => $val) {
          if($key === 'messageid')
            echo "Message ID:".$val;
          if($key === 'receiverid') {
            $temp = $val;
            settype($temp, "integer");
            $nested_value = mysql_query("SELECT username FROM User WHERE id = ".$temp);

            while($nrow = mysql_fetch_assoc($nested_value)) {
              foreach($nrow as $key => $val) {
                $sender = $val;
              }
            }
          }
          if($key === 'content')
            echo "<br>Message: ".$val."<br>Sent to ".$sender."<br><br>";
        }
      }

  	?>

    <form action='home.php?edit=Y&id=<?php echo $user_id ?>' method='POST'>
            <input type='submit' value='Home' name='gift'>
        </form>
	</body>
</html>
