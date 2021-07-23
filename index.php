<!DOCTYPE html>
<html>
<head>
  <title>Home page</title>
  <script src="https://kit.fontawesome.com/7c92b2459d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css"  href="./css/style.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
  <div class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">RECORDS</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="login_form.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
  <!--Header-->
  <div class="jumbotron  py-3">
    <h1>DATABASE RECORD</h1>

  </div>

  <div class="container shadow p-3">
    <div class="row">
      <div class="col-md-12">
        <h2 class="heading">Employees Record</h2>
      </div>

    </div>

  </div>


  <form action="addemployees.php" method="POST" class="px-5 py-5 mx-auto d-block mb-5 col-9 my-5 rounded  " style="border:1px solid black">
   <fieldset >
     <legend></legend> 
     <div class="form-group">
      <label for="empname">Employee Name:</label>
      <input type="text" class="form-control" placeholder="Enter employee name" id="empname" name="empname">
    </div>


    <div class="form-group">
      <label for="dateofbirth">Date OF Birth:</label>
      <input type="text" class="form-control" placeholder="Enter date of birth" id="dateofbirth" name="dateofbirth">
    </div>
    <div class="form-group">
      <label for="dateofjoining">Date OF Joining:</label>
      <input type="text" class="form-control" placeholder="Enter date of joining" id="dateofjoining" name="dateofjoining">
    </div>

<button type="submit" class="btn btn-primary btn-block ">Submit</button>
  </fieldset>
</form>

</div>

</div>
</div>
</body>
<script src="./jss/jquery-3.6.0.min.js"></script>
<script src="./jss/bootstrap.min.js"></script>
</html>