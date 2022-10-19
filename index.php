<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>   
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  
</head>
    <?php 
    if(!isset($_SESSION['id']))
    {   
    ?>
<body>
    <div class="container">

    <h1 style="text-align:center ;">Webbord KakKak</h1>

    <?php include "nav.php";?>
   
   
    <form action="post.php"method="get">
   <br>
   <div class="d-flex">
        <div>
            <label >หมวดหมู่</label>
            <span class="dropdown">
                <button class="btn btn-light dropdown-toggle btn-sm" type="button"
                 id="button2" data-bs-toggle="dropdown" aria-expanded="false">--ทั้งหมด-- 
                    <ul class="dropdown-menu" aria-labelledby="button2">
                        <li><a href="#" class="dropdown-item">ทั้งหมด</a></li>
                        <li><a href="#" class="dropdown-item">เรื่องเรียน</a></li>
                        <li><a href="#" class="dropdown-item">เรื่องทั่วไป</a></li>
                    </ul>
                </button>
            </span>
        </div>

   </div>
    <br>
    <table class="table table-striped">
        
    <?php
    
        /*for($i=1;$i<=10;$i++){
            echo "<li><a href = post.php?id=$i>กระทู้ที่ $i</a></li>";
        }*/

        $i=1;
        do{
            echo "<tr><td><a href = post.php?id=$i style=text-decoration:none>กระทู้ที่ $i</a></td></tr>";
            $i++;
        }while($i<=10);

    /* แบบเก่า  <li><a href = "post.php?id=1">กระทู้ที่ 1</a></li>  */
    ?>

    </table>
    <br>
    <ul>


  
     
    </ul>
</form>
</div>
</body>

<?php
    }else{
?>
<body>
<div class="container">

    <h1 style="text-align:center ;">Webbord KakKak</h1>
    <?php include "nav.php";?>
    <hr>
    
    <form action="post.php"method="get">
   
    <div class="d-flex">
        <div>
            <label >หมวดหมู่</label>
            <span class="dropdown">
                <button class="btn btn-light dropdown-toggle btn-sm" type="button"
                 id="button2" data-bs-toggle="dropdown" aria-expanded="false">--ทั้งหมด-- 
                    <ul class="dropdown-menu" aria-labelledby="button2">
                        <li><a href="#" class="dropdown-item">ทั้งหมด</a></li>
                        <li><a href="#" class="dropdown-item">เรื่องเรียน</a></li>
                        <li><a href="#" class="dropdown-item">เรื่องทั่วไป</a></li>
                    </ul>
                </button>
            </span>
        </div>

   </div>
       
         
        
    
    <br>
    <a  href = "newpost.php">สร้างกระทู้ใหม่</a>
    <ul>


    <?php
    
        /*for($i=1;$i<=10;$i++){
            echo "<li><a href = post.php?id=$i>กระทู้ที่ $i</a></li>";
        }*/

        $i=1;
        do{
            echo "<li><a href = post.php?id=$i>กระทู้ที่ $i</a>"
            ;
            if($_SESSION['role']=='a'){
                echo "&nbsp;&nbsp;&nbsp;<a  href = delete.php?id=$i>ลบ</a>";
            }
            echo "</li>";
            $i++;
        }while($i<=10);

    /* แบบเก่า  <li><a href = "post.php?id=1">กระทู้ที่ 1</a></li>  */
    ?>
     
    </ul>
</form>
</div>
</body>

<?php
}
?>

</html>