
<?php
  include('slider.php');
?>
<section class="divider bg-silver-deep">
      <div class="container pt-50 pb-60">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4 mb-sm-30">
            <div class="feature-box text-center">
              <div class="feature-icon">
              	<img src="<?php echo base_url()?>templates/front/images/icons/online.png" alt="">
              </div>
              <div class="feature-title">
              	<h3>Online Course Facilities</h3>
              	<a href="<?php echo base_url()?>home/under_construction" class="read-more font-roboto-slab text-theme-colored2">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 mb-sm-30">
            <div class="feature-box text-center">
              <div class="feature-icon">
              	<img src="<?php echo base_url()?>templates/front/images/icons/book.png" alt="">
              </div>
              <div class="feature-title">
              	<h3>Modern Book Library</h3>
              	<a href="<?php echo base_url()?>home/library" class="read-more font-roboto-slab text-theme-colored2">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="feature-box text-center">
              <div class="feature-icon">
              	<img src="<?php echo base_url()?>templates/front/images/icons/graduate.png" alt="">
              </div>
              <div class="feature-title">
              	<h3>Be Industrial Leader</h3>
              	<a href="<?php echo base_url()?>home/leader" class="read-more font-roboto-slab text-theme-colored2">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container pb-70">
        <div class="section-content">
          <div class="row">
            <div class="col-md-4">
            <div class="widget">
            <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30">Latest <span class="text-theme-colored2">News</span></h2>
            <div class="double-line-bottom-theme-colored-2"></div>
            
            <div class="latest-posts">
            
            <?php 
            $this->db->limit(4);
            $posts = $this->db->get('posts')->result_array();
            foreach($posts as $post)
            {
            ?>
           
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="<?php echo base_url()?>uploads/posts/<?php echo $post['post_photo']?>" style="height:55px; <width:80></width:80>px" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#"><?php $limit = $post['post_description']; echo word_limiter($limit, 10);?></a></h5>
                  <p class="post-date mb-0 font-12">
                  <?php
                  $date = new DateTime($post['posted_at']);
                  echo $date->format('h:i a');
                  ?>
                  </p>
                </div>
              </article>
            
              <?php
            }
              ?>
              <a href="<?php echo base_url()?>home/news_post" class="read-more font-roboto-slab text-theme-colored2">Read All</a>
            </div>
         
          </div>
         
            </div>
            <div class="col-md-5">
              <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30">About <span class="text-theme-colored2">USKT</span></h2>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p>The establishment of the University of Sialkot has introduced a new era in the domain of higher education in the fertile region of Sialkot. Though this University is relatively young but we are confident that with commitment and sincere efforts we shall be able to achieve excellence in research and education.

