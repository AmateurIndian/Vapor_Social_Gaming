<?php

    $conn = mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
    mysql_select_db("cs353") or die("Database does not exists.");

    if (isset($_POST['submit'])){
      $userid = $_GET['id']; // Change this to previous page's carryover
      $friendid = $_GET['friendid'];
      $friendname = $_GET['friendname'];
      settype($userid, "integer");

      
      $message=mysql_escape_string($_POST['message']);

      if (!$_POST['message']){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Message cannot be blank!')
                window.location.href='message.php?id=$userid&friendid=$friendid&friendname=$friendname'
                </SCRIPT>");
      } else {
          $query1 = "INSERT INTO `Message` (`messageid`, `senderid`, `receiverid`, `content`) VALUES (NULL, '$userid', '$friendid', '$message')";

          $result1 = mysql_query($query1);

          if($result1) {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                  window.alert('Message sent.')
                  window.location.href='home.php?id=$userid'
                  </SCRIPT>");
          } else {
            echo "error:insert query has failed.";
          }
        } 
      }
      

?>
