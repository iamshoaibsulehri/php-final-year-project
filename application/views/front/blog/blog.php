
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url(<?php echo base_url()?>templates/front/img/bg/breadcrumb-bg-5.jpg);">
        <div class="container">
            <h2>Blog</h2>
            <p>Blog help you understand which course is best for you and your interest.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Blog</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-8">
                <div class="blog-details-wrap mr-40">
                    <?php

                    foreach($blog_details as $detail) 
                    {
                    ?>
                    <div class="blog-details-top">
                        <img src="<?php echo base_url() ?>uploads/blog/<?php echo $detail['blog_photo']; ?>" style="max-width:100%;" alt="" />
                       
                        <div class="blog-details-content-wrap">
                            <div class="b-details-meta-wrap">
                                <div class="b-details-meta">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> <?php echo $detail['created_at']; ?></li>
                                        <li><i class="fa fa-user"></i> <?php echo $detail['blog_author']; ?></li>
                                        
                                    </ul>
                                </div>
                                <span><?php echo $detail['blog_category']?></span>
                            </div>
                            <h3><?php echo $detail['blog_title']?></h3>
                            <p><?php echo $detail['blog_description']?></p>
                            <div class="blog-share-tags">
                                <div class="blog-share">
                                    <div class="blog-btn">
                                      <!-- Sharing bt -->
                                    </div>
                                    <!-- sharing -->
                                </div>
                                <div class="blog-tag">
                                    <ul>
                                        <li><a href="#"><?php echo $detail['blog_tags']?></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-author mt-80">
                        
                        <?php
                    }
                    ?>
                    </div>
                   
               
                </div>
            </div>
        </div>
    </div>
</div>
