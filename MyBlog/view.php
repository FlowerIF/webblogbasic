<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    $id = $_GET['id'];

    require_once 'connect.php';
    $sql = "select * from blog
    where id = '$id'";
    $ket_qua = mysqli_query($ket_noi,$sql);
    $bai_dang = mysqli_fetch_array($ket_qua);

    ?>
    <link rel="shortcut icon" href="./img/favicon.ico.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $bai_dang['title']?> </title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: prompt;
            box-sizing: border-box;
        }
        a{
            text-decoration: none;
        }
        ul{
            list-style: none;
        }
        body{
            margin: 0;
            padding: 0;
            font-family: prompt;
        }
        .body{
            margin: 20px 100px;
        }
        .home{
            text-align: center;
        }
        a{
            color: red;
            font-size: larger;
        }
        .img{
            display: block; margin-left: auto; margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="home"><a  href="index.php">Trang chủ</a></div>
    <div class="body">
        <h1><?php echo $bai_dang['title']?></h1>
        <img src="<?php echo $bai_dang['photo']?>" class="img">
        <p><?php echo nl2br($bai_dang['content'])?></p>
    </div>
    
</body>  
</html>