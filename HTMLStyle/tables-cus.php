<?php
//connect to database 
$objConnect = mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

if($objConnect->connect_error)
{
    die("connection failed". $conn->connect_error);

}

//select data from table 
$sql = "SELECT * FROM Customer";
$result = $objConnect->query($sql);

echo "<br>";
if ($result->num_rows > 0) {
  // head of table
 echo "<table border='2px'>";
 echo "<body style='background-color:rgb(245, 215, 255)'>";
 echo "<tr bgcolor='pink'>";   echo "<th width='200px'> รหัสลูกค้า"; 
                               echo "</th>"; echo "<th> ชื่อลูกค้า";
                               echo "</th>"; echo "<th> ที่อยู่"; 
                               echo "</th>"; echo "<th> Email"; 
                               echo "</th>"; echo "<th> วันเกิด"; 
                               echo "</th>"; echo "<th> C-Date"; 
                               echo "</th>"; echo "<th> Mod-Date"; 
                               echo "</th>"; echo "<th> รหัสไปรษณีย์"; 
                               echo "</th>";
 echo "</tr>"; 
// output data of each row
 while($row = $result->fetch_assoc()) {
 echo "<td><a href='editcus.php?CustomerId=$row[CustomerId]'>".$row["CustomerId"]."</td>"."</a><td>"."</a>"
                                                              .$row["CustomerName"]."</td>"."<td>"
                                                              .$row["Location"]."</td>"."<td>"
                                                              .$row["Email"]."</td>"."<td>"
                                                              .$row["DateOfBirth"]."</td>"."<td>"
                                                              .$row["CDate"]."</td>"."<td>"
                                                              .$row["ModDate"]."</td>"."<td>"
                                                              .$row["Postcode"]."</td>";
 echo "</tr>"."<br>";    

  }
  echo "</table>";
}
else {
    echo "0 results";
  }

  $objConnect->close();
?>

<br>
<div id="center_button"><button onclick="location.href='main.html'">กลับหน้าหลัก</button></div>
<br>
<div id="center_button"><button onclick="location.href='insertcustomer.php'">เพิ่มข้อมูลลูกค้า</button></div>