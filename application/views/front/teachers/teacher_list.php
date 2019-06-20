<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7"  style="background-image: url(<?php echo base_url()?>templates/front/images/bg/teachers.jpg);">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Teachers</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Teachers</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Team -->
    <section id="team" class="bg-silver-deep">
      <div class="container">
        <div class="row mtli-row-clearfix">
         
          <?php 
           
           $teacher = $this->db->get('teacher')->result_array();
          
           foreach($teacher as $teach)
           {
           ?>
           <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
              <a href="<?php echo base_url() ?>home/teacher_detail/<?php echo $teach['t_id'] ?>"><img class="img-fullwidth" alt="" src="<?php echo base_url() ?>uploads/teacher/<?php echo $teach['t_photo'] ?>"></a>
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5"></h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0"><?php echo $teach['t_name'] ?></h6>
                <p class="hidden-md"><?php echo $teach['t_description'] ?></p>
              </div>
            </div>
          </div>
          <?php
           }
           ?>
        </div>
      </div>
    </section>

    <section class="parallax layer-overlay overlay-theme-colored-9" style="background-image: url(<?php echo base_url()?>templates/front/images/bg/bg1.jpg");background-position: 50% 23px;" data-parallax-ratio="0.4">
      <div class="container pt-90 pb-90">
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
              <div class="funfact text-center">
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="5100" data-theme="minimal">200</div>
                <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                <h5 class="text-white text-uppercase mb-0">Happy Students</h5>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
              <div class="funfact text-center">
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="200" data-theme="minimal">150</div>
                <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                <h5 class="text-white text-uppercase mb-0">Approved Courses</h5>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
              <div class="funfact text-center">
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="20" data-theme="minimal">130</div>
                <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                <h5 class="text-white text-uppercase mb-0">Certified Teachers</h5>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
              <div class="funfact text-center">
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="600" data-theme="minimal">100</div>
                <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                <h5 class="text-white text-uppercase mb-0">Graduate Students</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



        
    <section class="clients bg-theme-colored2">
      <div class="container pt-10 pb-10">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-2col clients-logo transparent text-center owl-carousel owl-theme owl-loaded owl-drag">
              <div class="item"> <a href="#"><img src="<?php echo base_url()?>templates/front/images/reco/hec.png" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>