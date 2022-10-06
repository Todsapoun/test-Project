<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"DBProduct");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO Product(ProductId, ProductName, Price, CDate, ModDate) 
              VALUES ('$_GET[ProductId]','$_GET[ProductName]','$_GET[Price]','$_GET[CDate]','$_GET[ModDate]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo " ไม่สามารถเพิ่มได้ !!! <br>";
echo "<br>";
echo "<a href='tables-pro.php'>"."กลับหน้าสินค้า"."</a>";
} else {
echo " เพิ่มเรียบร้อยเเล้ว <br>";
echo "<br>";
echo "<a href='tables-pro.php'>"."กลับหน้าสินค้า"."</a>";
}
?>