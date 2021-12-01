<?php
$id=$_POST['id'];
    $email=$_POST['email'];
     $pwd=$_POST['pwd'];
    include('dbcon.php');
      if($notice_link==null){
        $query="UPDATE admin_login SET admin_email='$email',admin_password='$pwd' WHERE admin_id=$id";
        
          $result = mysqli_query($con,$query);
  if($result==1){
        header('location:viewAccount.php?fin_res_ref=sucess');
    }
   echo "Error updating record: " . mysqli_error($con);
}
?>