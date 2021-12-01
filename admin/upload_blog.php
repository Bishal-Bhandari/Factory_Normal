<?php
session_start();
  // Create database connection
include('dbcon.php');


  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
      $size = mysqli_real_escape_string($con, $_POST['size']);
      $color = mysqli_real_escape_string($con, $_POST['color']);
      $typeof = mysqli_real_escape_string($con, $_POST['typeof']);
      $long = mysqli_real_escape_string($con, $_POST['long']);

  	// image file directory
  	$target = "../img/product_img/".basename($image);

  	$sql = "INSERT INTO blog_post (blog_img,size,color,typeof,blog_long_des) 
      VALUES ('$image', '$size', '$color', '$typeof', '$long')";
  	// execute query
  	mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  header('location:viewBlog.php');
?>