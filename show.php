<html>
<head><title></title></head>
<body>
  <style>
    h1{
    text-align: center;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-style: italic;
    background-color: aqua;
}
  .hero
{
   height: 100%; 
   width: 100%;
   background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(911.jpg);
   background-position: center;
   background-size: cover;
   position: absolute;
}
  </style>
   <div class="hero">
  
  <h1>DATABASE</h1>
 
<table id="database"  border="1"  align="center">
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>SURNAME</th>
    <th>EMAIL</th>
    <th>USERNAME</th>
    <th>PASSWORD</th>
   
  </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `ID`, `name`, `surname`, `email`, `username`, `password` FROM `employess`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
   {
    echo "<tr><td> " . $row["ID"]. "</td><td>" . $row["name"]. "</td><td>". $row["surname"] . "</td><td>". $row["email"] . "</td><td>". $row["username"] . "</td><td>". $row["password"] . "</td></tr>";
  }
} else {
  echo "0 results";
}
$conn->close();


?>
</table> 
<br>
<input type="button" id="btnExport" value="DBrep" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#database')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("DBrep.pdf");
                }
            });
        });
    </script> <br>



<h1>PAYMENTS</h1>
 
 <table id="payments"  border="1"  align="center">
   <tr>
     <th>ID</th>
     <th>NAME</th>
     <th>SURNAME</th>
     <th>PAY</th>
     
    
   </tr>
 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "cz";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 
 $sql = "SELECT `ID`, `Name`, `Surname`, `PAY` FROM `payments`";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc())
    {
     echo "<tr><td> " . $row["ID"]. "</td><td>" . $row["Name"]. "</td><td>". $row["Surname"] . "</td><td>". $row["PAY"] . "</td></tr>";
   }
 } else {
   echo "0 results";
 }
 $conn->close();
 
 
 ?>
 </table> 
 <br>
 <input type="button" id="btn" value="PayRep" />
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
     <script type="text/javascript">
         $("body").on("click", "#btn", function () {
             html2canvas($('#payments')[0], {
                 onrendered: function (canvas) {
                     var data = canvas.toDataURL();
                     var docDefinition = {
                         content: [{
                             image: data,
                             width: 500
                         }]
                     };
                     pdfMake.createPdf(docDefinition).download("PayRep.pdf");
                 }
             });
         });
     </script> <br> 
     
  <h1>LOCATION</h1>
 
 <table id="location"  border="1"  align="center">
   <tr>
     <th>ID</th>
     <th>LATITUDE</th>
     <th>LONGITUDE</th>
     <th>LOGIN</th>
     <th>LOGOUT</th>
     <th>DATE</th>
    
   </tr>
 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "cz";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 
 $sql = "SELECT `ID`, `latitude`, `longitude`, `login`, `logout`, 'Date'  FROM `location`";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc())
    {
     echo "<tr><td> " . $row["ID"]. "</td><td>" . $row["latitude"]. "</td><td>". $row["longitude"] . "</td><td>". $row["login"] . "</td><td>". $row["logout"] . "</td><td>". $row["Date"] . "</td></tr>";
   }
 } else {
   echo "0 results";
 }
 $conn->close();
 
 
 ?>
 </table> 
 <br>
 <input type="button" id="btnExport" value="LocRep" />
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
     <script type="text/javascript">
         $("body").on("click", "#btnExport", function () {
             html2canvas($('#location')[0], {
                 onrendered: function (canvas) {
                     var data = canvas.toDataURL();
                     var docDefinition = {
                         content: [{
                             image: data,
                             width: 500
                         }]
                     };
                     pdfMake.createPdf(docDefinition).download("LOCrep.pdf");
                 }
             });
         });
     </script> <br>

<a href="HRform.html">HOME PAGE</a>
</div>


</body>

</html>
