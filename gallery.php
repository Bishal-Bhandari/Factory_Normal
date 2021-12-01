<?php
$phptitle="Gallery";
?>
<?php 
include('include/head.php');
include('include/navbar.php');
// include('include/slider.php');
?>

<div class="container gallery-container">
    <h1>Gallery</h1>
    <div class="tz-gallery">
        <div class="row">
<?php
    include('admin/dbcon.php');


                                $query = "SELECT *FROM gallery_img ORDER BY img_id DESC";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <$row_cnt; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $id=$row['img_id'];
                                $src=$row['img_src'];
                                $alt=$row['img_alt'];

                                echo"<div class='col-sm-6 col-md-4'>";
                                echo"<a class='lightbox' href='img/gallery/$src'>";
                                echo"<img src='img/gallery/$src' alt='$alt'>";
                                echo"</a>";
                                echo"</div>";
                                }
    ?>
        </div>
    </div>
</div>



  <!-- footer -->
<?php 
include('include/footer.php');
?>