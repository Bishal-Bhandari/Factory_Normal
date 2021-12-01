<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<div class="container">
  <h2>Add Gallery</h2>
  <form action="upload_gallery.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file"  placeholder="Choose Image" name="image" style="width: 100%; margin: 5px 0px; padding:2px 0px;">
    </div>
    <div class="form-group">
      <label for="name">Alternative Name</label>
      <input type="text"  placeholder="Alternative Name" name="image_text" style="width: 100%; margin: 5px 0px; padding:2px 0px;">
    </div>
  <button type="submit" class="btn btn-primary btn-block btn-large" name="upload">Submit</button>
  </form>
</div>
<?php
include('includes/footer.php');
?>