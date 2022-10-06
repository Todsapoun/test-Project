<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE Customer SET CustomerId='$_GET[CustomerId]',
                                CustomerName='$_GET[CustomerName]',
                                Location='$_GET[Location]',
                                Email='$_GET[Email]',
                                DateOfBirth='$_GET[DateOfBirth]',
                                CDate='$_GET[CDate]',
                                ModDate='$_GET[ModDate]',
                                ModDate='$_GET[ModDate]'
                             WHERE CustomerId='$_GET[CustomerId]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo " ไม่สามารถเพิ่มได้ !!! <br>";
} else {
echo "<br> เพิ่มเรียบร้อยเเล้ว <br>";
echo "<br>";
echo "<a href='tables-cus.php'>กลับหน้าข้อมูลลูกค้า</a>";
}
?>