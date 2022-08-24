<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,500;0,600;0,700;0,800;0,900;1,300;1,400&display=swap" rel="stylesheet">
    <title>Set Update</title>
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
    </style>
</head>
<body>
<?php 
    require_once 'connect.php';
    
    $trang = 1;
    if(isset($_GET['trang'])){
        $trang = $_GET['trang'];
    }


    $search = '';
    if(isset($_GET['search'])){
        $search = $_GET['search'];
        
    }

    $sql_lay_so_bai_dang = "select count(*) from blog
    where
    title like '%$search%'";
    $mang_ket_qua_so_bai_dang = mysqli_query($ket_noi,$sql_lay_so_bai_dang);
    $ket_qua_so_bai_dang = mysqli_fetch_array($mang_ket_qua_so_bai_dang);
    $so_bai_dang = $ket_qua_so_bai_dang['count(*)'];//lay so bai dang
    $so_bai_dang_tren_1_trang = 3;
    $so_trang = ceil($so_bai_dang/ $so_bai_dang_tren_1_trang);//tinh so trang
    $bo_qua = $so_bai_dang_tren_1_trang * ($trang - 1);//phai bo qua bao nhieu bai de qua trang moi



    
    $sql = "select * from blog
        where
        title like '%$search%'
        limit $so_bai_dang_tren_1_trang
        offset $bo_qua";

    
    
    $ket_qua = mysqli_query($ket_noi,$sql);
?>  
    <a href="index.php">Trang chủ</a>
    <h3>Update</h3>
    <table border="1" width="100%">
            <caption>
                <form action="">
                    Tìm kiếm
                    <input type="search" name="search" value="<?php echo $search ?>">
                </form>
            </caption>
        <tr>
            <th>Id</th>
            <th>Tiêu đề</th>
            <th>Nội dung</th>
            <th>Ảnh</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php foreach($ket_qua as $tung_bai_dang){ ?>
        <tr>
            
                <td><?php echo $tung_bai_dang['id'] ?></td>
                <td><?php echo $tung_bai_dang['title'] ?></td>
                <td><?php echo $tung_bai_dang['content'] ?></td>
                <td>
                    <img src="<?php echo $tung_bai_dang['photo'] ?>" width="300px" height="200px" alt="">
                </td>
                <td>
                    <a href="form_update.php?id=<?php echo $tung_bai_dang['id'] ?>">Sửa</a>
                </td>
                <td>
                    <a href="delete.php?id=<?php echo $tung_bai_dang['id'] ?>">Xóa</a>
                </td>
        </tr>
        <?php } ?>
    </table>
    <?php for($i = 1;$i <= $so_trang;$i++){?>
        <a href="?trang=<?php echo $i?>&search=<?php echo $search ?>">
            <?php echo $i?>
        </a>
    <?php } ?>
    <?php mysqli_close($ket_noi);?>

    
</body>
</html>