<?php 
session_start();
if(isset($_GET['id'])){
    $conn = mysqli_connect("localhost","root","","todoapp");
    if(!$conn){
        $_SESSION['errors']=  "connect error " . mysqli_connect_error($conn);
    }
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM `task` WHERE `id` = '$id' ";
    
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($res);
    if(!$row){
        $_SESSION['errors'] = "data not exists";
    }else{
        $sql = "DELETE FROM `task`  WHERE `id` = '$id' ";
        $res = mysqli_query($conn,$sql);
        $_SESSION['success'] = "data deleted succesfully";
    }
    header("location:../index.php");
}