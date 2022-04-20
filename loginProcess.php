<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'database.php';
    $sql=mysqli_query($conn,"SELECT * FROM users where Email='$email' and Password='md5($pass)'");
    $row  = mysqli_fetch_array($sql);
    $company=mysqli_query($conn,"SELECT * FROM company where Email='$email' and Password='$pass'");
    $com  = mysqli_fetch_array($company);
    $admin=mysqli_query($conn,"SELECT * FROM admin where Email='$email' and Password='$pass'");
    $ad  = mysqli_fetch_array($admin);
    if(is_array($row))
    {
        $_SESSION["Email"]=$row['Email'];
        $_SESSION['id'] = $row['id'];
        #header("Location: home.php");
        header('Location:homepage\home.html'); 
    }
    else if(is_array($com)){
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["N"]=$row['Name'];
        header("Location: company.php");
    }
    else if(is_array($ad)){
        $_SESSION["Email"]=$row['Email'];
        #header("Location: home.php");
        header('Location:admin.php'); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>