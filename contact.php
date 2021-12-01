<?php
$phptitle="Contact Us";
?>
<?php

if (isset($_POST['send'])){

include('admin/dbcon.php');
// removes backslashes
  $name= stripcslashes($_REQUEST['name']);
  $name = mysqli_real_escape_string($con,$name);
  $email= stripcslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($con,$email);
  $phone= stripcslashes($_REQUEST['phone']);
  $phone = mysqli_real_escape_string($con,$phone);
  $Cmessage= stripcslashes($_REQUEST['Cmessage']);
  $Cmessage = mysqli_real_escape_string($con,$Cmessage);

  $query="INSERT INTO contact (fname, email, phone, Cmessage) VALUES ('$name','$email','$phone','$Cmessage')";
 $result = mysqli_query($con,$query) or die(mysql_error());
  
  }
?> 
<?php 
include('include/head.php');
include('include/navbar.php');
?>

 <!-- Contact -->
 <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1799.6058739357406!2d85.2993370641849!3d27.75566914193597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2snp!4v1563593312799!5m2!1sen!2snp"
               width="100%" height="440px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-6">

            <div class="form">
              <form action="contact.php" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Full Name*"
                      data-rule="minlen:4" data-msg="Please enter full name." />
                    <div class="validation text-white"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email*"
                      data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation text-white"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="phone" class="form-control" name="phone" id="phone" placeholder="Phone Number*"
                    data-rule="minlen:4" data-msg="Please enter valid phone number." />
                  <div class="validation text-white"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="Cmessage" rows="5" data-rule="required"
                    data-msg="Please write your message.*" placeholder="Message"></textarea>
                  <div class="validation text-white"></div>
                </div>
                <div class="text-center"><button class="btn btn-primary" type="submit" name="send" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>
      </div>
  </section>
   <!-- footer -->
<?php 
include('include/footer.php');
 ?>