<section>
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row multi-row-clearfix">
            <?php 
 if($posts){
            foreach($posts as $post)
            {
            ?>
              <div class="col-sm-6 col-md-6">
                <div class="event-list bg-silver-light maxwidth500 mb-30">
                  <div class="thumb">
                    <img src="<?php echo base_url()?>uploads/posts/<?php echo $post['post_photo']?>" alt="" class="img-fullwidth">
                    <div class="entry-date media-left text-center flip bg-theme-colored2 pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom"><?php $first = $post['posted_at'];
                      $first2 = $first[8] . $first[9];
                      echo $first2; ?></li>
                        <li class="font-12 text-white text-uppercase"><?php $first = $post['posted_at'];
                      $first2 = $first[5] . $first[6];
                      $monthName = date("F", strtotime($first2));
                      echo $monthName = $monthName[0] . $monthName[1]. $monthName[2]; ?></li>
                      </ul>
                    </div>
                  </div>
                  <div class="event-list-details border-1px bg-white clearfix p-20 pt-15 pb-30">
                    <h4 class="text-uppercase font-weight-600 mb-5"><a href="<?php echo base_url()?>home/news_post_detail/<?php echo $post['post_id']?>"><?php echo $post['post_title']?></a></h4>
                    <ul class="list-inline">
                      <li><i class="fa fa-clock-o text-theme-colored2"></i> 
                      <?php
                      $date = new DateTime($post['posted_at']);echo $date->format('h:i a');
                      ?>
                      </li>
                      <li> <i class="fa fa-map-marker text-theme-colored2"></i> <?php echo $post['location']?></li>
                    </ul>
                    <p class="mt-15"><?php $limit = $post['post_description']; echo word_limiter($limit, 5);?></p> <a href="<?php echo base_url()?>home/news_post_detail/<?php echo $post['post_id']?>" class="btn btn-default mt-5">View </a>
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
            </div>
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
                      <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">Categories</h5>
                <div class="categories">
                <ul class="list list-border angle-double-right">
                    <li><a href="<?php echo base_url()?>home/library">Library</a></li>
                    <li><a href="<?php echo base_url()?>home/faqs">Faqs</a></li>
                    <li><a href="<?php echo base_url()?>home/admission">Admission</a></li>
                    <li><a href="<?php echo base_url()?>home/admission_policy">Admission Policy</a></li>
                   
                  </ul>
                </div>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">Latest News</h5>
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
              <div class="widget">
                <h5 class="widget-title line-bottom">Photos from Flickr</h5>
                <div id="flickr-feed" class="clearfix">
                  <!-- Flickr Link -->
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