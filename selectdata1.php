<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>List of Candidate</h1>
    <table align="center" border="2">
        <thead>
            <tr><td>Roll No</td><td>Name</td><td>Email</td><td>Mobile</td><td>Age</td><td>Address</td>
            <td colspan="2">Operation</td></tr>
        </thead>
        <tbody>
        <?php
include"connection2.php";

$sql ="Select * from student";
$result =  $conn->query($sql);


//check no of rows in db
$num = $result->num_rows;


//fetch row if it is greater than 0
if($num>0)
{
    

   while($row = $result->fetch_assoc())
   {
       ?>
       <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><a href="">Update</a></td>
        <td><a href ="">Delete</a></td>

    </tr>
    <?php
      
   }
  
}
$conn->close();

?>

        
            
        </tbody>
    </table>
</body>
</html>