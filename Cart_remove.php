<?php

session_start();
$link = mysqli_connect('localhost', 'root', '', 'art_gallery') or die('Unable to connect the server. ');
$title =$_GET['id'];
$name=$_SESSION['username'];



$sql = "DELETE FROM c WHERE title='$title' and customername='$name';";
$res = mysqli_query($link, $sql);


header('location:Cart.php');
?>

