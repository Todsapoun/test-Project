<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM Product WHERE ProductId='$_GET[ProductId]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="GET" action="editprosuccess.php">
<p>
<label for="ProductId">รหัสสินค้าที่จะแก้ไข</label>
<input type="text" name="ProductId" id="ProductId" value="<?=$data['ProductId'];?>"/>
</p>
<p>
<label for="ProductName">ชื่อสินค้าที่จะแก้ไข</label>
<input type="text" name="ProductName" id="ProductName" value="<?=$data['ProductName'];?>"/>
</p>
<p>
<label for="Price">ราคาที่จะแก้ไข</label>
<input type="float" name="Price" id="Price" value="<?=$data['Price'];?>" />
</p>
<p>
<label for="CDate">วันที่ผลิตที่จะแก้ไข</label>
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