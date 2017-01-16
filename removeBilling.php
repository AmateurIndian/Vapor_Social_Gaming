<?php
            mysql_connect("localhost", "root", "sarj-93") or die("mysql connection is failure.");
            mysql_select_db("cs353") or die("Database does not exists.");

            $val =  $_GET['id'];
            $cardno = $_GET['cardno'];
         

            $value= mysql_query("DELETE FROM `PaymentInfo` WHERE `userid` = '$val' AND `cardno` = '$cardno'");

            if($value){
             echo  ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Credit card removed')
                        window.location.href='billingList.php?edit=Y&id=$val'
                  </SCRIPT>");
            }
            else{
               echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Problems in deleting card details')
                        window.location.href='billingList.php?edit=Y&id=$val'
                  </SCRIPT>"); 
            }
  
?>