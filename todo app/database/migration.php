<?php
$conn = mysqli_connect("localhost","root","",);
if(!$conn){
    echo 'erorr :' . mysqli_connect_error($conn);
}

// $sql = "DROP DATABASE `todoapp`";
$sql = "CREATE DATABASE IF NOT EXISTS `todoapp`";
$result = mysqli_query($conn , $sql);
// echo mysqli_error($conn);

mysqli_close($conn);

// table

$conn = mysqli_connect("localhost","root","","todoapp");
if(!$conn){
    echo 'erorr :' . mysqli_connect_error($conn);
}
$sql = "CREATE TABLE IF NOT EXISTS `task`(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(200) NOT NULL 

)";
$res = mysqli_query($conn , $sql);
mysqli_close($conn);