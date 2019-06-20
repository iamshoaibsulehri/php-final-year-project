
<div class="bg" style=" background-image: url(<?php echo base_url()?>templates/front/images/bg/login.jpg);">
<div class="container login-container" >
<?php
$message = $this->session->flashdata('message_name');
if($message != ""){
            ?>
        <div class="alert alert-success" style="color:red; text-align:center; font-weight:bold;">
  <?php echo $message; ?>
</div>
<?php
}
?>
           
        <form action="" method="POST"  enctype="multipart/form-data">
 <div class="container position-relative p-0 " style="max-width: 570px;" alt="">)
    <h3 class="bg-theme-colored2 p-15 pt-10 mt-0 mb-0 text-white">Login Form</h3>
    <div class="section-content bg-white p-30">
      <div class="row">
        <div class="col-md-12">
          <!-- Register Form Starts -->
          <form id="reservation_form_popup" name="reservation_form" class="reservation-form mb-0 bg-silver-deep p-30" method="post" action="" novalidate="novalidate">
            <h3 class="text-center mt-0 mb-30">login to your registered account!</h3>
            <div class="row">
              
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input placeholder="Enter A Valid Email" id="email" name="email" class="form-control" required="" aria-required="true" type="text">
                </div>
              </div>
             
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input placeholder="Enter Your Password" id="password" name="password" required="" class="form-control" aria-required="true" type="password">
                </div>
              </div>
             
              <div class="col-sm-12">
                <div class="form-group mb-0 mt-0">
                  <input name="form_botcheck" class="form-control" value="" type="hidden">
                  <button type="submit" class="btn btn-colored btn-block btn-theme-colored2 text-white btn-lg btn-flat" data-loading-text="Please wait...">Login Now</button>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mt-15 text-center">
                  <p>Don't have an account? <a href="<?php echo base_url()?>home/user_registration" class="text-theme-colored2 text-underline">Sign up Here</a> </p>
                </div>
              </div>
            </div>
          </form>

          <!-- Appointment Form Validation-->
          <script type="text/javascript">
            $("#popup_appointment_form").validate({
              submitHandler: function(form) {
                var form_btn = $(form).find('button[type="submit"]');
                var form_result_div = '#form-result';
                $(form_result_div).remove();
                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                var form_btn_old_msg = form_btn.html();
                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                $(form).ajaxSubmit({
                  dataType:  'json',
                  success: function(data) {
                    if( data.status == 'true' ) {
                      $(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    $(form_result_div).html(data.message).fadeIn('slow');
                    setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                  }
                });
              }
            });
            THEMEMASCOT.initialize.TM_datePicker();
          </script>
        </div>
      </div>
    </div>

  </div>
        </form>
        </div>



<!-- old     -->
         <!-- <div class="row">
                <div class="col-md-6 login-form-1">
                    
                <img src="<?php echo base_url()?>templates/front/img/bg/login.png" style="max-width:100%" alt="">
                  
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Login</h3>
                    <form action="" method="POST"  enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit btn btn-primary" value="Login" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a><br>
                            <a href="#" class="ForgetPwd" value="Login">Register Now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
