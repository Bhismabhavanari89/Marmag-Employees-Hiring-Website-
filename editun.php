<?php
session_start();
include 'database.php';
$emai = $_SESSION['Email'];
$name = $_SESSION['name'];

$sql=mysqli_query($conn,"SELECT * FROM users where Name='$name'");
$data = mysqli_fetch_array($sql); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $position = $_POST['position'];
    $edit = mysqli_query($conn,"update users set position='$position' where Name='$name'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:hired.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<head>
    <title>MARMAG</title>
    <link rel="stylesheet" href="style.css">
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
<h2>You are editing</h2>
<h3>Update Data</h3>



<form method="POST">
  <input type="text" name="position" value="<?php echo $data['position'] ?>" placeholder="Change" Required>
  <input type="submit" name="update" value="Update">
</form>
</center>
</div>
