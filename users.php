


<?php   



define('DB_SERVER','localhost:330');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','IT');

$db=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$sql="SELECT * FROM  employees_record";
$result=mysqli_query($db,$sql);
// echo "<pre>";
// print_r($result);
// echo "</pre>";
// die();

?>



<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<script src="https://kit.fontawesome.com/7c92b2459d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css"  href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<style>


.my-custom-scrollbar {
position: relative;
height: 300px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}

</style>
<body>

<div class="container-fluid">

<?php
if(isset($_SESSION['success']))
  {?>
  <div class="alert alert-success my-3 "><?php echo $_SESSION['success']?></div>
<?php
    unset($_SESSION['success']);
  }
elseif(isset($_SESSION['error']))
{?>

   <div class="alert alert-danger my-3"><?php echo $_SESSION['error']?></div>
   <?php
    unset($_SESSION['error']);
 
}
 ?> 

 </div>
<div class="container shadow p-3 mb-5 bg-white rounded">
<div class="row">

<div class="col-md-3">
<a href="index.php" class="btn btn-primary">Add New Employee</a>
</div>
</div>

</div>

<div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar ">
<table class="table  table table-bordered table-striped mb-0" >
<tr>

<th >Employee Id</th>
<th >Employee Name</th>
<th >Date Of Birth</th>
<th >Date Of Joining</th>
<th >Edit</th>
<th >Delete</th>



</tr>


<?php  while($row=mysqli_fetch_assoc($result)){?>
<tr>
<td ><?php echo $row['emp_id'] ?></td>
<td ><?php echo $row['emp_name'] ?></td>
<td><?php echo $row['date_of_birth'] ?></td>
<td><?php echo $row['date_of_joining'] ?></td>
<td><a href="empEditForm.php?id=<?php echo  $row['emp_id']?>">Edit</a></td>
<td><a href="empDeleteForm.php?id=<?php echo  $row['emp_id']?>">Delete</a></td>
</tr>
<?php } ?>
</table>

 
</div>

</body>
<script src="./jss/jquery-3.6.0.min.js"></script>
<script src="./jss/bootstrap.min.js"></script>
</html>











