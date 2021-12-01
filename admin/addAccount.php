<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<div class="container">
  <h2>Add Account</h2>
  <form action="upload_account.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="writer">Add Account:</label>
      <input type="email"  placeholder="Enter a name in valid E-mail formate." name="email" required="required" style="width: 100%; margin: 5px 0px; padding:2px 0px;">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text"  placeholder="Password" name="password" required="required" style="width: 100%; margin: 5px 0px; padding:2px 0px;">
    </div>
  <button type="submit" class="btn btn-primary btn-block btn-large" name="upload">Submit</button>
  </form>
</div>
<?php
include('includes/footer.php');
?>