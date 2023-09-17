<?php
session_start();
include ("../all_pages/connect.php");
if(isset($_SESSION['admin'])){
    header('location: /dashboard.php');
    }

    $admin= $_POST['admin'];
    $password = $_POST['password'];

    $sql="SELECT * FROM admin WHERE Username ='$admin' AND Password ='$password' ";
   $result= mysqli_query($conn,$sql) ;
   $userdata= mysqli_fetch_array($result,MYSQLI_ASSOC);
   $count =mysqli_num_rows($result);
        
       
   if ($count) {
    header('location: dashboard.php'); // Correct
} else {
    echo "abhi baki h";
}


?>