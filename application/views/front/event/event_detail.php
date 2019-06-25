<div class="main-content" data-children-count="5">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" style="background-image: url(<?php echo base_url()?>templates/front/images/bg/event.jpg);">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Events</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Events</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

  
          <?php 
            foreach($event_details as $detail)
            {
            ?>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul>
              <li>
                <h5>Topics:</h5>
                <p><?php echo $detail['event_title'] ?></p>
              </li>
              <li>
                <h5>Host:</h5>
                <p><?php echo $detail['event_title'] ?></p>
              </li>
              <li>
                <h5>Location:</h5>
                <p><?php echo $detail['event_location'] ?></p>
              </li>
              <li>
                <h5>Start Date:</h5>
                <p><?php echo $detail['event_date'] ?></p>
              </li>
              <li>
                <h5>Time:</h5>
                <p><?php echo $detail['event_date'] ?></p>
              </li>
              <li>
                <h5>Website:</h5>
                <p>www.uskt.edu.pk</p>
              </li>
              <li>
                <h5>Share:</h5>
                <div class="styled-icons icon-sm icon-gray icon-circled">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-8">
            <img src="<?php echo base_url() ?>uploads/events/<?php echo $detail['event_photo'] ?>" alt="">
          </div>
        </div>
        <div class="row mt-60">
          <div class="col-md-6">
            <h4 class="mt-0">Event Detail</h4>
            <p><?php echo $detail['event_description'] ?></p>
          </div>
          <div class="col-md-6">
            <blockquote>
              <p>Sitarun Se Aage Jahan Aur B Hain.</p>
              <footer>Mr.<cite title="Source Title">Qaleem Raza</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>
    </section>
<?php
            }
            ?>
    <!-- Section: Registration Form -->
    <section class="divider parallax layer-overlay overlay-white-8" style="background-image: url(<?php echo base_url()?>templates/front/images/bg/teachers.jpg);">
      <div class="container-fluid">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h3 class="title text-theme-colored">Registration Form</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <form id="booking-form" name="booking-form" action="" method="POST" enctype="multipart/form-data" novalidate="novalidate">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" placeholder="Enter Name" name="register_name" required="" class="form-control" aria-required="true" data-kwimpalastatus="alive" data-kwimpalaid="1558123254428-2">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" placeholder="Enter Email" name="register_email" class="form-control" required="" aria-required="true" data-kwimpalastatus="alive" data-kwimpalaid="1558123254428-3">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" placeholder="Enter Phone" name="register_phone" class="form-control" required="" aria-required="true" data-kwimpalastatus="alive" data-kwimpalaid="1558123254428-4">
                  </div>
                </div>
                
                <div class="col-sm-12">
                  <div class="form-group text-center">
                  	<input name="form_botcheck" class="form-control" type="hidden" value="">
                    <button data-loading-text="Please wait..." class="btn btn-dark btn-theme-colored btn-sm btn-block mt-20 pt-10 pb-10" type="submit">Register now</button>
                  </div>
                </div>
              </div>
            </form>
            <!-- Job Form Validation-->
            <script type="text/javascript">
              $("#booking-form").validate({
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
    </section>
  </div>