<?php
$servername = "localhost";
$username = "root";
$password = "wind";
$dbname = "phonebook";
// 创建连接
$conn = mysqli_connect($servername, $username, $password,$dbname = "phonebook");
// 检测连接
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}


header('Content-Type:text/html; charset=gb2312');//使用gb2312编码，使中文不会变成乱码    
     
     $qstring=$_POST['trans_data'];    
     
     $query = "SELECT * FROM book WHERE ( phone_number LIKE '%$qstring%' ) or ( name LIKE '%$qstring%' )";
     $result = $conn->query($query);
     
     
     $backValue=array();
     $i=0;
     while($row=mysqli_fetch_array($result))
     {
     	for($j=0;$j<2;$j++){
          $backValue[$i] = $row[$j+1];
          $i=$i+1; 
           };
     };
     $i=0;
     
     echo json_encode($backValue);                 
     

      
     

     
      

   ?>