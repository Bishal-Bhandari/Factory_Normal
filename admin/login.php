<?php
session_start();

?>
<!DOCTYPE>
<html>
  <head>
    <title>Login Form</title>
<link rel="stylesheet" href="css/login.css" media="all" />

  </head>
<body>
<div class="login">
<h2 style="color:white; text-align:center;"></h2>

<h2 style="color:white; text-align:center;"></h2>

  <h1>Admin Login</h1>
    <form method="post" action="login.php">
      <input type="email" name="email" placeholder="E-mail" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Login</button>
    </form>
</div>


</body>
</html>



<?php

include("dbcon.php");

  if(isset($_POST['login'])){

    $email = stripslashes($_POST['email']);
    $pass = stripslashes($_POST['password']);

    $email = mysqli_real_escape_string($con,$email);
    $pass = mysqli_real_escape_string($con,$pass);

  $sel_user = "SELECT * FROM `admin_login` WHERE `admin_email`='$email' AND `admin_password`='$pass'";

  $run_user = mysqli_query($con, $sel_user);

   $check_user = mysqli_num_rows($run_user);

  if($check_user==1){

  $_SESSION['admin_email']=$email;

  echo "<script>window.open('index.php?logged_in=You have successfully Logged in!!!','_self')</script>";

  }
  else 
  {

  echo "<script>window.open('login.php?logged_in=Error in login!!!','_self')</script>";

  }

  }

?>