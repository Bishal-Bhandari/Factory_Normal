<?php
$phptitle="Detail";
?>
<?php 
include('include/head.php');
include('include/navbar.php');
// include('include/slider.php');
?>

<?php
//  <!-- Portfolio Grid -->
 echo"<section class='bg-light page-section' id='portfolio'>";
     echo"<div class='container'>";
         echo"<div class='row'>";
             echo"<div class='col-lg-12 text-center'>";
                 echo"<h2 class='section-heading text-uppercase'>Product Details</h2>";
                 echo"<h3 class='section-subheading text-muted'>Click product image to know more.</h3>";
             echo"</div>";
         echo"</div>";
         echo"<div class='row'>";
include('admin/dbcon.php');



                                $query = "SELECT *FROM blog_post ORDER BY blog_id DESC";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <$row_cnt ; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $id=$row['blog_id'];
                                $img=$row['blog_img'];
                                $color=$row['color'];
                                $typeof=$row['typeof'];

                                
                                echo"<div class='col-md-4 col-sm-6 portfolio-item'>";
                                    echo"<a class='portfolio-link' href='fulldetails.php?fuldetail_ref=$id'>";
                                        echo"<div class='portfolio-hover'>";
                                           echo"<div class='portfolio-hover-content'>";
                                                echo"<i class='fas fa-plus fa-3x'></i>";
                                            echo"</div>";
                                        echo"</div>";
                                        echo"<img class='img-fluid' src='img/product_img/$img' alt='Product Image'>";
                                    echo"</a>";
                                    echo"<div class='portfolio-caption'>";
                                    echo"<h4>$typeof</h4>";
                                    echo"<p class='text-muted'>$color</p>";
                                    echo"</div>";
                                    echo"</div>";
                                    
                                }
                                echo"</div>";
          echo"</div>";
        echo"</section>";



?>




  <!-- footer -->
<?php 
include('include/footer.php');
 ?>