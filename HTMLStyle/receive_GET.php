<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
        <title>Login success</title>
    </head>
    <body>
        <?php
            $user_name = $_GET["fname"];
            echo "<br> ยินดีต้อนรับ $user_name <br><br>";
        ?>
        <div class id="center_button"><button onclick="location.href='main.html'">เข้าสู่ระบบ</button></div>
    </body>
    </html>