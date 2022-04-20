<?php
extract($_POST);
include("database.php");
$sql=mysqli_query($conn,"SELECT * FROM users where Email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}

else if(isset($_POST['save']))
{
    if ($_POST["pass"] == $_POST["cpass"]) {
        $query="INSERT INTO users(Email, Password,position) VALUES ('$email', 'md5($pass)','unhired')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: login.php?status=success");
     }
     else {
        echo "Both passwords are not same";
        
     }
    
}
?>




