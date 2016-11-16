<?php
$con = mysql_connect("localhost","root","*****");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db",$con);

mysql_query("insert into Contacts(Name,PhoneNumber)
VALUES('$_POST[name]','$_POST[phonenumber]')");

echo "Add the information succesfully!";
mysql_close($con);
?>
