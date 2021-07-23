<?php

define('DB_SERVER','localhost:330');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','IT');

$db=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


  session_start();
 

   $id=$_GET['id'];
   $sql="DELETE FROM employees_record  WHERE emp_id='$id'";
   
   $result=mysqli_query($db,$sql);




    if($result == 1){
      $_SESSION['success']="User Delete Successfully";
      header("location:users.php");
      
    }
    else{
      $_SESSION['error']="Something went wrong";
      header("location:users.php");
    } 
?>

