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
$sql = "SELECT Iid, CustomerId, CartId   FROM Invoice";
$result = $objConnect->query($sql);

echo "<br>";
if ($result->num_rows > 0) {
  // head of table
 echo "<table border='2px'>";
 echo "<tr bgcolor='pink'>";   echo "<th width='200px'>รหัสใบเสร็จ "; echo "</th>";echo "<th> รหัสลูกค้า: ";echo "</th>"; echo "<th> ตะกร้าสินค้า"; echo "</th>";
 echo "</tr>"; 
// output data of each row
 while($row = $result->fetch_assoc()) {
 echo "<td><a href='edit.php?Iid=$row[Iid]'>".$row["Iid"]."</td>"."</a><td>"."</a>".$row["CustomerId"]."</td>"."<td>".$row["CartId"]."</td>";
 echo "</tr>"."<br>";    

  }
  echo "</table>";
}
else {
    echo "0 results";
  }

  //menu add data to table
  echo "<br>";
  echo "<a href='insertinvoice.php'>Add New Invoice</a>";
  
  $objConnect->close();
?>