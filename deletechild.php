<?php
$id = $_GET['id'];
include 'db.php';

$q = "DELETE from `child` where `c_id` = '$id'";
$res = mysqli_query($con, $q);

if($res){
    header('location: childlist.php');
    die;
}



?>