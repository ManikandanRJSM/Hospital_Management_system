<?php
error_reporting(0);
session_start();
$sql1 = "SELECT count(`status`) AS sum FROM `prescription` WHERE `status`='0' AND `patient_email`='".$_SESSION['puname']."'";
 $result10 = mysqli_query($connection, $sql1);
    $contsum = $result10->fetch_assoc();
    
    $sql2 = "SELECT count(status) AS sum FROM `assigndoctor` WHERE status='0' AND `E_mail`='".$_SESSION['puname']."'";
    $result11 = mysqli_query($connection, $sql2);
    $contsum1 = $result11->fetch_assoc();          
    
    $sql3 = "SELECT count(status) AS sum FROM `reminder` WHERE status='0' AND `mail`='".$_SESSION['puname']."'";
//echo $sql3;
//exit;
    $result12 = mysqli_query($connection, $sql3);
    $contsum2 = $result12->fetch_assoc();          
    
    $sql4 = "SELECT count(status) AS sum FROM `solutions` WHERE status='0' AND `E_mail`='".$_SESSION['puname']."'";
//echo $sql3;
//exit;
    $result13 = mysqli_query($connection, $sql4);
    $contsum3 = $result13->fetch_assoc();          
?>

