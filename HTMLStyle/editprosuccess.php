<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE Product SET ProductId='$_GET[ProductId]',ProductName='$_GET[ProductName]',Price='$_GET[Price]',CDate='$_GET[CDate]',ModDate='$_GET[ModDate]'
 WHERE ProductId='$_GET[ProductId]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo " ไม่สามารถเพิ่มได้ !!! <br>";
} else {
echo " เพิ่มเรียบร้อยเเล้ว <br>";
echo "<br>";
echo "<a href='tables-pro.php'>กลับหน้าสินค้า</a>";
}
?>