<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95"
        style="background-image:url(<?php echo base_url()?>templates/front/img/bg/breadcrumb-bg-5.jpg);">
        <div class="container">
            <h2>Blog</h2>
            <p>Blog help you understand which course is best for you and your interest..</p>
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
                <div class="blog-all-wrap mr-40">
                    <div class="row">
                        <?php
                    
            
foreach($blog as $bl)
{

?>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="single-blog mb-30">
                                <div class="blog-img">
                                    <a href="<?php echo base_url(); ?>home/blog_details/<?php echo $bl['blog_id']; ?>"><img
                                            src="<?php echo base_url() ?>uploads/blog/<?php echo $bl['blog_photo']; ?>" style="max-width:100%" alt="" /></a>

                                </div>
                                <div class="blog-content-wrap">
                                    <span><?php echo $bl['blog_category'] ?></span>
                                    <div class="blog-content">
                                        <h4><a
                                                href="<?php echo base_url(); ?>home/blog_details/<?php echo $bl['blog_id']; ?>"><?php echo $bl['blog_title']?></a>
                                        </h4>

                                        <p><?php $string = $bl['blog_description'];
                                        echo word_limiter($string, 10); 
                                         ?></p>
                                        <div class="blog-meta">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-user"></i>Apparel</a></li>
                                                <li><a href="#"><i class="fa fa-comments-o"></i> 10</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blog-date">
                                        <a href="#"><i class="fa fa-calendar-o"></i> June, 24th 2017</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
}
?>

                    </div>
                    <?php
                     echo $links;
                    ?>
                </div>
            </div>
           
                    
                
        </div>
    </div>
</div>