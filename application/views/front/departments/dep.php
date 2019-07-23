  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    
<?php foreach($department_detail as $dep) 

{
?>
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" style="background-image: url(<?php echo base_url()?>uploads/department/<?php echo $dep['d_photo']?>);">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Courses</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Department </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>


<section id="departments-description" >
  <div class="container mt-30 mb-30 pt-30 pb-30">
<h3 style="text-align:center"><?php echo $dep['top_title']?></h3>
        <div class="row">
        <div class="wpb_wrapper">
			<p style="text-align: justify;font-size: 15px;">
          <?php echo $dep['d_description']?>
             </p>
		</div>
       </div>
  </div>

  <?php
}
?>
</section>

<section id="courses" class="bg-silver-deep">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">BS <span class="text-theme-colored2">Courses</span></h2>              
             	<div class="double-line-bottom-theme-colored-2"></div>
			</div>
          </div>
        </div>
       <div class ="row">
       <?php 
        $id = $this->uri->segment(3);
           $this->db->where('p_category',2);
           
              $this->db->where('p_department',$id);
             $ucourse  = $this->db->get('program')->result_array();
             foreach($ucourse as $uc)
             {
             ?>

         <div class="col-md-6">
           <div class="box top-course-thumb mt-sm-30">
           <a href="<?php echo base_url()?>home/program_detail/<?php echo $uc['p_id']?>">
                <img class="img-fullwidth" src="<?php echo base_url()?>uploads/program/<?php echo $uc['p_photo']?>" alt="">
                <div class="desc-box">
                <i class="fa fa-desktop" style="color:#ffffff; font-size:22px; line-height:22px; vertical-align: middle;     margin-right: 488px;"></i>
                <p class="duration text-theme-colored-2"><?php echo $uc['p_duration']?> Years /  <?php echo $uc['p_samester']?> Samesters /  <?php echo $uc['p_credit']?> Hours</p>
                  <h4 class="name"><?php echo $uc['p_name']?></h4>
                  </a>
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


    <section id="courses" class="bg-silver-deep">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">Graducate <span class="text-theme-colored2">Courses</span></h2>              
             	<div class="double-line-bottom-theme-colored-2"></div>
			</div>
          </div>
        </div>
       <div class ="row">
       <?php 
        $id = $this->uri->segment(3);
        
           $this->db->where('p_category',1);
              $this->db->where('p_department',$id);
             $ucourse  = $this->db->get('program')->result_array();
            if($ucourse == NULL)
             {
               ?>
               <div class="notification" style="text-align:center">
               <h3 style="text-align:center; color:dark; font-weight:bold">More Comming Soon</h3>
               
<br><br><br>
               </div>
               <?php 
               }else{
                 ?>
             <?php
             foreach($ucourse as $uc)
           
             {
             ?>
           
         <div class="col-md-6">
           <div class="box top-course-thumb mt-sm-30">
                <a href="<?php echo base_url()?>home/program_detail/<?php echo $uc['p_id']?>">
                <img class="img-fullwidth" src="<?php echo base_url()?>uploads/program/<?php echo $uc['p_photo']?>" alt="">
                <div class="desc-box">
                <i class="fa fa-desktop" style="color:#ffffff; font-size:22px; line-height:22px; vertical-align: middle;     margin-right: 488px;"></i>
                <p class="duration text-theme-colored-2"><?php echo $uc['p_duration']?> Years /  <?php echo $uc['p_samester']?> Samesters /  <?php echo $uc['p_credit']?> Hours</p>
                  <h4 class="name"><?php echo $uc['p_name']?></h4>
                  </a>
                </div>
           </div>
           <br>
         </div>

        <?php
             }
            }
             ?>

       </div>
      </div>
    </section>
    
        


  