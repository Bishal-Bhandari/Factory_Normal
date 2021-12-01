<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<?php
echo"<div class='container-fluid'>";
echo"<h4>All Account Name</h4>";
echo"<div class='row'>";
echo"<div class='col-lg-12'>";
echo"<table>";
echo"<tr>";
echo"<th>Email ID Admin</th>";
echo"<th>Password</th>";
echo"<th>Operation</th>";
echo"</tr>";
                  include('dbcon.php');


                                $query = "SELECT *FROM admin_login";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <$row_cnt ; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $id=$row['admin_id'];
                                $email=$row['admin_email'];
                                $pwd=$row['admin_password'];

                                echo"<tr>";
                                echo"<td><h5>$email</h5></td>";
                                echo"<td><h5>$pwd</h5></td>";
                                echo"<td><a href='updateAccount.php?edit_account_ref=$id' class='btn btn-info' role='button'>Edit</a><br><br>
                                <a href='deleteAccount.php?delete_account_ref=$id' class='btn btn-danger' onclick='myFunction($id); return false;'  role='button'>Delete</a></td>";
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
    window.location.href = "deleteAccount.php?delete_menu_ref="+id;
  } else {
    window.location.href = "viewAccount.php";
  }
}
</script>