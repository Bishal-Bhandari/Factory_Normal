<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<?php
include('dbcon.php');
                      $getid=$_GET['edit_post_ref'];
                      $query = "SELECT *FROM blog_post where blog_id='$getid'";
                      $result = mysqli_query($con, $query);
                      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $id=$row['blog_id'];
                        $img=$row['blog_img'];
                        $size=$row['size'];
                        $color=$row['color'];
                        $typeof=$row['typeof'];
                        $long=$row['blog_long_des'];


                        	 echo"<div class='container'>";
							  echo"<h2>Edit Article</h2>";
							  echo"<form action='updateBlog_1.php' method='POST' enctype='multipart/form-data'>";
							  echo"<div class='form-group'>";
							      echo"<label for='id'>Blog ID: $id</label>";
							  echo "<input type='hidden' value='$id' name='id'>";
							      echo"</div>";
							    echo"<div class='form-group'>";
							      echo"<label for='image'>Image:</label>";
							      echo"<input type='file'  placeholder='Choose Image' name='image' style='width: 100%; margin: 5px 0px; padding:2px 0px;'>";
							    echo"</div>";
							    echo"<div class='form-group'>";
							     echo" <label for='size'>Garment Size</label>";
							      echo"<input type='text' name='size' value='$size' style='width: 100%; margin: 5px 0px; padding:2px 0px;>";
							    echo"</div>";
							    echo"<div class='form-group'>";
							      echo"<label for='color'>Garment Color</label>";
							      echo"<input type='text' name='color' value='$color' style='width: 100%; margin: 5px 0px; padding:2px 0px;'>";
							    echo"</div>";
							    echo"<div class='form-group'>";
							      echo"<label for='typeof'>Garment Type</label>";
							      echo"<input type='text' name='typeof' value='$typeof' style='width: 100%; margin: 5px 0px; padding:2px 0px;'>";
							    echo"</div>";
							    echo"<div class='form-group'>";
							    	echo"<label for='long'>Product Full Description:</label>";
							    echo"<textarea  rows='5'  name='long' value='$long' style='width: 100%; margin: 5px 0px; padding:2px 0px;'>$long</textarea>";
							    echo"</div>";
							  echo"<button type='submit' class='btn btn-primary btn-block btn-large' name='update'>Update</button>";
							  echo"</form>";
							echo"</div>";
                        ?>

<?php
include('includes/footer.php');
?>