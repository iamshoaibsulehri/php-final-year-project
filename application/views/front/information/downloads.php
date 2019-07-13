<div class="container pt-50 pb-70">
    
<div class="row mt-60">
    <div class="col-md-12">
<div class="esc-heading small-border text-center">
                <h3 class="border" style="border-bottom:1px solid black; font-weight:bold; font-size: 32px;">Download Useful links</h3>
                
              </div>
            </div>
</div><br><br>
<div class="col-md-12">
          <?php    
          $detail = $this->db->get('uploads',  array('upload_id' =>2))->result_array();
          foreach($detail as $det)
          {
          ?>
<a href="<?php echo base_url()?>uploads/d_files/<?php echo $det['up_prospect']?>">
         <div class="col-sm-12 col-md-3">
          <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
              <img src="<?php echo base_url()?>templates/front/images/download/prospec.png" style="width:80px; border-radius:15px" class=" font-36 mb-10 text-theme-colored2">
              <h4>Prospectus</h4>
             <h6 class="text-gray">Preview & Download</h6>
            </div>
          </div>
          </a>
          <a href="<?php echo base_url()?>uploads/d_files/<?php echo $det['up_fac_app']?>">  
           <div class="col-sm-12 col-md-3">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
            <img src="<?php echo base_url()?>templates/front/images/download/admin.png" style="width:80px; border-radius:15px" class=" font-36 mb-10 text-theme-colored2">
              <h4>Faculty Application</h4>
              <h6 class="text-gray">Preview & Download</h6>
            </div>
          </div>
          </a>
          <a href="<?php echo base_url()?>uploads/d_files/<?php echo $det['up_admin_form']?>">
           <div class="col-sm-12 col-md-3">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
            <img src="<?php echo base_url()?>templates/front/images/download/fclty.png" style="width:111px; border-radius:15px" class=" font-36 mb-10 text-theme-colored2">
              <h4>Administration Form</h4>
              <h6 class="text-gray">Preview & Download</h6>
            </div>
          </div>
          </a>
          <a href="<?php echo base_url()?>uploads/d_files/<?php echo $det['up_app_form']?>">  
           <div class="col-sm-12 col-md-3">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
            <img src="<?php echo base_url()?>templates/front/images/download/form1.png" style="width:64px; border-radius:15px" class=" font-36 mb-10 text-theme-colored2">
              <h4>Application Form</h4>
              <h6 class="text-gray">Preview & Download</h6>
            </div>
          </div>
          </a>
         


<?php
          }
          ?>
        </div>

     
        </div>