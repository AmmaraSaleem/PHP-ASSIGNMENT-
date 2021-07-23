<?php

define('DB_SERVER','localhost:330');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','IT');

$db=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


  session_start();
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {



    $empname=$_POST['empname'];
    $dateofbirth=$_POST['dateofbirth'];
    $dateofjoining=$_POST['dateofjoining'];

   $sql="INSERT INTO  employees_record (emp_name,date_of_birth,date_of_joining) 
   VALUES ('$empname','$dateofbirth','$dateofjoining')";
   
   $result=mysqli_query($db,$sql);


   if($result == 1){
    $_SESSION['success']="User added Successfully";
    header("location:users.php");
  }
  else{
    $_SESSION['error']="Something went wrong";
    header("location:users.php");
  }

} 
?>

