<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>

<?php
echo"<div class='container-fluid'>";
               echo"<div class='row'>";
               echo"<div class='col-lg-12'>";
               echo"<table>";
               echo"<tr>";
               echo"<th>Image</th>";
               echo"<th>Image Name</th>";
               echo"<th>Operation</th>";
               echo"</tr>";

                  include('dbcon.php');


                                $query = "SELECT *FROM gallery_img ORDER BY img_id DESC";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <$row_cnt; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $id=$row['img_id'];
                                $src=$row['img_src'];
                                $alt=$row['img_alt'];

                
                  echo"<tr>";
                  echo"<td><div class='gal-img-wrap'><img src='../img/gallery/$src' alt='$alt' width='100%'></div></td>";
                  echo"<td><h5>$alt</h5></td>";
                  echo"<td><a href='updateGallery.php?edit_gallery_ref=$id' class='btn btn-info' role='button'>Edit</a><br><br>
                  <a href='deleteGallery.php?delete_gallery_ref=$id' class='btn btn-danger' onclick='myFunction($id); return false;'  role='button' width='100%'>Delete</a></td>";
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
    window.location.href = "deleteGallery.php?delete_gallery_ref="+id;
  } else {
    window.location.href = "viewGallery.php";
  }
}
</script>