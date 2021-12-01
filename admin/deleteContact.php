
<?php
if(isset($_GET['delete_message_ref'])){
      include('dbcon.php');
      $id=$_GET['delete_message_ref'];
      $query = "DELETE FROM contact where contact_id='$id'";
      $result = mysqli_query($con, $query);     
     if($result==1){
       echo"<script>window.location = 'viewContact.php';</script>";
     }
      else{
        echo"<script>window.location = 'viewContact.php';</script>";
      }
  }
?>
