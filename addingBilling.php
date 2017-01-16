<?php

    $conn = mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
    mysql_select_db("cs353") or die("Database does not exists.");

    $userid= $_GET['id'];

    if (isset($_POST['UpdateBillingInfo'])){
      
      
      $cardno=mysql_escape_string($_POST['cardNo']);
      $fullname=mysql_escape_string($_POST['fullName']);
      $address=mysql_escape_string($_POST['address']);

      if (!$_POST['cardNo'] | !$_POST['fullName']| !$_POST['address']){
        echo ":thinking:";
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Please fill all billing details.')
                window.location.href='addBilling.php?edit=Y&id=$userid' 
                </SCRIPT>");
      } else {
        $query = "
            INSERT INTO `PaymentInfo` (`userId`,`cardno`, `holdername`,`billingaddress`) VALUES ('$userid','$cardno','$fullname','$address')";

        $result = mysql_query($query);

        if($result){
          echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Billing information added.') 
                window.location.href='billingList.php?edit=Y&id=$userid'
                </SCRIPT>");
        }
      }
    }

?>
