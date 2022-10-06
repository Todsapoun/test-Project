<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE Invoice SET Iid='$_GET[Iid]',CustomerId='$_GET[CustomerId]',CartId='$_GET[CartId]'
 WHERE Iid='$_GET[Iid]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo " ไม่สามารถเพิ่มได้ !!! <br>";
} else {
echo " เพิ่มเรียบร้อยเเล้ว <br>";
echo "<br>";
echo "<a href='select.php'>กลับสู่หน้าหลัก</a>";
}
?>