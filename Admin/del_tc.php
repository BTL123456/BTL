<?php 
$id=$_GET['id'];

require("Include/connection.php");

$sql="DELETE  FROM trangchi WHERE id=$id";
mysqli_query($conn,$sql);

mysqli_close($conn);
header('location:list_tc.php');
exit();
?>