<?php 
session_start(); 

if(!$_SESSION['username']){ 
    header("Location: index.html"); 
    exit; 
} 
//echo 'Welcome, '.$_SESSION['username']; 
header("Location:http://kyawphyonaing.sakura.ne.jp/tayar/index.html");
?>