.</p>
              <p class="hidden-md">Our Vision is nothing less than realizing the full potential of the students of the area by providing them unprecedented access to research, education and modern technology, so that they can lead Pakistan to a new era of development, growth and productivity.</p>
              <a href="<?php echo base_url()?>home/about_us" class="read-more font-roboto-slab text-theme-colored2">Read All</a>
            </div>
            <div class="col-md-3">
              <div class="top-course-thumb mt-sm-30">
                <img class="img-fullwidth" src="<?php echo base_url()?>templates/front/images/about/u2.jpg" alt="">
                <div class="desc-box">
                  <h4 class="title">Admission for Spring</h4>
                  <h4 class="off">Apply</h4>
                  <a href="<?php echo base_url()?>home/user_registration" class="signup text-theme-colored-2">Signup Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="courses" class="bg-silver-deep">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">Our <span class="text-theme-colored2">Courses</span></h2>              
              <p class="text-uppercase mb-0">Choose Your Course</p>
					  	<div class="double-line-bottom-theme-colored-2"></div>
						</div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="owl-carousel-3col owl-carousel owl-theme" data-nav="true">
          <?php 
          $this->db->limit(5);
            $dbprogram = $this->db->get('program')->result_array();
            foreach($dbprogram as $program)
            {
           
          ?>
            <div class="item">
              <div class="course-single-item bg-white border-1px clearfix mb-30">
                <div class="course-thumb">
                <a href="<?php echo base_url()?>home/program_detail/<?php echo $program['p_id']?>">
                  <img class="img-fullwidth" alt="" src="<?php echo base_url() ?>uploads/program/<?php echo $program['p_photo']?>">
                  <div class="price-tag"><?php echo $program['p_duration']?> Years</div>
                </div>
            </a>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="<?php echo base_url()?>home/program_detail/<?php echo $program['p_id']?>"><h4 class="mt-0 mb-5"><?php echo $program['p_name']?></h4></a>
                    <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                     
                    </ul>
                  </div>
                  <div class="author-thumb">
                    <img src="" alt="" class="img-circle">
                  </div>
                  <div class="clearfix"></div>
                  <p class="course-description mt-20"><?php echo $program['p_name']?></p>
                  <ul class="list-inline course-meta mt-15">
                    <li>
                      <h6><?php echo $program['p_duration']?> Years</h6>
                      <span> Course</span>
                    </li>
                    <li>
                      <h6>35</h6>
                      <span> Class Size</span>
                    </li>
                    <li>
                      <h6><span class="course-time">2 hours 30 min</span></h6>
                      <span> Class Duration</span>
                    </li>
                  </ul>
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


    <section>
      <div class="container pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h3 class="text-uppercase line-bottom-theme-colored-2 mt-0 line-height-1"><i class="fa fa-calendar mr-10"></i>Upcoming <span class="text-theme-colored2">Events</span></h3>
             <?php 
             $this->db->limit(3);
             $event_s = $this->db->get('events')->result_array();
             foreach($event_s as $event)
             {
               ?>
              <article>
              	<div class="event-block">
	                <div class="event-date text-center">
	                  <ul class="text-white font-18 font-weight-600">
	                    <li class="border-bottom">28</li>
	                    <li class="">Feb</li>
	                  </ul>
	                </div>
	                <div class="event-meta border-1px pl-40">
	                  <div class="event-content pull-left flip">
	                    <h4 class="event-title media-heading font-roboto-slab font-weight-700"><a href="<?php echo base_url() ?>home/event_detail/<?php echo $event['event_id'] ?>"><?php echo $event['event_title'];?></a></h4>
                      <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored2"></i>
                       <?php
                      
    $date = new DateTime($event['start_time']);
    echo $date->format('h:i a');
    ?> - <?php 
    $date = new DateTime($event['end_time']);
    echo $date->format('h:i a');?></span>
	                    <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5 text-theme-colored2"></i> <?php echo $event['event_location'];?></span>
	                    <p class="mt-5"><?php $limit = $event['event_description']; echo word_limiter($limit, 10);?></p>
	                  </div>
	                </div>
	              </div>
              </article>
              <?php
              }
              ?>

            </div>
            <div class="col-md-6">
              <h3 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30"><i class="fa fa-question-circle-o mr-10"></i>Frequently Asked <span class="text-theme-colored2">Questions</span></h3>
              <div class="panel-group accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2" id="accordion6" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headin1">
                    <h6 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion6" href="#collaps1" aria-expanded="true" aria-controls="collaps1">
                      Can I apply using the paper application?
                      </a>
                    </h6>
                  </div>
                  <div id="collaps1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headin1">
                    <div class="panel-body">
                    We only accept applications submitted electronically. This allows us to process your application more quickly. It also keeps you informed of the status of your application throughout the process by checking it online.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading2">
                    <h6 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                      How do I create an account?
                      </a>
                    </h6>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                    <div class="panel-body">
                    An online application account can be created through the USKT website.
To create an online application account with the USKT Online Application System, you are required to have a valid email address.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading3">
                    <h6 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                      Why do I need to list All schools I have attended?
                      </a>
                    </h6>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                    <div class="panel-body">
                    It's important for us to get a complete and accurate picture of your academic history. Failure to list and submit transcripts from all 
                    institutions previously attended is considered to be a violation of academic ethics and may result in the cancellation of your admission or dismissal from the university.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading4">
                    <h6 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                      Are there application processing charges?
                      </a>
                    </h6>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                    <div class="panel-body">
                    Yes, there is an online application processing fee.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading5">
                    <h6 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                      Can I submit the application after the deadline?
                      </a>
                    </h6>
                  </div>
                  <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                    <div class="panel-body">
                    No, the online application system will automatically stop working after the deadline; therefore, we encourage you to submit
                     your application well before the deadline in order to avoid any inconvenience.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    include('gallery.php');
    ?>
    <section id="team" class="bg-silver-deep">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">Our <span class="text-theme-colored2">Teachers</span></h2>              
              <p class="text-uppercase mb-0">We Have Highly Qualified Teachers</p>
					  	<div class="double-line-bottom-theme-colored-2"></div>
						</div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
        <?php 
           $this->db->limit(4);
           $teacher = $this->db->get('teacher')->result_array();
          
           foreach($teacher as $teach)
           {
           ?>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
            <a href="<?php echo base_url() ?>home/teacher_detail/<?php echo $teach['t_id'] ?>"> <img class="img-fullwidth"  style="width: 275; height:370;" alt="" src="<?php echo base_url() ?>uploads/teacher/<?php echo $teach['t_photo'] ?>"></a>
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
    <section class="parallax divider layer-overlay overlay-theme-colored-9" style="background-image: url(<?php echo base_url()?>templates/front/images/bg/bg4.jpg); background-position: 50% 13px">
      <div class="container pt-60 pb-90">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="text-white text-uppercase font-46 font-weight-700 mb-10">Let's have a <span class="text-theme-colored2">USKT</span> Tour</h2>
            <p class="font-16 text-white mb-20">USKT is an HEC recoganized University in Sialkot City<br>Sitarun se aage Jahan aur b hn. </p>
            <a href="https://www.youtube.com/watch?v=W53KuePAP3U" data-lightbox-gallery="youtube-video"><i class="fa fa-play-circle text-theme-colored2 play-btn"></i></a>
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


    <section id="blog">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">Latest <span class="text-theme-colored2">News </span></h2>              
              <p class="text-uppercase mb-0">See All Time Latest News</p>
					  	<div class="double-line-bottom-theme-colored-2"></div>
						</div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel-3col owl-theme owl-carousel owl-nav-top" data-nav="true">
        
              <?php 
               $posts = $this->db->get('posts')->result_array();
               foreach($posts as $post)
               {
               ?>
                <div class="item">
                  <article class="post clearfix mb-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="<?php echo base_url()?>uploads/posts/<?php echo $post['post_photo']?>" alt="" style="width:372px; height:246px;" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600"><?php $first = $post['posted_at'];
                      $first2 = $first[8] . $first[9];
                      echo $first2; ?></li>
                          <li class="font-12 text-white text-uppercase"><?php $first = $post['posted_at'];
                      $first2 = $first[5] . $first[6];
                      $monthName = date("F", strtotime($first2));
                      echo $monthName = $monthName[0] . $monthName[1]. $monthName[2];?></li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content p-15">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="<?php echo base_url()?>home/news_post_detail/<?php echo $post['post_id']?>"><?php echo $post['post_title']?></a></h4>
                            <ul class="list-inline">
                              <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i><?php echo $post['post_author']?></li>
                              
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5"><?php $limit = $post['post_description']; echo word_limiter($limit, 20);?></p>
											<a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="blog-single-left-sidebar.html"> View Details</a>
                    </div>
                  </article>
                </div>
                <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
  
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3366.2891870359845!2d74.51207491465577!3d32.46495600713937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391ec1fa58d5be41%3A0x4798a62d873730fd!2sUniversity+of+Sialkot(USKT)!5e0!3m2!1sen!2s!4v1563143546373!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              
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

<div id="modeilReload" class="modal fade" role="dialog">
  <div class="modal-dialog" style="    top: 30%;">

    <!-- Modal content-->
    <div class="modal-content" style="background: url(<?php echo base_url() ?>templates/front/images/lib-image.jpg);">
    
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h3 class="text-center" style="color: #fff;font-weight: bold;  font-size: 25px;">ADMISSIONS FALL 2019
</h3>
      </div>
      
    </div>

  </div>
</div>
    

<script>
$('#modeilReload').modal('show');
</script>