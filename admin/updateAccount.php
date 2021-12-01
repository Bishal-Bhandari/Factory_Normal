<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<?php
include('dbcon.php');
                      $getid=$_GET['edit_account_ref'];
                      $query = "SELECT *FROM admin_login where admin_id='$getid'";
                      $result = mysqli_query($con, $query);
                      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                $id=$row['admin_id'];
                                $email=$row['admin_email'];
                                $pwd=$row['admin_password'];


                        	 echo"<div class='container'>";
							  echo"<h2>Edit Account</h2>";
							  echo"<form action='updateAccount_1.php' method='POST' enctype='multipart/form-data'>";
							  echo"<div class='form-group'>";
							      echo"<label for='id'>Account ID number: $id</label>";
							  echo "<input type='hidden' value='$id' name='id'>";
							      echo"</div>";
							   echo"<div class='form-group'>";
							     echo" <label for='name'>Email ID</label>";
							      echo"<input type='email' name='email' value='$email' style='width: 100%; margin: 5px 0px; padding:2px 0px;>";
							    echo"</div>";
							    echo"<div class='form-group'>";
							     echo" <label for='link'>Password</label>";
							      echo"<input type='text' name='pwd' value='$pwd' style='width: 100%; margin: 5px 0px; padding:2px 0px;'>";
							    echo"</div>";
							  echo"<button type='submit' class='btn btn-primary btn-block btn-large' name='update'>Update</button>";
							  echo"</form>";
							echo"</div>";
                        ?>
<?php
include('includes/footer.php');
?>