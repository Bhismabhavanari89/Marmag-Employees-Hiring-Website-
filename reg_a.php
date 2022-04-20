<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="dummy1.css">
<link rel="stylesheet" href="NavBar.css">
<link rel="stylesheet" href="csstemp.css">
<link rel="stylesheet" href="form.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>MARMAG</title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!--js for bootstrap 5-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!--2 js for bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    

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
    <br><br>
<div class="wrapper">
    <form action="reg.php" method="post" enctype="multipart/form-data">
		<div class="title">
      Registration Form
    </div>
    <div class="form">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="name" required>
       </div>  
       
       
      
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="gender">
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
       </div> 
       
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="tel" class="input" name="phonenumber" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="address"></textarea>
      </div>
		<div class="form-group">
            <button type="submit" name="save" >Register Now</button>
        </div>
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