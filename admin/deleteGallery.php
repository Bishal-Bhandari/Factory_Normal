<?php
if(isset($_GET['delete_gallery_ref'])){
      include('dbcon.php');
      $id=$_GET['delete_gallery_ref'];
      $query = "DELETE FROM gallery_img where img_id='$id'";
      $result = mysqli_query($con, $query);     
     if($result==1){
      // header('location:viewBlog.php?res_fin=deleted');
       echo"<script>window.location = 'viewGallery.php';</script>";
     }
      else{
        //header('location:viewBlog.php?m=fail');
        echo"<script>window.location = 'viewGallery.php';</script>";
      }
  }
?>
