<footer id="footer" class="footer" style="background: rgb(33, 35, 49) !important;">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-5 mb-20" alt="" src="<?php echo base_url()?>templates/front/images/logo-wide.png" style="width: 180px;
    height: 50px;">
            <p>1-Km Main Daska Road, Sialkot.<br>Post Code: 51310 </p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored2 mr-5"></i> <a class="text-gray" href="#"> +92-523575518-20 </a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">info@uskt.edu.pk</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">www.uskt.edu.com</a> </li>
            </ul>            
            <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-10">
              <li><a href="https://www.facebook.com/uniofsialkot/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/UniversityofSi1"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/uoskt/"><i class="fa fa-instagram"></i></a></li>
              
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Useful Links</h4>
            <ul class="angle-double-right list-border">
              <li><a href="<?php echo base_url()?>home/index">Home Page</a></li>
              <li><a href="<?php echo base_url()?>home/index">About Us</a></li>
              <li><a href="<?php echo base_url()?>home/index">Our Mission</a></li>
              <li><a href="<?php echo base_url()?>home/index">Terms and Conditions</a></li>
              <li><a href="<?php echo base_url()?>home/index">FAQ</a></li>              
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Top News</h4>
            <div class="latest-posts">
            <?php 
            $this->db->limit(3);
            $posts = $this->db->get('posts')->result_array();
            foreach($posts as $post)
            {
            ?>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="<?php echo base_url()?>uploads/posts/<?php echo $post['post_photo']?>" style="height:55px; <width:80></width:80>px" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#"><?php $limit = $post['post_description']; echo word_limiter($limit, 4);?></a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <?php
            }
              ?>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Opening Hours</h4>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Fri :  </span>
                  <div class="value pull-right"> 8.30 am - 4.00 pm </div>
                </li>
                <li class="clearfix"> <span> Break : </span>
                  <div class="value pull-right"> 1.00 pm - 2.00 pm </div>
                </li>
                <li class="clearfix"> <span> Sat : </span>
                  <div class="value pull-right bg-theme-colored2 text-white closed"> Closed </div>
                </li>
                <li class="clearfix"> <span> Sun : </span>
                  <div class="value pull-right bg-theme-colored2 text-white closed"> Closed </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom" data-bg-color="#2b2d3b" style="background: rgb(43, 45, 59) !important;">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-12 text-black-777 m-0 sm-text-center">Copyright ©2017 ThemeMascot. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>