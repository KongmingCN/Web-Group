<?php
$con = mysql_connect("localhost","root","*****");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db",$con);

$result = mysql_query("select * from Contacts where Name='$_POST[name]'");

while($row = mysql_fetch_array($result))
  {
  echo $row['Name']."'s phone number is ".$row['PhoneNumber'];
  echo "<br>";
  }

mysql_close($con)
?>
