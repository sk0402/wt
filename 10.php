<html>
 <body>
 <style>
 table, td, th 
{
border: 1px solid black; 
width: 33%;
 text-align: center; 
border-collapse:collapse;
 background-color:lightblue;
 } 
table { margin: auto; }
 </style> 
<?php
$servername = "localhost"; 
$username = "root"; 
$password = "root"; 
$dbname = "sample"; 
$a=[];
 // Create connection // Opens a new connection to the MySQL server 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
// Check connection and return an error description from the last connection error, if any 
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error); $sql = "SELECT *
FROM student";
 // performs a query against the database 
$result = $conn->query($sql); 
echo "<br>"; 
echo "<center> BEFORE SORTING </center>"; 
echo"<table border='2'>";
 echo"<tr>";
 echo "<th>usn</th><th>NAME</th><th>address</th></tr>";
 if ($result->num_rows> 0) 
{ 
// output data of each row and fetches a result row as an associative array 
while($row=$result->fetch_assoc())
{ 
echo "<tr>"; 
echo "<td>". $row["usn"]."</td>";
echo"<td>".$row["name"]."</td>";
 echo "<td>". $row["address"]."</td></tr>"; 
array_push($a,$row["usn"]);
 }
  {
 for($i=0;$i<$n;$i++)
 {
 if($row["usn"]== $a[$i])
 {
 $c[$i]=$row["name"];
 $d[$i]=$row["address"];
 }
 }
 }
 }
 echo "<br>";
 echo "<center> AFTER SORTING </center>";
 echo"<table border='2'>";
 echo"<tr>";
 echo"<th>usn</th><th>name</th><th>address</th></tr>";
 for($i=0;$i<$n;$i++)
 {
 echo "<tr>";
 echo"<td>".$a[$i]."</td>";
 echo "<td>". $c[$i]."</td>";
echo "<td>". $d[$i]."</td></tr>";
 }
 echo "</table>";
$conn->close();
 ?>
 </body>
 </html>
