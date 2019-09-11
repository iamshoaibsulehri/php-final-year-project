<div class="bg" style=" background-image: url(<?php echo base_url()?>templates/front/images/bg/login.jpg);">
<div class="container login-container" >
<?php
$message = $this->session->flashdata('message_name');
if($message != ""){
            ?>
        <div class="alert alert-success" style="color:red;">
  <?php echo $message; ?>
</div>
<?php
}
?>
 <div class="container position-relative p-0 " style="max-width: 570px;" alt="">
    <h3 class="bg-theme-colored2 p-15 pt-10 mt-0 mb-0 text-white">Registration Form</h3>
    <div class="section-content bg-white p-30">
      <div class="row">
        <div class="col-md-12">
          <!-- Register Form Starts -->
          <form id="registration" name="reservation_form" class="reservation-form mb-0 bg-silver-deep p-30" method="POST"  enctype="multipart/form-data">
            <h3 class="text-center mt-0 mb-30">Register account!</h3>
            <div class="row">
              
            <div class="col-sm-12">
                <div class="form-group mb-30 required">
                  <input type="text" placeholder="Enter Your Name" id="name" name="name" class="form-control required "  title="This Field is required" >
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-30 required">
                  <input type="email" placeholder="Enter A Valid Email" id="email" name="email" class="form-control required" title="This Field is required">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-30 required">
              <select id="cc_type" class="form-control required" data-val="true"   id="category" name="category">
                          <option value="">--- Select ---</option>
                          <option value="1">Graduate </option>
                          <option value="2">UnderGraduate</option>
                        </select>
                        </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input type="number" maxlength="11"  minlength="11" placeholder="Enter A Valid Phone Number" id="contact_number" name="phone" class="form-control required" title="Please Enter 11 digit phone number" >
                </div>
              </div>
             
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input placeholder="Enter Your Password" id="password" name="password" class="form-control required " type="password">
                </div>
              </div>
             
              <div class="col-sm-12">
                <div class="form-group mb-0 mt-0">
                  <input name="form_botcheck" class="form-control" value="" type="hidden">
                  <button type="submit" class="btn btn-colored btn-block btn-theme-colored2 text-white btn-lg btn-flat" >Sign Up</button>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mt-15 text-center">
                  <p>Already have an account? <a href="<?php echo base_url()?>home/user_login" class="text-theme-colored2 text-underline">Sign in Here</a> </p>
                </div>
              </div>
            </div>
          </form>

         
        </div>
      </div>
    </div>

  </div>
        </form>
        </div>



<!-- 
            <div class="row">
                <div class="col-md-6 login-form-1">
                <img src="<?php echo base_url()?>templates/front/img/bg/login.png" style="max-width:100%" alt="">
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Register Now</h3>
                    <form action="" method="POST"  enctype="multipart/form-data">
                    <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit btn btn-primary" value="Register" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">already a member? Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->