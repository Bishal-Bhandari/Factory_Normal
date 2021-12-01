<?php
$phptitle="Product Detail";
?>
<?php 
include('include/head.php');
include('include/navbar.php');
?>
<!-- full product detail -->
<?php
                echo"<section class='bg-light page-section' id='fulldetail'>";
                    echo"<div class='container'>";
                        echo"<div class='row'>";
                            echo"<div class='col-lg-12 text-center'>";
                                echo"<h2 class='section-heading text-uppercase'>Full Product Details</h2>";
                            echo"</div>";
                        echo"</div>";

                include('admin/dbcon.php');


                                $getid=$_GET['fuldetail_ref'];
                                $query = "SELECT *FROM blog_post where blog_id='$getid'";
                                // $query = "SELECT *FROM blog_post ORDER BY blog_id DESC";
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

                                echo"<div class'row'>";
                                echo"<div class='col-12 col-detatil'>";
                                echo"<figure class='product-full-detail-wrapper'>";
                                echo"<img src='img/product_img/$img' alt='Product image' width='100%'>";
                                echo"</figure>";
                                echo"</div>";
                                echo"</div>";
                                echo"<div class='row'>";
                                echo"<div class='col-12'>";
                                echo"<ul class='list-group'>";
                                echo"<li class='list-group-item d-flex justify-content-between align-items-center'>";
                    echo"<span>Garment avaliable size</span>";
                    echo"<span class='badge badge-primary badge-pill'>$size</span>";
                    echo"</li>";
                    echo"<li class='list-group-item d-flex justify-content-between align-items-center'>";
                    echo"<span>Garment avaliable color</span>";
                    echo"<span class='badge badge-primary badge-pill'>$color</span>";
                    echo" </li>";
                    echo"<li class='list-group-item d-flex justify-content-between align-items-center'>";
                    echo"<span>Garment Type</span>";
                    echo"<span class='badge badge-primary badge-pill'>$typeof</span>";
                    echo"</li>";
                    echo"</ul>";
                    echo"<p class='bg-white border border-0 rounded my-2'>&nbsp;&nbsp;$long</p>";
                    echo"</div>";
                    echo"</div>";
                                }
          echo"</div>";
        echo"</section>";
?>

<?php
	//  <!-- Portfolio Grid -->
	echo"<section class='bg-light page-section' id='portfolio'>";
		echo"<div class='container'>";
			echo"<div class='row'>";
				echo"<div class='col-lg-12 text-center'>";
					echo"<h3 class='section-subheading text-muted'>Our other products.</h3>";
				echo"</div>";
			echo"</div>";
			echo"<div class='row'>";
	include('admin/dbcon.php');



									$query = "SELECT *FROM blog_post ORDER BY blog_id DESC";
									$result = mysqli_query($con, $query);
									$row_cnt = mysqli_num_rows($result);
									for ($i=0; $i <3 ; $i++) { 
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