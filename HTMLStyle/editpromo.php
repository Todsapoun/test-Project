<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM Promotion WHERE PromotionId='$_GET[PromotionId]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="GET" action="editpromosuccess.php">
<p>
<label for="PromotionId">รหัสโปรโมชั่นที่จะแก้ไข</label>
<input type="text" name="PromotionId" id="PromotionId" value="<?=$data['PromotionId'];?>"/>
</p>
<p>
<label for="PromotionName">ชื่อโปรโมชั่นที่จะแก้ไข</label>
<input type="text" name="PromotionName" id="PromotionName" value="<?=$data['PromotionName'];?>"/>
</p>
<p>
<label for="CDate">วันที่เริ่มใช้ที่จะแก้ไข</label>
<input type="date" name="CDate" id="CDate" value="<?=$data['CDate'];?>" />
</p>
<p>
<label for="ModDate">วันหมดอายุที่จะแก้ไข</label>
<input type="date" name="ModDate" id="ModDate" value="<?=$data['ModDate'];?>" />
</p>
<p>
    <input type="submit" value="แก้ไข" >
</p>
</form>

</p>