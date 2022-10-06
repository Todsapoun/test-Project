<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM Customer WHERE CustomerId='$_GET[CustomerId]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="GET" action="editcussuccess.php">
<p>
<label for="CustomerId">รหัสลูกค้าที่จะแก้ไข</label>
<input type="text" name="CustomerId" id="CustomerId" value="<?=$data['CustomerId'];?>"/>
</p>
<p>
<label for="CustomerName">ชื่อลูกค้าที่จะแก้ไข</label>
<input type="text" name="CustomerName" id="CustomerName" value="<?=$data['CustomerName'];?>"/>
</p>
<p>
<label for="Location">ที่อยู่ที่จะแก้ไข</label>
<input type="float" name="Location" id="Location" value="<?=$data['Location'];?>" />
</p>
<p>
<label for="Email">Email ที่จะแก้ไข</label>
<input type="email" name="Email" id="Email" value="<?=$data['Email'];?>" />
</p>
<p>
<label for="DateOfBirth">วันเกิดที่จะแก้ไข</label>
<input type="date" name="DateOfBirth" id="DateOfBirth" value="<?=$data['DateOfBirth'];?>" />
</p>
<p>
<label for="CDate">C-Date ที่จะแก้ไข</label>
<input type="date" name="CDate" id="CDate" value="<?=$data['CDate'];?>" />
</p>
<p>
<label for="ModDate">Mod-Date ที่จะแก้ไข</label>
<input type="date" name="ModDate" id="ModDate" value="<?=$data['ModDate'];?>" />
</p>
<p>
<label for="Postcode">รหัสไปรษณีย์ที่จะแก้ไข</label>
<input type="int" name="Postcode" id="Postcode" value="<?=$data['Postcode'];?>" />
</p>
<p>
    <input type="submit" value="แก้ไข" >
</p>
</form>

</p>