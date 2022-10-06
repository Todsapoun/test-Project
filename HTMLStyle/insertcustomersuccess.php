<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"DBProduct");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO Customer(CustomerId, CustomerName, Location, Email, DateOfBirth, CDate, ModDate, Postcode) 
              VALUES ('$_GET[CustomerId]','$_GET[CustomerName]','$_GET[Location]','$_GET[Email]','$_GET[DateOfBirth]','$_GET[CDate]','$_GET[ModDate]','$_GET[Postcode]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo " ไม่สามารถเพิ่มได้ !!! <br>";
echo "<br>";
echo "<a href='tables-pro.php'>"."กลับหน้าข้อมูลลูกค้า"."</a>";
} else {
echo " เพิ่มเรียบร้อยเเล้ว <br>";
echo "<br>";
echo "<a href='tables-pro.php'>"."กลับหน้าข้อมูลลูกค้า"."</a>";
}
?>