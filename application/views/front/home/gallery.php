<section id="gallery">
      <div class="container">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">Campus <span class="text-theme-colored2">Gallery</span></h2>              
              <p class="text-uppercase mb-0">USKT Gallery</p>
					  	<div class="double-line-bottom-theme-colored-2"></div>
						</div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <!-- Works Filter -->
              <div class="portfolio-filter font-alt align-center">
              <a href="#" class="active" data-filter="*">All</a>
              <?php 
               $i = 1;
                $gallery_items = $this->db->get('category')->result_array();
               
                foreach($gallery_items as $items)
               {
               ?>
                
                <a href="#select<?php echo $items['cat_id']?>" class="" data-filter=".select<?php echo $i?>"><?php echo $items['cat_name']?></a>
                
                <?php
              $i++; 
              }
                ?>
              </div>
              
              <!-- End Works Filter -->
              
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="gallery-isotope default-animation-effect grid-4 gutter clearfix">
               <?php 
             
                $gallery_items = $this->db->get('gallery')->result_array();
               foreach($gallery_items as $items)
               {
               ?>
                <!-- Portfolio Item Start -->
                <div class="gallery-item select<?php echo $items['g_category']?>">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>uploads/gallery/<?php echo $items['photo']?> " alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="<?php echo base_url()?>uploads/gallery/<?php echo $items['photo']?>"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="<?php echo base_url()?>uploads/gallery/<?php echo $items['photo']?>">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
               <?php
               $i++;
                }
               ?>
              </div>
              <!-- End Portfolio Gallery Grid -->
            </div>
          </div>
        </div>
      </div>
    </section>

