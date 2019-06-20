<?php
foreach($about_detail as $detail)
{
  
    ?>
<section class="inner-header divider layer-overlay overlay-theme-colored-7" style=" background-image: url(<?php echo base_url()?>uploads/pages/<?php echo $detail['page_photo']?>);">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36"><?php echo $detail['page_title']?></h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">About </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section id="faculty-description" >
  <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
        <div class="wpb_wrapper">
			<p style="text-align: justify;font-size: 15px;">
            <?php echo $detail['page_description']?>
             </p>
		</div>
       </div>
  </div>

</section>
<?php
}
     
?>



<section class="parallax layer-overlay overlay-theme-colored-9" style="background-image: url(<?php echo base_url()?>templates/front/images/bg/bg1.jpg");background-position: 50% 23px;" data-parallax-ratio="0.4">
      <div class="container pt-90 pb-90">
        <div class="section-content">
          <div class="row">
          <?php $data1 = $this->db->get_where('home_settings' , array('s_id'=>2))->result_array();
    foreach ($data1 as $data)
    {
    ?>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
              <div class="funfact text-center">
              <i class="pe-7s-smile mb-20 text-theme-colored2"></i>
                <div class="odometer-animate-number text-white font-38 font-weight-400 "  data-theme="minimal"><?php echo $data['s_content']?></div>
                <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                <h5 class="text-white text-uppercase mb-0">Happy Students</h5>
              </div>
            </div>
            <?php
    }
    ?>
            <?php $data1 = $this->db->get_where('home_settings' , array('s_id'=>3))->result_array();
    foreach ($data1 as $data)
    {
    ?>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
              <div class="funfact text-center">
              <i class="pe-7s-notebook mb-20 text-theme-colored2"></i>
                <div class="odometer-animate-number text-white font-38 font-weight-400 " data-theme="minimal"><?php echo $data['s_content']?></div>
                <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                <h5 class="text-white text-uppercase mb-0">Approved Courses</h5>
              </div>
            </div>
            <?php
    }
    ?>
           <?php $data1 = $this->db->get_where('home_settings' , array('s_id'=>4))->result_array();
    foreach ($data1 as $data)
    {
    ?>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
              <div class="funfact text-center">
              <i class="pe-7s-users mb-20 text-theme-colored2"></i>
                <div class="odometer-animate-number text-white font-38 font-weight-400 "  data-theme="minimal"><?php echo $data['s_content']?></div>
                <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                <h5 class="text-white text-uppercase mb-0">Certified Teachers</h5>
              </div>
            </div>
            <?php
    }
    ?>
            <?php $data1 = $this->db->get_where('home_settings' , array('s_id'=>5))->result_array();
    foreach ($data1 as $data)
    {
    ?>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
              <div class="funfact text-center">
              
              <i class="pe-7s-study mb-20 text-theme-colored2"></i>
                <div class="odometer-animate-number text-white font-38 font-weight-400 " data-theme="minimal"><?php echo $data['s_content']?></div>
                <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                <h5 class="text-white text-uppercase mb-0">Graduate Students</h5>
              </div>
            </div>
            <?php
    }
    ?>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-silver-deep">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="owl-carousel-2col owl-theme owl-carousel boxed testimonials" data-dots="true">
            <?php 
            $testimonial = $this->db->get('testimonial')->result_array();
            foreach($testimonial as $teach)
            {
            ?>
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="img-circle" alt="" src="<?php echo base_url()?>uploads/testimonial/<?php echo $teach['t_photo']?>"></div>
                  <i class="fa fa-quote-right text-theme-colored2 font-24 mt-20"></i>
                  <div class="content pt-10">
                    <p class="lead font-weight-400 font-16 mb-20"><?php echo $teach['t_description']?></p>
                    <h4 class="author text-theme-colored2 mb-5"><?php echo $teach['t_name']?></h4>
                    <h5 class="title text-gray mt-0 mb-15"><?php echo $teach['t_desig']?></h5>
                  </div>
                </div>
              </div>
              <?php 
            }
            ?>
          </div>
        </div>
      </div>
    </section>

