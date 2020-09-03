<?php 
session_start();
$_SESSION['create_account_logged_in']=$eid;  
header('location:index.php'); 
?>