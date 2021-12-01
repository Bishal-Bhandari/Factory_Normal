<?php
session_start();
  // Create database connection
//   $db = mysqli_connect("localhost", "root", "admin", "factory_ra");
include('dbcon.php');

  // Initialize message variable
//   $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($con, $_POST['image_text']);

  	// image file directory
  	$target = "../img/gallery/".basename($image);

  	$sql = "INSERT INTO gallery_img (img_src, img_alt) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
//   $result = mysqli_query($db, "SELECT * FROM gallery_img");
  header('location:viewGallery.php');
?>