<?php
$id = $_GET['id'];

require_once 'connect.php';

$sql = "delete from blog
where id = '$id'";

$ket_qua = mysqli_query($ket_noi,$sql);
header('Location: set_update.php');
mysqli_close($ket_noi);