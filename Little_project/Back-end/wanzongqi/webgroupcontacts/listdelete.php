<?php
$con = mysql_connect("localhost","root","*****");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db",$con);

mysql_query("delete from Contacts where Name = '$_POST[name]' ");

echo "Delete the information successfully!";

mysql_close($con);

?>
