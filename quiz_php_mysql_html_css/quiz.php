<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quiz-Test your Brain out</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
    
    body { 
    background: url("./images/learn.jpg") no-repeat center/cover; /* #1abc9c Green */
    /* color: #333; */
    opacity: 0.9;
  }
  .panel {
    box-shadow: 0 1rem 1rem -0.7rem rgba(0, 0, 0, 0.9);
  }
  </style>

</head>
<body >

<br>

<div class="container bg-2">
<div class="row">
<div class="col-sm-12">
    <div class="panel panel-danger">
      <div class="panel-heading">Online Quiz - Teat Your Brain with Latest Question Bank</div>
      <div class="panel-body">Already existed user can <strong>Login</strong> and New users can <strong>Signup</strong> with details easily</div>
    </div>
    </div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-sm-6">
  <div class="panel panel-info">
    <div class="panel-heading"><h2>Login Form</h2></div>
   <div class="panel-body"> 
   
   <!-- Login section -->
   
   <?php
   if(isset($_GET['run']) && $_GET['run']=="failed")
   {
     echo ("<div class='alert alert-warning'>
       <strong>Login Faild!</strong> You have entered wrong email or password.
     </div>");
     }?>

  <form action="signin_sub.php" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="e">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="p">
    </div> 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div> 
  </div>
</div>
<div class="col-sm-6">
<div class="panel panel-info">
    <div class="panel-heading"><h2>Signup Form</h2></div>
    <div class="panel-body">

    <!-- signup section -->
    
    <?php 
    if (isset($_GET['run']) && $_GET['run']=="success")
    {
        echo ("<div class='alert alert-success'>
       <strong>Success!</strong> Your registration successfully Done!!.
     </div>");
        // echo ("Your registration successfully Done!!");
    } 
    ?>
    <br>
  <form role="form"  method="POST" action="signup_sub.php"  enctype="multipart/form-data">
  <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter Your Name" name="n">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="e">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="p">
    </div>
    <div class="form-group">
      <label for="img">Upload Your Image:</label>
      <input type="file" class="form-control" id="img"  name="img">
    </div> 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
  </div>
  </div>
</div>
</div>
</div>  

</body>
</html>