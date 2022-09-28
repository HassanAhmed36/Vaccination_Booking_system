<?php
$id = $_GET['id'];
include 'db.php';

$q = "DELETE from `hospital` where `h_id` = '$id'";
$res = mysqli_query($con, $q);

if($res){
    header('location: listhospital.php');
    die;
}



?>