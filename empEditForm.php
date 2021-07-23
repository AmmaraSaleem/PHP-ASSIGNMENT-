    <?php
define('DB_SERVER','localhost:330');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','IT');

$db=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


$id=$_GET['id'];
$sql="SELECT * FROM  employees_record where emp_id ='$id'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($result);   

// echo "<pre>";
// print_r($row);
// echo"</pre>";





?>



<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<script src="https://kit.fontawesome.com/7c92b2459d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css"  href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>


<div class="container shadow p-3 mb-5 bg-white rounded">
<div class="row">
<div class="col-md-9">
<h2 class="heading" >Employees</h2>
</div>

</div>

</div>


<form action="editEmp.php" method="POST" class="px-5 mx-auto d-block mb-5 ">
<input type="hidden" name="empId" value="<?php echo $row['emp_id']?>"> 
<div class="form-group">
    <label for="empname">Employee Name:</label>
    <input type="text" class="form-control" placeholder="Enter employee name" id="empname" name="empname" value="<?php echo $row['emp_name']?>">
  </div>
  
  
  <div class="form-group">
    <label for="dateofbirth">Date OF Birth:</label>
    <input type="text" class="form-control" placeholder="Enter date of birth" id="dateofbirth" name="dateofbirth"value="<?php echo $row['date_of_birth']?>">
  </div>
  <div class="form-group">
    <label for="dateofjoining">Date OF Joining:</label>
    <input type="text" class="form-control" placeholder="Enter date of joining" id="dateofjoining" name="dateofjoining"value="<?php echo $row['date_of_joining']?>">
  </div>
  
  <button type="submit" class="btn btn-primary ">Submit</button>
 
</form>
</div>

</div>
</div>
</body>
<script src="./jss/jquery-3.6.0.min.js"></script>
<script src="./jss/bootstrap.min.js"></script>
</html> 