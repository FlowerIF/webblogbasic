<?php

$title = $_POST['title'];
$content = $_POST['content'];
$photo = $_POST['photo'];

require_once 'connect.php';


$sql = "insert into blog(title,content,photo)
value('$title','$content','$photo')";
mysqli_query($ket_noi,$sql);
header('Location: index.php');
mysqli_close($ket_noi);

