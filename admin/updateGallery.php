<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<?php
include('dbcon.php');
                      $getid=$_GET['edit_gallery_ref'];
                      $query = "SELECT *FROM gallery_img where img_id='$getid'";
                      $result = mysqli_query($con, $query);
                      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                $id=$row['img_id'];
                                $img=$row['img_src'];
                                $alt=$row['img_alt'];


                        	 echo"<div class='container'>";
							  echo"<h2>Edit Gallery</h2>";
							  echo"<form action='updateGallery_1.php' method='POST' enctype='multipart/form-data'>";
							  echo"<div class='form-group'>";
							      echo"<label for='id'>Image ID: $id</label>";
							  echo "<input type='hidden' value='$id' name='id'>";
							      echo"</div>";
							    echo"<div class='form-group'>";
							      echo"<label for='image'>File Name:</label>";
							      echo"<input type='file'  placeholder='Choose File' name='image' style='width: 100%; margin: 5px 0px; padding:2px 0px;'>";
							    echo"</div>";
							    echo"<div class='form-group'>";
							     echo" <label for='alt'>Alternative Name</label>";
							     echo"<input type='text' name='image_text' value='$alt' style='width: 100%; margin: 5px 0px; padding:2px 0px;'>";
							    echo"</div>";
							  echo"<button type='submit' class='btn btn-primary btn-block btn-large' name='update'>Update</button>";
							  echo"</form>";
							echo"</div>";
                        ?>


<?php
include('includes/footer.php');
?>