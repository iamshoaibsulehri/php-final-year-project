<div class="main-content">
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

    <!-- Section: event calendar -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9">
          <?php 
 if($events){
            foreach($events as $event)
            {
            ?>
            <div class="upcoming-events bg-white-f3 mb-20">
              <div class="row">
                <div class="col-sm-4 pr-0 pr-sm-15">
                  <div class="thumb p-15">
                  <a href="<?php echo base_url() ?>home/event_detail/<?php echo $event['event_id'] ?>">  <img class="img-fullwidth" src="<?php echo base_url() ?>uploads/events/<?php echo $event['event_photo'] ?>" alt="...">
                  </div>
                </div>
                <div class="col-sm-4 pl-0 pl-sm-15">
                  <div class="event-details p-15 mt-20">
                    <h4 class="media-heading text-uppercase font-weight-500"><?php echo $event['event_title'] ?></h4>
                    <p><?php $limit = $event['event_description']; echo word_limiter($limit, 10);?></p>
                    </a>
                    <a href="<?php echo base_url() ?>home/event_detail/<?php echo $event['event_id'] ?>" class="btn btn-flat btn-dark btn-theme-colored btn-sm">Details <i class="fa fa-angle-double-right"></i></a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="event-count p-15 mt-15">
                    <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                      <li class="p-15 mr-5 bg-lightest"><?php $first = $event['event_date'];
                      $first2 = $first[5] . $first[6];
                      $monthName = date("F", strtotime($first2));
                      echo $monthName = $monthName[0] . $monthName[1]. $monthName[2]; ?></li>
                      <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"><?php $first = $event['event_date'];
                      $first2 = $first[8] . $first[9];
                      echo $first2; ?></li>
                      <li class="p-15 bg-lightest"><?php $first = $event['event_date'];
                      $first2 = $first[0] . $first[1].$first[2] . $first[3];
                      echo $first2; ?></li>
                    </ul>
                    <ul>
                      <li class="mb-10 text-theme-colored"><i class="fa fa-clock-o mr-5"></i> at 5.00 pm - 7.30 pm</li>
                      <li class="text-theme-colored"><i class="fa fa-map-marker mr-5"></i> <?php  echo $event['event_location']?></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <?php
             }
            }else{
              ?>
              No record found!.
              <?php
            }
             ?>
            <div class="row">
              <div class="col-sm-12">
                <nav>
                  <?php
                  echo $links;
                  ?>
                 
                </nav>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-right mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom">Search box</h5>
                <div class="search-form">
                  <form>
                    <div class="input-group">
                      <input type="text" placeholder="Click to Search" name="q" class="form-control search-input">
                      <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">Usefull Links</h5>
                <div class="categories">
                  <ul class="list list-border angle-double-right">
                    <li><a href="<?php echo base_url()?>home/library">Library</a></li>
                    <li><a href="<?php echo base_url()?>home/faqs">Faqs</a></li>
                    <li><a href="<?php echo base_url()?>home/admission">Admission</a></li>
                    <li><a href="<?php echo base_url()?>home/admission_policy">Admission Policy</a></li>
                   
                  </ul>
                </div>
              </div>
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
              <div class="widget">
                <h5 class="widget-title line-bottom">Photos from Flickr</h5>
                <div id="flickr-feed" class="clearfix">
                  <!-- Flickr Link gallery-->
                  <?php 
                $this->db->limit(6);
                $gallery_items = $this->db->get('gallery')->result_array();
               
                foreach($gallery_items as $items)
               {
               ?>
                  <div class="flickr_badge_image" id="flickr_badge_image1"><a href=""><img src="<?php echo base_url()?>uploads/gallery/<?php echo $items['photo']?>" alt="A photo of USKT" title="<?php echo $items['g_name']?>" height="75" width="75"></a></div>
<?php
               }
               ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>