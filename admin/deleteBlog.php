
<?php
if(isset($_GET['delete_post_ref'])){
      include('dbcon.php');
      $id=$_GET['delete_post_ref'];
      $query = "DELETE FROM blog_post where blog_id='$id'";
      $result = mysqli_query($con, $query);     
     if($result==1){
      // header('location:viewBlog.php?res_fin=deleted');
       echo"<script>window.location = 'viewBlog.php';</script>";
     }
      else{
        //header('location:viewBlog.php?m=fail');
        echo"<script>window.location = 'viewBlog.php';</script>";
      }
  }
?>
