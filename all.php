<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
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
            <br><br>
<center>
<h2>Employee Details</h2>

<table class="styled-table">
  <tr>
    <td>Id</td>
    <td>Full Name</td>
    <td>Email</td>
    <td>Gender</td>
    <td>Phone number</td>
    <td>Address</td>
    
  </tr>

<?php

session_start();
include 'database.php';
#$emai = $_SESSION['Email'];
$sql=mysqli_query($conn,"SELECT * FROM users ");

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
  </tr>	
<?php
}
?>
</table>
</center>
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