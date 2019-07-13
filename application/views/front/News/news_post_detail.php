<?php 
            foreach($post_detail as $detail)
            {
            ?>

<section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul>
              <li>
                <h5>Title:</h5>
                <p><?php echo $detail['post_title']?></p>
              </li>
              <li>
                <h5>Author:</h5>
                <p><?php echo $detail['post_author']?></p>
              </li>
              <li>
                <h5>Location:</h5>
                <p><?php echo $detail['location']?></p>
              </li>
              <li>
                <h5>Post Date:</h5>
                <p><?php $date = new DateTime($detail['posted_at']);echo $date->format('h:i a');?></p>
              </li>

              <li>
                <h5>Website:</h5>
                <p><a href="<?php echo base_url()?>home">www.uskt.edu.pk</p></a>
              </li>
              <li>
                <h5>Social Links:</h5>
                <div class="styled-icons icon-sm icon-gray icon-circled">
                <div class="sharethis-inline-share-buttons"></div>
						
               
                </div>
              </li>
             
            </ul>
          </div>
          <div class="col-md-8">
            <div class="owl-carousel-1col owl-carousel owl-theme owl-loaded owl-drag" data-nav="true">
            <img src="<?php echo base_url()?>uploads/posts/<?php echo $detail['post_photo']?>" style="width:755px; height:480px;" allowfullscreen="" id="fitvid1">
            
           </div>
        </div>
        </div>
        
        <div class="row mt-60">
          <div class="col-md-12">
            <h4 class="">Description</h4>
            <p><?php echo $detail['post_description']?></p>
          </div>
         </div>
        </div>
   
    </section>
    <?php
            }
            ?>


<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5d27216407f9ac0012ebd73d&product='inline-share-buttons' async='async'></script>