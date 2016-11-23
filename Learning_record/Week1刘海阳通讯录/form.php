<html>
<head>
<meta charset="utf-8">
<title>通讯录</title>
</head>
<script src="jquery.min.js"></script>
<body>

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



echo '
  
  查询: <input type="text" name="find" id = "find_1" ></input> 

<script type="text/javascript" >
$("#find_1").bind("input propertychange change",function(event){

   var my_data=$("#find_1").val();
   

   
  $.ajax({
         url: "post.php",  
         type: "POST",
         data:{trans_data:my_data},
         dataType: "json",
         error: function(){  
             alert("Error loading XML document");  
         },  

         success: function(data){
          document.getElementById("table").innerHTML="<tr><td>name</td><td>phone_number</td><td colspan=2> 操   作 </td></tr>";
         	for(i=0;data[i];i+=2){
          document.getElementById("table").innerHTML+="<tr><td>"+data[i]+"</td><td>"+data[i+1]+"</td><td>修改 删除</td></tr>";

          }; 
          document.getElementById("table").innerHTML+="<tr><td> <input type=text name=find_2 id = find_2 ></input> </td><td></td><td></td></tr>";     
         }
     });
    
    
});
</script>
<table id ="table" border= 1> <tr><td>name</td><td>phone_number</td><td colspan=2> 操   作 </td></tr>';






echo "</table>";
echo "添加";

 
     
 ?>

</body>
</html>