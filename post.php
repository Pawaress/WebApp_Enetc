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
<body>
<h1 style="text-align:center ;">Webbord KakKak</h1><hr>

<center>
    ต้องการกระทู้หมายเลข<?php echo $_GET['id'];?><br>
<?php

    $id= $_GET['id'];
    if($id%2 ==0){
        echo "เป็นกระทู้หมายเลขคู่";
    }
    else{
        echo "เป็นกระทู้หมายเลขคี่";
    }
?> </center><br>
<div align="center">
<div class="container">
    <?php 
    
    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    $conn -> exec("SET CHARACTER SET utf8");
    $data = $conn->query("SELECT p.title,p.content,p.post_date,u.name FROM post p,user u  WHERE u.id = p.user_id and p.id = $id;;");
    $row = $data->fetch();?>

    <div class="card text-dark bg-white border-primary mb-4">
        <div class="card-header bg-primary text-white text-start"><?php echo "$row[0]";?></div>
            <div class="card-body">
                <form action="post_save.php" method="post">
                    <input type="hidden" name="post_id" value="<?=$_GET['id'];?>">
                        <div class="row mb-3 justify-content-start ms-1">
                        <?php echo "$row[1]";?>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row justify-content-start ms-1">
                                <?php echo "$row[3] - $row[2]";?>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
    </div>


    <?php
    
             $conn = null;
    
    ?>
<?php
$i=1;
$conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    $conn -> exec("SET CHARACTER SET utf8");
    $data = $conn->query("SELECT cm.content,cm.post_date,u.name FROM user u,comment cm WHERE cm.user_id=u.id AND cm.post_id=$id;");
    if($data !== false){
        while($row = $data->fetch()){
           // echo "<tr><td><a href=\"post.php?id=".$row['0'].'\" style=text-decoration:none></a>"; ?>
           
            <div class="card text-dark bg-white border-info mb-4 ">
                    <div class="card-header bg-info text-white text-start">ความคิดเห็นที่ <?php echo "$i"; ?></div>
                        <div class="card-body">
                            <form action="post_save.php" method="post">
                                <input type="hidden" name="post_id" value="<?=$_GET['id'];?>">
                                    <div class="row mb-3 justify-content-start ms-1">
                                        <?php echo "$row[0]"; ?>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <div class="row justify-content-start ms-1">
                                                <?php echo "$row[2] - $row[1]"; ?>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                </div>

         <?php  $i++;
        }
        $conn = null;
        $i=1;
    }

?>
    


    <div class="card text-dark bg-white border-success mb-4">
        <div class="card-header bg-success text-white text-start">แสดงความคิดเห็น</div>
            <div class="card-body">
                <form action="post_save.php" method="post">
                    <input type="hidden" name="post_id" value="<?=$_GET['id'];?>">
                        <div class="row mb-3 justify-content-center">
                            <div class="col-lg-10">
                                <textarea name="comment" class="form-control" row="8" ></textarea>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <center>
                                    <button type="submit" class="btn btn-success btn-sm text-white">
                                        <i class="bi bi-box-arrow-up-right me-1"></i>ส่งข้อความ
                                    </button>
                                </center>
                            </div>
                        </div>
                </form>
            </div>
    </div>
</div>






<!--
<h1 style="text-align:center ;">Webbord KakKak</h1><hr>
<div align="center">
ต้องการกระทู้หมายเลข<?php /*echo $_GET['id'];*/?><br>
<?php
   /* $id= $_GET['id'];
    if($id%2 ==0){
        echo "เป็นกระทู้หมายเลขคู่";
    }
    else{
        echo "เป็นกระทู้หมายเลขคี่";
    }*/
?> 
<table style="border:2px solid black;width: 40%" align="center">
<tr ><td style="text-align:left ;background-color: #6CD2FE;">กรอกข้อมูล</td></tr>
<tr ><td style="text-align:center ;"><textarea name="message" rows="10"col="30">
</textarea></td></tr>
<tr><td style="text-align:center"><form><input type="submit" value="ส่งข้อความ"></form></td></tr>

</table>
<br>

<a  href = "index.php">กลับไปหน้าหลัก</a>
</div>
-->
</body>
</html>