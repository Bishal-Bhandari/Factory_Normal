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
echo"<th>Name</th>";
echo"<th>Email</th>";
echo"<th>Phone</th>";
echo"<th>Message</th>";
echo"<th>Operation</th>";
echo"</tr>";

include('dbcon.php');



                                $query = "SELECT *FROM contact ORDER BY contact_id DESC";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <20 ; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $id=$row['contact_id'];
                                $name=$row['fname'];
                                $email=$row['email'];
                                $phone=$row['phone'];
                                $message=$row['Cmessage'];

								echo"<tr>";
								echo"<td><h5>$name</h5></td>";
								echo"<td><h5>$email</h5></td>";
								echo"<td><h5>$phone</h5></td>";
								echo"<td><p>$message</h5></p>";
								echo"<td><a href='deleteContact.php?delete_message_ref=$id' class='btn btn-danger' onclick='myFunction($id); return false;' role='button'>Delete</a></td>";
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
    window.location.href = "deleteContact.php?delete_message_ref="+id;
  } else {
    window.location.href = "viewContact.php";
  }
}
</script>