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
	  $image_text = mysqli_real_escape_string($con, $_POST['image_text']);
	  $id = mysqli_real_escape_string($con, $_POST['id']);
	  echo"$image_text";
  	// image file directory
  	$target = "../img/gallery/".basename($image);

  	// $sql = "UPDATE INTO gallery_img (img_src, img_alt) VALUES ('$image', '$image_text') WHERE img_id=$id";
    $sql="UPDATE gallery_img SET img_src='$image', img_alt='$image_text' WHERE img_id=$id";
       
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