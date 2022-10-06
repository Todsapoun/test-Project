<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"DBProduct");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO Invoice(Iid, CustomerId, CartId) VALUES ('$_GET[Iid]','$_GET[CustomerId]','$_GET[CartId]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo " ไม่สามารถเพิ่มได้ !!! <br>";
echo "<br>";
echo "<a href='select.php'>"."กลับหน้าหลัก"."</a>";
} else {
echo " เพิ่มเรียบร้อยเเล้ว <br>";
echo "<br>";
echo "<a href='select.php'>"."กลับหน้าหลัก"."</a>";
}
?>