<section class="inner-header divider layer-overlay overlay-theme-colored-7" style="background-image: url(<?php echo base_url()?>templates/front/images/course/background_top.png);">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36"></h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Office </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

<section id="detail">
 <div class="container ">
    <div class="row">
        <div class="col-md-12">
            <div class="Heading_all">
                <h3 class="office">Welcome to Vice Chancellor's Office</h3>
           </div>
           <div class="padding">
           <div class="row">
               <div class= "col-md-3">
                   <img src="<?php echo base_url()?>templates/front/images/bg/event.jpg" alt="">
                  <span class="center" style="text-align:center;"><p> Professor Dr.Ijaz A. Qureshi</p><span>
                </div>
                <div class= "col-md-9">
                <p style=>The Office of the Vice Chancellor provides leadership and direction to the university through 
                    policy formulation, development and implementation. It ensures accountability and 
                    responsibility for efficient and effective observance with government and university rules,
                     laws, regulations, policies and procedures.<br>
                      </p>
                      <p>
                    The Office also facilitates, supports and enhances opportunities for the 
                    university to engage in new and innovative academic and research initiatives by
                     assisting faculty, staff and administrators in the management and development of 
                     such projects.</p>
                </div>
            </div>
</div>
       </div>
    </div>
 
<!-- Mission -->

    <div class="row">
        <div class="col-md-12">
            <div class="Heading_all">
                <h3 class="office">Message</h3>
           </div>
           <div class="row">
               <div class= "col-md-12">
               <section class="bg-silver-deep">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="owl-carousel-2col owl-theme owl-carousel boxed testimonials" data-dots="true">
            <?php 
            $testimonial = $this->db->get_where('testimonial', array('t_id'=>7))->result_array();
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

                </div>
        	</div>
       </div>
    </div>

<!-- Vision -->
 
    
 </div>
</section>