<section class="inner-header divider layer-overlay overlay-theme-colored-7" style=" background-image: url(<?php echo base_url()?>templates/front/images/bg/bg1.jpg);">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36"></h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Contact </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>


<div class="container pt-50 pb-70">
    
<div class="row mt-60">
    <div class="col-md-12">
<div class="esc-heading small-border text-center">
                <h3>Have any Questions?</h3>
              </div>
            </div>
</div><br><br>
<div class="col-md-12">
              
          <div class="col-sm-12 col-md-3">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
              <i class="fa fa-phone font-36 mb-10 text-theme-colored2"></i>
              <h4>Call Us</h4>
              <h6 class="text-gray">Phone:+92-523575518-20</h6>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
              <i class="fa fa-map-marker font-36 mb-10 text-theme-colored2"></i>
              <h4>Address</h4>
              <h6 class="text-gray">1-Km Main Daska Road, Sialkot</h6>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
              <i class="fa fa-envelope font-36 mb-10 text-theme-colored2"></i>
              <h4>Email</h4>
              <h6 class="text-gray">info@uskt.edu.pk </h6>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
              <i class="fa fa-fax font-36 mb-10 text-theme-colored2"></i>
              <h4>Fax</h4>
              <h6 class="text-gray">+92-523575518-20 </h6>
            </div>
          </div>
        </div>
        </div>

<section data-bg-img="images/pattern/p4.png" style="background-image: url(<?php echo base_url()?>templates/front/images/bg/p4.png);"> 
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Contact</span> Us</h2>
            </div>
          </div>
        </div>
        <div class="section-content">          
          <div class="row">
            <div class="col-md-12">
            
              <!-- Contact Form -->
              <form id="contact_form" name="contact_form" class="contact-form-transparent" action="includes/sendmail.php" method="post" novalidate="novalidate">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Name <small>*</small></label>
                      <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="" aria-required="true">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email <small>*</small></label>
                      <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Subject <small>*</small></label>
                      <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject" aria-required="true">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Phone</label>
                      <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Message</label>
                  <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message" aria-required="true"></textarea>
                </div>
                <div class="form-group">
                  <input name="form_botcheck" class="form-control" type="hidden" value="">
                  <button type="submit" class="btn btn-dark btn-theme-colored btn-flat btn-block" data-loading-text="Please wait...">Send your message</button>
                </div>
              </form>
              
              <!-- Contact Form Validation-->
              <script type="text/javascript">
                $("#contact_form").validate({
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
              </script>

            </div>
          </div>
        </div>
      </div>
    </section>