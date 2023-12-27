<?php
session_start();
$conn = mysqli_connect('localhost',"root","","todoapp");
if(!$conn){
    echo mysqli_connect_error($conn);
}
if($_SERVER['REQUEST_METHOD'] = "POST"  and isset($_POST['title']) ){
    $title = trim(htmlspecialchars(htmlentities($_POST['title'])));
    $sql = "INSERT INTO `task`(`title`) VALUES('$title')";
    $result = mysqli_query($conn , $sql);
    if(mysqli_affected_rows($conn) == 1){
        $_SESSION['success'] = 'data added';
    } ;
}

header("location:../index.php");