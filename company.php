<?php
session_start();
include 'database.php';
$sql=mysqli_query($conn,"SELECT * FROM users");

// echo "<table border='1'>
//         <tr>
//         <th>Name</th>
//         <th>Gender</th>
//         </tr>";
        
//         while($row = mysqli_fetch_array($sql)) {
//           echo "<tr>";
//           echo "<td>" . $row['Name'] . "</td>";
//           echo "<td>".$row['Gender']."</td>";
//           echo "</tr>";
//         }

//         echo "</table>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MARMAG</title>
        <link rel="stylesheet" href="style.css">
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
                            <li><a href='company.php'>Home</a></li>
                             <li><a href='coall.php'>ALL MEMBERS</a></li>
                              <li><a href='cohired.php'>HIRED</a></li>
                               <li><a href='counhired.php'>UNHIRED</a></li>
                        </ul>    
                     </nav>   
                     <!----navigation bar------>             
            </div>

</body>
</html>
<?php  
 $query = "SELECT position, count(*) as number FROM users GROUP BY position";  
 $result = mysqli_query($conn, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Make Simple Pie Chart by Google Chart API with PHP Mysql</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["position"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                    //   title: 'Percentage of Hired and Unhired',  
                      //is3D:true,  
                    //   pieHole: 0.1  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />
           <center>  
           <div style="width:900px;">  
                <h2 align="center">Percentage of Hired and Unhired</h2>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>
          </center>  
      </body>  
 </html>  
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