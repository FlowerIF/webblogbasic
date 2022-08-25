<?php
$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$photo = $_POST['photo'];


require_once 'connect.php';
 
$sql = "update blog
set 
title = '$title',
content = '$content',
photo = '$photo'
where
id = '$id'";

$ket_qua = mysqli_query($ket_noi,$sql);
header('Location: index.php');
mysqli_close($ket_noi);