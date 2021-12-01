<?php
session_start();
  // Create database connection
//   $db = mysqli_connect("localhost", "root", "admin", "factory_ra");
include('dbcon.php');

  // Initialize message variable
//   $msg = "";;

  // If upload button is clicked ...
  if (isset($_POST['update'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
      $id = mysqli_real_escape_string($con, $_POST['id']);
      $size = mysqli_real_escape_string($con, $_POST['size']);
      $color = mysqli_real_escape_string($con, $_POST['color']);
      $typeof = mysqli_real_escape_string($con, $_POST['typeof']);
      $long = mysqli_real_escape_string($con, $_POST['long']);
  	// image file directory
  	$target = "../img/product_img/".basename($image);

    $sql="UPDATE blog_post SET blog_img='$image', size='$size', color='$color', typeof='$typeof', blog_long_des='$long' WHERE blog_id=$id";
       
      // execute query
  	mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
//   $result = mysqli_query($db, "SELECT * FROM gallery_img");
  header('location:viewBlog.php');
?>