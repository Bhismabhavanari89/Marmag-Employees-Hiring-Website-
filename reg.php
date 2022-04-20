<?php
session_start();
extract($_POST);
include("database.php");

if(isset($_POST['save']))

{
    $emai = $_SESSION['Email'];
    $id = $_SESSION['id'];
    $position = "unhired";
    $statu = 1;
    $query="UPDATE  users SET Name='$name' ,Gender ='$gender' ,Phonenumber = '$phonenumber',Address= '$address',position = '$position',status = $statu where Email = '$emai'";
    //$q = "UPDATE users SET status='$statu' WHERE Email = $emai";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");

    header ("Location: view.php");
    
    
    
}
?>



