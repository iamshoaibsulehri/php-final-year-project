<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <?php 
    
    foreach($f_detail  as $detail)
    {
    ?>
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" style="background-image: url(<?php echo base_url()?>templates/front/images/course/background_top.png);">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Course Details</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Course Details</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
}
?>


<section id="faculty-description" >
  <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
        <div class="wpb_wrapper">
			<p style="text-align: justify;font-size: 15px;">
         sdfsdfsdfsds
             </p>
		</div>
       </div>
  </div>

</section>


<section id="dapartments courses" class="bg-silver-deep">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title"> <span class="text-theme-colored2">Departments</span></h2>              
             	<div class="double-line-bottom-theme-colored-2"></div>
			</div>
          </div>
        </div>
       <div class ="row">
       <?php 
        $id = $this->uri->segment(3);
           
              $this->db->where('f_id',$id);
             $department  = $this->db->get('department')->result_array();
            $size = sizeof($department);
            $box_class = 'col-md-6';
            if($size==1 && $size>0){
              $box_class = 'col-md-12';
            }
            else{
              $box_class = 'col-md-6';
            }
             foreach($department as $dep)
           
             {
             
             ?>
         <div class="<?php echo  $box_class;?>">
           <div class="dep_box top-course-thumb mt-sm-30">
                <img class="img-fullwidth" src="<?php echo base_url()?>uploads/department/<?php echo $dep['d_photo']?>" alt="">
                <div class="desc-box">
                <i class="fa fa-desktop" style="color:#ffffff; font-size:22px; line-height:22px; vertical-align: middle;     margin-right: 488px;"></i>
                
                  <h4 class="name"><?php echo $dep['d_name']?></h4>
                </div>
           </div>
           <br>
         </div>
        <?php
             }
             ?>

       </div>
      </div>
    </section>
