<?php

session_start();

if(isset($_SESSION['']) && $_SESSION[''] != NULL){

    unset($_SESSION['']);
    
}
	 header("location:dangnhap.php");
 
?>