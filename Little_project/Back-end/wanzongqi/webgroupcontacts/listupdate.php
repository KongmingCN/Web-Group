<?php
$con = mysql_connect("localhost","root","*****");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db",$con);

mysql_query("update Contacts set PhoneNumber = $_POST[phonenumber] 
where Name = $_POST[name]");

echo "Update the information succesfully!";
mysql_close($con);
?>
