<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"DBProduct");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO Promotion(PromotionId, PromotionName, CDate, ModDate) 
              VALUES ('$_GET[PromotionId]','$_GET[PromotionName]','$_GET[CDate]','$_GET[ModDate]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo " ไม่สามารถเพิ่มได้ !!! <br>";
echo "<br>";
echo "<a href='tables-promo.php'>"."กลับหน้าโปรโมชั่น"."</a>";
} else {
echo " เพิ่มเรียบร้อยเเล้ว <br>";
echo "<br>";
echo "<a href='tables-promo.php'>"."กลับหน้าโปรโมชั่น"."</a>";
}
?>