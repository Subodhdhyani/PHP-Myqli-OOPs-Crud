<?php
include ("connection2.php");

$a = $_GET['idd'];
$sql="Delete from student where id = '$a'";
$result = $conn->query($sql);

if($result){
    echo "Successfully";
}else{
    echo "Not".$conn->error();
}
$conn->close();


?>