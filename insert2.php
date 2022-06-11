<?php
include "connection2.php";

$a1 = $conn->real_escape_string($_REQUEST['id']); //protect from sql injection
$b1 = $_REQUEST['name'];
$c1 = $_REQUEST['email'];
$d1 = $_REQUEST['mobile'];
$e1 = $_REQUEST['age'];
$f1 = $_REQUEST['address'];

$sql="Insert into student(id,name,email,mobile,age,address) values ('$a1','$b1','$c1','$d1','$e1','$f1');";
$result = $conn->query($sql);

if(!$result)
{ 
    echo "Not Inserted".$conn->error;
    
  
}/*
else
{
    echo "Inserted successfully";
}*/
$conn->close();

?>