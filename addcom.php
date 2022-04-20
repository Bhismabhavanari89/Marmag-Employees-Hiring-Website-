<?php
session_start();
include 'database.php';
if(isset($_POST['save'])) // when click on Update button
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    if($pass==$cpass){
        
        $edit = mysqli_query($conn,"INSERT INTO company (Email, Password) VALUES ('$email', '$pass')");
        header("location:admin.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "Both passwords are not same";
    }    	
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MARMAG</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="form.css">
        <!----linking css file----->
            </head>
    <body>
    <div class="full-page">
            <div class="navbar">
                <div>
                <img  class="brand" src="marlog.jpeg"   width="140" height="90" style="margin-top: 20px;" >
                    </div>
                    <nav>
                        <ul id="Menu items">
                            <li><a href='admin.php'>Home</a></li>
                             <li><a href='all.php'>ALL MEMBERS</a></li>
                              <li><a href='hired.php'>HIRED</a></li>
                               <li><a href='unhired.php'>UNHIRED</a></li>
                        </ul>    
                     </nav>   
                     <!----navigation bar------>             
            </div>
            <center>
<h3>Add Company</h3>
<form method="post" >
		<h3 class="hint-text">Create your account</h3>
        <div class="wrapper">
            <label>Email:</label>
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="wrapper">
            <label>Password:</label>
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="wrapper">
            <label>Confirm Password:</label>
            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
        </div>
		<div class="wrapper">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
    </center>
</body>
</html>