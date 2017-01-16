<?php

    $conn = mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
    mysql_select_db("cs353") or die("Database does not exists.");

    if (isset($_POST['submit'])){
      $userid = $_GET['id'];
      $gameid = $_GET['gameid'];
      $rating=$_POST['rating'];
      settype($rating, "integer");
      $content=mysql_escape_string($_POST['content']);

      if (!$_POST['content']| !$_POST['rating']){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Please fill all the fields')
                window.location.href='review.php'
                </SCRIPT>");
      } else {
        $cond_query = "SELECT * FROM Gives WHERE userid = '$userid' and gameid = '$gameid'";
        $cond_result = mysql_query($cond_query);
        $length = mysql_num_rows($cond_result);

        $temp;
        if($length > 0) {
          while($row = mysql_fetch_assoc($cond_result)) {
            foreach($row as $key => $val) {
              if($key === 'ratingId') {
                $temp = $val;
              }
            }
          }
          settype($temp, "integer");
          $query0 = "UPDATE `Review` SET `rating` = '$rating' WHERE `review`.`ratingId` = '$temp'";
          mysql_query($query0);
          $query00 = "UPDATE `Review` SET `content` = '$content' WHERE `review`.`ratingId` = '$temp'";
          mysql_query($query00);
        } else {
          $query = "INSERT INTO `Review` (`ratingId`, `rating`, `content`) VALUES (NULL, '$rating', '$content')";
          mysql_query($query);
        }

        $ratingid;
        $subquery = "SELECT * FROM `Review` WHERE `rating` = ".$rating." and `content` = '$content'";
        $subresult = mysql_query($subquery);

        while($row = mysql_fetch_assoc($subresult)) {
          foreach($row as $key => $val) {
            if($key === 'ratingId') {
              $ratingid = $val;
            }
          }
        }
        settype($ratingid, "integer");

        $query1 = "INSERT INTO `Gives` (`ratingId`, `userid`, `gameid`) VALUES ('$ratingid', '$userid', '$gameid')";
        $result1 = mysql_query($query1);

        if($result1){
          if($length === 0) {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Review added to Game')
                window.location.href='home.php?edit=Y&id=$userid'
                </SCRIPT>");
          } else {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Review to game updated')
                window.location.href='home.php?edit=Y&id=$userid'
                </SCRIPT>");
          }
        } else {
          echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Invalid information given.')
                window.location.href='home.php?edit=Y&id=$userid'
                </SCRIPT>");
        }
      }
    }

?>
