
<?php
$message = $this->session->flashdata('message_name');
if($message != ""){
            ?>
        <div class="alert alert-success" style="color:red; text-align:center; font-weight:bold;">
  <?php echo $message; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<?php
}
?>


<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" style="background-image: url(<?php echo base_url()?>templates/front/images/course/backgroundtop.png);">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Job Details 1</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Current Page</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
    <h2 style="text-align:center; padding-bottom: 27px;">Download Form / Apply Online</h2>

        <div class="row">
          <div class="col-md-6" style="box-shadow: 0 0 0 2px #eee; padding: 23px 0 20px 20px;">
          <ul class="list theme-colored">
          <h2>Faculty Job Form</h2>
          <li>Dowload Administrative Job Form.</li>
          <li>Fill the form accordingly.</li>
          <li>Send it to HR at USKT.</li>
            </ul>
            <?php
            $data = $this->db->get('uploads')->result_array();
            foreach($data as $dt)
            {?>
            <div class="center" style="text-align:center;">
            <a href="<?php echo base_url()?>uploads/d_files/<?php echo $dt['up_fac_app']?>"> 
            <button type=""  class="btn btn-info"> Download Form</button>
            </a>
                <?php
            }
            ?>
            </div>
          </div>
          <div class="col-md-6" style="box-shadow: 0 0 0 2px #eee; padding: 20px 0 20px 20px;">
          <h2>Administrative Form</h2>
            <div class="icon-box mb-0 p-0">
           
            <ul class="list theme-colored">
            <li>Dowload Faculty Job Form.</li>
            <li>Fill the form accordingly.</li>
           <li> Send it to HR at USKT</li>
            </ul>
            <?php
            $data = $this->db->get('uploads')->result_array();
            foreach($data as $dt)
            {?>
            <div class="center" style="text-align:center;">
            <a href="<?php echo base_url()?>uploads/d_files/<?php echo $dt['up_admin_form']?>">
            
           <button type="" class="btn btn-info"> Download Form</button>
            
            </a>
                <?php
            }
            ?>
            </div>
            </div>
          
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Job Apply Form -->
    <section class="divider parallax layer-overlay overlay-white-8"  style="background-image: url(<?php echo base_url()?>templates/front/images/course/background.jpg); background-position:100%;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 bg-lightest-transparent p-30 pt-10">
            <h3 class="text-center text-theme-colored mb-20">Apply Now</h3>
            <form id="job_apply_form" name="job_apply_form"  method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Name <small>*</small></label>
                    <input name="name" type="text" placeholder="Enter Name" required="" class="form-control" aria-required="true">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input name="email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                  </div>
                </div>
              </div>
              <div class="row">               
                <div class="col-sm-6">
                  <div class="form-group required">
                    <label required="" >Gender <small>*</small></label>
                    <select id="cc_type" name="gender" class="form-control required" aria-required="true">
                    <option value="">Choose Option</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Job Post <small>*</small></label>
                    <select name="f_post" class="form-control required" aria-required="true">
                    <option value="">Choose Option</option>
                      <option value="Lecturer">Lecturer</option>
                      <option value="Administration">Administration</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Message <small>*</small></label>
                <textarea id="form_message" name="form_message" class="form-control required" style="height:114px" placeholder="Your cover letter/message sent to the employer" ></textarea>
              </div>
              <div class="form-group">
                <label>C/V Upload</label>
                <input type="file" name="cv" class="file" />
                <small>Maximum upload file size: 12 MB</small>
              </div>
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
              </div>
            </form>
       
          </div>
        </div>
      </div>
    </section>
  </div>

  <script>
  $('.alert').alert()
  </script>