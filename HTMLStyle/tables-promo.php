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
$sql = "SELECT * FROM Promotion";
$result = $objConnect->query($sql);

echo "<br>";
if ($result->num_rows > 0) {
  // head of table
 echo "<table border='2px'>";
 echo "<body style='background-color:rgb(245, 215, 255)'>";
 echo "<tr bgcolor='pink'>";   echo "<th width='200px'> รหัสโปรโมชั่น"; 
                               echo "</th>"; echo "<th> ชื่อโปรโมชั่น";
                               echo "</th>"; echo "<th> C-Date"; 
                               echo "</th>"; echo "<th> Mod-Date";  
                               echo "</th>";
 echo "</tr>"; 
// output data of each row
 while($row = $result->fetch_assoc()) {
 echo "<td><a href='editpromo.php?PromotionId=$row[PromotionId]'>".$row["PromotionId"]."</td>"."</a><td>"."</a>"
                                                              .$row["PromotionName"]."</td>"."<td>"
                                                              .$row["CDate"]."</td>"."<td>"
                                                              .$row["ModDate"]."</td>"."<td>";
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
<div id="center_button"><button onclick="location.href='insertpromo.php'">เพิ่มโปรโมชั่น</button></div>
