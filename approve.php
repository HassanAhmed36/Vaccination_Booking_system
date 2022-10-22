<?php
$id = $_GET['id'];
include 'db.php';

$q = "UPDATE `Booking` set `status`= 'Approved' WHERE `booking`.`b_id` = $id";
;
$res = mysqli_query($con, $q);

if($res){
    header('location: appoiment.php');
    die;
}



?>