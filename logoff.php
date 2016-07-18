<?php 
session_start();
unset($_SESSION['admin']); 
unset($_SESSION['luiz']); 
unset($_SESSION['thays']); 
session_destroy(); 
Header("Location: index.php");
?>