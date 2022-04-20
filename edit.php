<?php
session_start();
include 'database.php';
$emai = $_SESSION['Email'];
$sql=mysqli_query($conn,"SELECT * FROM users where Email='$emai'");
$data = mysqli_fetch_array($sql); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $Name = $_POST['Name'];
    $Gender = $_POST['Gender'];
	$Phone = $_POST['pho'];
    $ADD = $_POST['add'];
    $edit = mysqli_query($conn,"update users set Name='$Name', Gender='$Gender', Phonenumber='$Phone', Address='$ADD' where Email='$emai'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:view.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<html>
<head>
<link rel="stylesheet" href="dummy1.css">
<link rel="stylesheet" href="NavBar.css">
<link rel="stylesheet" href="csstemp.css">
<link rel="stylesheet" href="form.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<!--js for bootstrap 5-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!--2 js for bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    

  <title>MARMAG</title>
</head>
<body>
    <br><br><br><br>
<header class="header">
        <nav class="navbar navbar-expand-lg header-nav fixed-top">
            <div class="container-fluid">
                  
            <p>
                <a  href="../homepage/home.html" > 
                <img  class="brand" src="marlog.jpeg"   width="140" height="90" style="margin-top: 20px;" >
                </a>
            </p>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../a/homepage/home.html">INSIGHT</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SECTORS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../a/services/power/power.html"> POWER</a></li>
                                <li><a class="dropdown-item" href="../a/services/Oil and gas/oilandgas.html">OIL & GAS</a></li>
                                <li><a class="dropdown-item" href="../a/services/infra/infra.html">INFRASTRUCTURE</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SOLUTIONS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../a/solutions/RPO/RPO.html"> RPO</a></li>
                                <li><a class="dropdown-item" href="../a/solutions/PS/PS.html">PERMANENT STAFFING</a></li>
                                <li><a class="dropdown-item" href="../a/solutions/TS/TS.html">TEMPORARY STAFFING</a></li>
                            </ul>
                        </li>
                
                        <li class="nav-item">
                            <a class="nav-link" href="../a/reg_a.php">JOIN US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../a/contact/contact.html">CONTACT US</a>
                        </li>
                       
                    </ul>
                    
                </div>
            </div>
        </nav>
    
    
        
        
    </header>
    <br><br><br><br><br><br><br>

<div class="wrapper">
<form method="POST">
    <div class="title">
        Update Data
      </div>
<div class="form">
    <div class="inputfield">
        <label>First Name</label>
        <input type="text" class="input" name="Name" value="<?php echo $data['Name'] ?>" placeholder="Enter Full Name" Required>
    </div>
    <div class="inputfield">
        <label>Gender</label>
        <input type="text" name="Gender" value="<?php echo $data['Gender'] ?>" placeholder="Enter Age" Required>
    </div>
    <div class="inputfield">
        <label>Phone Number</label>
  <input type="text" name="pho" value="<?php echo $data['Phonenumber'] ?>" placeholder="Enter Phone number" Required>
  </div>
  <div class="inputfield">
    <label>Address</label>
  <input type="text" name="add" value="<?php echo $data['Address'] ?>" placeholder="Enter Address" Required><br>
  </div>
  <input type="submit" name="update" value="Update">
  </div>
</form>
</div>
<br><br>
<footer>
<div class="footlogo">
        <p>MARMAG CAREER BOOSTER</p>
      </div>
  
      <footer>
        <div class="footer-container">
          <div class="left-col">
           
           
            <p class="rights-text">© MARMAG INFRA PVT. LTD. All Rights Reserved 2021</p>
          </div>
  
          <div class="right-col">
            <div class="social-media">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>