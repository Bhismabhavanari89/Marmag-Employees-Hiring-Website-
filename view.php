<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="dummy1.css">
<link rel="stylesheet" href="NavBar.css">
<link rel="stylesheet" href="csstemp.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<title>MARMAG</title>
<!--js for bootstrap 5-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!--2 js for bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    

</head>

<body>

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
                    </ul>
                    
                </div>
                
            </div>
        </nav>
    
    
        
        
    </header>
    <br><br><br><br><br><br><br><br><br><br><br>
<center>
<h2>Employee Details</h2>

<table border="2" class="styled-table">
  <tr>
    <td>Id</td>
    <td>Full Name</td>
    <td>Email</td>
    <td>Gender</td>
    <td>Phone number</td>
    <td>Address</td>
    <td>Edit</td>
  </tr>

<?php

session_start();
include 'database.php';
$emai = $_SESSION['Email'];
$sql=mysqli_query($conn,"SELECT * FROM users where Email='$emai'");

while($data = mysqli_fetch_array($sql))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>    
    <td><?php echo $data['Name']; ?></td>
    <td><?php echo $data['Email']; ?></td>
    <td><?php echo $data['Gender']; ?></td>
    <td><?php echo $data['Phonenumber']; ?></td>    
    <td><?php echo $data['Address']; ?></td>   
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
  </tr>	
<?php
}
?>
</table>
</center>
<br><br><br><br><br><br><br><br><br><br><br>
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

<style>
  .styled-table th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
  .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    
  }
  .styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
  }
  .styled-table th,
  .styled-table td {
      padding: 12px 15px;
  }
  .styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
  }
  
  .styled-table tbody tr:nth-of-type(even) {
    background-color: #9bc40a;
  }
  .styled-table tbody tr:nth-of-type(odd) {
    background-color: rosybrown;
  }
  
  .styled-table tbody {
    border-bottom: 2px solid #170098;
    border-top: 2px solid#170098;
    border-left: 2px solid #170098;
    border-right: 2px solid #170098;
  }
  </style>