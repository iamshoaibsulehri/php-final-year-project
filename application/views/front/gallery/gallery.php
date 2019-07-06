<div class="container">
<div class="row">
            <div class="col-md-12">
  <h3 class="center" style="text-align:center; font-weight:bold; color:blue; background-color:#ddd; padding:15px " >USKT Gallery</h3>
</div>
</div>
</div>

<section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <!-- Portfolio Filter -->
              <div class="portfolio-filter">
                
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
              <!-- End Portfolio Filter -->
            
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="gallery-isotope default-animation-effect grid-3 gutter clearfix" style="position: relative; height: 640.641px;">
             
              <?php 
             
                $gallery_items = $this->db->get('gallery')->result_array();
               foreach($gallery_items as $items)
               {
               ?>
                <!-- Portfolio Item Start -->
                <div class="gallery-item select<?php echo $items['g_category']?>" style="position: absolute; left: 0px; top: 0px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>uploads/gallery/<?php echo $items['photo']?> " alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
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