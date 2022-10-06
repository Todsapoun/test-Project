<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>this is HTML style</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class ="screen01">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBProduct";
$conn = new mysqli($servername , $username , $password , $dbname);
if($conn->connect_error)
{
    die("connection failed" . $conn->connect_error);
}
echo "connection complete <br>" ;

$sql =  "SELECT * FROM customer" ;
$result = $conn -> query($sql);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()){
        echo "<br>"
        ."รหัสลูกค้า : " . $row["CustomerId"]. "<br>"
        ."ชื่อลูกค้า : " . $row["CustomerName"]. "<br>" 
        ."ที่อยู่ : " . $row["Location"]. "<br>"
        ."Email : " . $row["Email"]. "<br>"
        ."ปี/เดือน/วัน เกิด : " . $row["DateOfBirth"]. "<br>"
        ."C-Date : " . $row["C-Date"]. "<br>" 
        ."Mod-Date : " . $row["Mod-Date"]. "<br>"
        ."รหัสไปรษณีย์ : " . $row["Postcode"]. "<br>"
        ; 
    }
}
    else{
        echo "0 results";
    }
    $conn->close();
?>
        </div>
    </body>
</html>