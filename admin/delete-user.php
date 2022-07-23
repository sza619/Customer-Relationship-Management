<?php
include("dbconnection.php");
$id = $_GET['id'];
$query="DELETE FROM user WHERE id = '$id' ";
$data=mysqli_query($con,$query);
if($data)
{
    echo "Record has been deleted";
}
else
{
    echo "Record not deleted";
}
?>