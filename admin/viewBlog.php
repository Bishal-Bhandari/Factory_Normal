<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<?php
echo"<div class='container'>";
echo"<h4>All the Product's Post</h4>";
echo"<div class='row'>";
echo"<div class='col-lg-12'>";
echo"<table>";
echo"<tr>";
echo"<th>Image</th>";
echo"<th>Size</th>";
echo"<th>Color</th>";
echo"<th>Type of Garment</th>";
echo"<th>Description</th>";
echo"<th>Operation</th>";
echo"</tr>";

include('dbcon.php');



                                $query = "SELECT *FROM blog_post ORDER BY blog_id DESC";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <$row_cnt ; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $id=$row['blog_id'];
                                $img=$row['blog_img'];
                                $size=$row['size'];
                                $color=$row['color'];
                                $typeof=$row['typeof'];
                                $long=$row['blog_long_des'];

								echo"<tr>";
								echo"<td><div class='gal-img-wrap'><img src='../img/product_img/$img' width='100%'></div></td>";
								echo"<td><h5>$size</h5></td>";
								echo"<td><h5>$color</h5></td>";
								echo"<td><h5>$typeof</h5></td>";
								echo"<td><p>$long</h5></p>";
								echo"<td><a href='updateBlog.php?edit_post_ref=$id' class='btn btn-info'  role='button'>Edit</a><br><br>
								<a href='deleteBlog.php?delete_post_ref=$id' class='btn btn-danger' onclick='myFunction($id); return false;' role='button'>Delete</a></td>";
								echo"</tr>";
								
											  }
								echo"</table>";
								echo"</div>";

?>
<?php
include('includes/footer.php');
?>
<script type="text/javascript">
	function myFunction(id) {
	var r = confirm("Are you sure you want to delete?");
  if (r == true) {
    window.location.href = "deleteBlog.php?delete_post_ref="+id;
  } else {
    window.location.href = "viewBlog.php";
  }
}
</script>