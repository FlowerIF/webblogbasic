<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="shortcut icon" href="./img/favicon.ico.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,500;0,600;0,700;0,800;0,900;1,300;1,400&display=swap" rel="stylesheet">

    <title>My Blog</title>
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
        /* blog */
        #blog{
            display: flex;
            justify-items: center;
            align-items: center;
            flex-direction:column ;
            padding: 40px;
            border-bottom: 1px solid blueviolet;
        }
        .blog-heading{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .blog-heading span{
            color: rgb(168, 87, 21);
        }
        .blog-heading h3{
            font-size: 2.4rem;
            color: brown;
            font-weight: 600;
        }
        .blog-container{
            
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0px;
            flex-wrap: wrap;
        }
        .blog-box{
            height: 500px;
            width: 350px;
            background-color: white;
            border: 1px solid #8e8e8e;
            margin: 20px;
        }
        .blog-img{
            width: 100%;
            height: 196px;
        }
        .blog-img img{
            width: 100%;
            height: 196px;
            object-fit: cover;
            object-position: center;
            
        }
        .blog-text{
            padding: 30px;
            display: flex;
            flex-direction: column;
        }
        .blog-text .title{
            height: 100px;
            margin-bottom: 20px;
        }
        .blog-text span{
            color: blue;
            font-size: 0.9rem;
        }
        .blog-text .blog-title{
            font-size: 1.3rem;
            font-family: 500;
            color: black;
        }
        .blog-text .blog-title:hover{
            color: #f33c3c;
            transition: all ease 0.3s;
        }
        .blog-text p{
            height: 100px;
            color: #9b9b9b;
            font-size: 0.9rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            margin: 20px 0px;
        }
        .blog-text a{
            color: black;
        }
        .blog-text a:hover{
            color: #f33c3c;
            transition: all ease 0.3s;
        }
        .page{
            text-align: center;
            margin-bottom: 20px;
        }
        .page a{
            font-size: large;
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
    
    
    
    $lay_so_bai_dang   = "select count(*) from blog
    where
    title like '%$search%'";
    $mang_ket_qua_so_bai_dang = mysqli_query($ket_noi,$lay_so_bai_dang);
    $ket_qua_so_bai_dang = mysqli_fetch_array($mang_ket_qua_so_bai_dang);
    $so_bai_dang = $ket_qua_so_bai_dang['count(*)'];
    $so_bai_dang_tren_1_trang = 3;
    $so_trang = ceil($so_bai_dang/$so_bai_dang_tren_1_trang);
    $bo_qua = $so_bai_dang_tren_1_trang  * ($trang -1);


 



    $sql = "select * from blog
    where
    title like '%$search%'
    limit $so_bai_dang_tren_1_trang offset $bo_qua";

    $ket_qua = mysqli_query($ket_noi,$sql);
?>
   
    <!-- blog-secsion -->
    <section id="blog">
        <!-- heading -->

        <div class="blog-heading">
            <span>Bài đăng gần đây</span>
            <h3>My Blog Of FlowerIF</h3>
        </div>

        <!-- blog-container -->
        <!-- <a href="form_insert.php">Thêm bài đăng</a>
        <a href="set_update.php">Sửa bài đăng</a> -->
        <caption>
                <form action="">
                    Tìm kiếm
                    <input type="search" name="search" value="<?php echo $search ?>">
                </form>
            </caption>
        <div class="blog-container">
            
            <?php foreach($ket_qua as $tung_bai_dang){ ?>
            <!-- box1 -->
            <div class="blog-box">
                <div class="blog-img">
                    <img src="<?php echo $tung_bai_dang['photo'] ?>" alt="">
                </div>

                <!-- text -->
                <div class="blog-text">
                    <span></span>
                    <div class="title">
                        <a href="view.php?id=<?php echo $tung_bai_dang['id'] ?>" class="blog-title"><?php echo $tung_bai_dang['title'] ?></a>
                    </div>
                    <p><?php echo $tung_bai_dang['content']?></p>
                    
                </div>



            </div>
            <?php }  ?>

            
            

        </div>
        

    </section>
    <div class="page">
            <?php for($i = 1;$i <= $so_trang;$i++){ ?>
                <a href="?trang=<?php echo $i?>&search=<?php echo $search?>">
                    <?php echo $i?>
                </a>

            <?php }?> 
    </div>
    <?php mysqli_close($ket_noi); ?>
</body>
</html>