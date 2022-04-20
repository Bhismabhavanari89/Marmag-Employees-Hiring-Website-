<?php
    include("database.php");
    session_start();
    $emai = $_SESSION['Email'];
    $sql=mysqli_query($conn,"SELECT * FROM users where Email='$emai'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        if($row['status']==1){
            header ("Location: view.php");
        }
        else{
            header ("Location: reg_a.php");
        }
    }
?>
