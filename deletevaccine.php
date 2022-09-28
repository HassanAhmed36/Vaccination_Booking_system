<?php
$id = $_GET['id'];
include 'db.php';

$q = "DELETE from `vaccine` where `v_id` = '$id'";
$res = mysqli_query($con, $q);

if($res){
    header('location: listvaccine.php');
    die;
}



?>