<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1 style="text-align:center ;">Webbord KakKak</h1><hr>
    <div style="float:right ;"><a  href = "login.html">เข้าสู่ระบบ</a></div>
    <form action="post.html"method="get">
    <form >
        หมวดหมู่:
    <select>
        :
        <option value="all">--ทั้งหมด--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select>
</form>
    
    <br>
    <ul>


    <?php
    
        /*for($i=1;$i<=10;$i++){
            echo "<li><a href = post.php?id=$i>กระทู้ที่ $i</a></li>";
        }*/

        $i=1;
        do{
            echo "<li><a href = post.php?id=$i>กระทู้ที่ $i</a></li>";
            $i++;
        }while($i<=10);

    /* แบบเก่า  <li><a href = "post.php?id=1">กระทู้ที่ 1</a></li>  */
    ?>
     
    </ul>
</form>
</body>
</html>