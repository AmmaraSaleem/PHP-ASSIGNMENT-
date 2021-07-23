




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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
     <!-- Bootstrap 5 CSS -->

   <!-- jQuery -->
   <link rel="stylesheet" type="text/css"  href="./css/style.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" />

</head>

<body>
	
<div class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Navbar</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
  </div>
</div>


<!-- <section class="home" id="home">
        <div class="max_width">
            <div class="home_content">
                <div class="text-1">Hello, My Name is</div>
                <div class="text-2">Ammara Saleem</div>
                <div class="text-3">And I'm a <span>Web Developer...</span></div>
                <a href="#">Hire me</a>
            </div>
        </div>

    </section> -->






<div class="container-fluid   ">
    <div class="row ">
      <div class="col-3" >
<!-- <div style="border:1px solid black; ">
<nav class='animated bounceInDown bg-dark'>
	   <ul>
		<li><a href='#profile'>Profile</a></li>
		<li><a href='#message'>Messages</a></li>
		<li class='sub-menu'><a href='#settings'>Settings<div class='fa fa-caret-down right'></div></a>
			<ul>
				<li><a href='#settings'>Account</a></li>
				<li><a href='#settings'>Profile</a></li>
				<li><a href='#settings'>Secruity & Privacy</a></li>
				<li><a href='#settings'>Password</a></li>
				<li><a href='#settings'>Notification</a></li>
			</ul>
		</li>
		<li class='sub-menu'><a href='#message'>Help<div class='fa fa-caret-down right'></div></a>
			<ul>
				<li><a href='#settings'>FAQ's</a></li>
				<li><a href='#settings'>Submit a Ticket</a></li>
				<li><a href='#settings'>Network Status</a></li>
			</ul>
		</li>
		<li><a href='#message'>Logout</a></li>
	  </ul>
     </nav>
</div> -->
	  
	  
<div class="w3-sidebar w3-light-grey w3-bar-block " style="width:25%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>


	  
      </div>
 

      <div class="col-9">


        
  <div class="jumbotron  ">
  <h1>DATABASE RECORD</h1>
 
</div>


    
        <div class="row my-5">
        <div class="card" >
  <img class="card-img-top" src="../images/icon.png" alt="Card image">
  <div class="card-body">
    <a href="users.php" class="btn btn-primary btn-block">USERS</a>
  </div>
</div>
            <div class=" col-7 "> 
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
                        </div>



        </div>
            
          
      </div>


    </div>
</div>




</body>
<script src="script.js"></script>
<script src="event.js"></script>
<script src="jss/jquery-3.6.0.min.js"></script>
<script src="jss/bootstrap.min.js"></script>
<script src="/path/to/cdn/jquery.slim.min.js"></script>
<script src="/path/to/cdn/bootstrap.min.js"></script>
</html>