
     <style>


<style>

/* Active/hover state (menu items) */
.menuzord-menu2 > li.active > a,
.menuzord-menu2 > li:hover > a{
  background: #afc4d6;
    color: black !important;
 
}

.top.styled-icons.icon-sm a{
    font-size: 15px;
    height: 30px;
    line-height: 30px;
    margin: 2px 0px 3px 12px;
    width: 100% !important;
    }

.top li a:hover{
 background:white;
 color:black !important;
    }


/* Mobile mode (Responsive mode) */
@media (max-width: 900px){
	/* Menu items */
	.menuzord-responsive .menuzord-menu > li{
		padding: 0;
	}
	.menuzord-responsive .menuzord-menu > li > a{
		padding: 12px 20px !important;
	}
}

/*
  Simple paper fold with hover over effect

*/



h1 {
  
}

/*
  nav link items
*/
.fold{
  

  height: 230px;
  padding: 25px 25px;
  position: relative;
  font-size: 90%;
  text-decoration: none;
  color: #fff; 
  background: #fff;
  transition: all ease .5s;
}

/*
  paper fold corner
*/

.fold:before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  border-style: solid;
 
  border-color: #ddd #34495E;
  transition: all ease .5s;
}

/*
  on li hover make paper fold larger
*/
.fold:hover:before {
  border-width: 0 60px 60px 0;
  border-color: #eee #f5f5f5;
  
}
</style>
     
  


<header id="header" class="header">
    <div class="header-top bg-theme-colored2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="widget text-white">
              <ul class="list-inline xs-text-center text-white">
              <?php $data1 = $this->db->get_where('home_settings' , array('s_id'=>1))->result_array();
               foreach ($data1 as $data)
               {
                 ?>
              <marquee width=""><?php echo $data['s_content']?></marquee>

               <?php }
               ?>
              </ul>
            </div>
          </div>
          <div class="col-md-4 pr-0">
            <div class="widget">
            <ul class="menuzord-menu2  top styled-icons icon-sm pull-right flip sm-pull-none sm-text-center effect mt-5">
               <li><a href="<?php echo base_url()?>home/downloads" class="text-white">Downloads</a></li>
                <li><a href="<?php echo base_url()?>home/admission_office" class="text-white">Admission</a></li>
                <li><a href="<?php echo base_url()?>home/career" class="text-white">Career</a></li>
                <li><a href="<?php echo base_url()?>home/teacher" class="text-white">Faculty</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-20 mt-10">
              <li class="m-0 pl-10"> <a href="<?php echo base_url()?>home/user_login" class="text-white ajaxload-popup"><i class="fa fa-user-o mr-5 text-white"></i> Login /</a> </li>
              <li class="m-0 pl-0 pr-10"> 
                <a href="<?php echo base_url()?>home/user_registration" class="text-white ajaxload-popup"><i class="fa fa-edit mr-5"></i>Register</a> 
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white nav-lg" style="z-index: auto; position: static; top: auto;">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default no-bg menuzord-responsive"><a href="home" class="showhide" style="display: none;"><em></em><em></em><em></em></a>
          <div class="navbar-header">
         <button type="button" class="navbar-toggle userhead_toggle2" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
             <a class="menuzord-brand switchable-logo pull-left flip mt-20 pt-5" href="<?php echo base_url()?>">
            <img class="logo-default" src="<?php echo base_url()?>templates/front/images/logo-wide.png" alt="">
            </div>  
            </a>
            <div class="collapse navbar-collapse " id="myNavbar">
            <ul class="menuzord-menu menuzord-right menuzord-indented scrollable" style="max-height: 400px;">
          
            <li class="active"><a href="<?php echo base_url()?>home">HOME</a>
              <li><a href="<?php echo base_url()?>home/about_us">ABOUT USKT</a></li>
              <li><a href="#">ACADEMICS <span class="indicator"><i class="fa fa-angle-down"></i></span></a>
              
                <div class="megamenu megamenu-bg-img">
                <div class="megamenu-row">
                    <div class="col3">
                     
                      <div class="widget fold" style="background-image:url(<?php echo base_url()?>templates/front/images/bg/acedemics.jpg);">
                        <div class="box" style="height:240px;margin-top: 24px;">
                         <h4 style="text-align:center; color:white;">ACADEMICS</h4>
                         <p  style="text-align:center; color:white;">We are unlocking new horizons in pursuit of taking their abilities to new heights.</p>
                          </div>
                      </div>
                    </div>
                    <div class="col3">
                    <?php 
                      $faculty = $this->db->get_where('faculty', array('f_id'=>1))->result_array();
                      
                      foreach($faculty as $fa) 
                      {
                      ?>
                      <h4 class="megamenu-col-title" style="border-bottom: 1px solid #f7f8f7;"><?php echo $fa['f_title']?></h4>
                      <?php  } ?>

                     
                      <article class="post clearfix">
                      <?php 
                       $department = $this->db->get_where('department', array('f_id'=>1))->result_array();
                      
                      foreach($department as $da) 
                      {
                        
                      ?>
                        <div class="entry-header">
                        <li><a href="<?php echo base_url()?>home/department/<?php echo $da['d_id']?>"><?php echo $da['d_name']?></a></li>
                       
                      </div>
                      <?php }
                      ?>
                        <div class="entry-content">
                       
                      </article>
                    </div>
                      
                    <div class="col3">
                    <?php 
                      $faculty = $this->db->get_where('faculty', array('f_id'=>2))->result_array();
                      
                      foreach($faculty as $fa) 
                      {
                      ?>
                      <h4 class="megamenu-col-title" style="border-bottom: 1px solid #f7f8f7;"><?php echo $fa['f_title']?></h4>
                      <?php  } ?>
                      <article class="post clearfix">
                      <?php 
                       $department = $this->db->get_where('department', array('f_id'=>2))->result_array();
                      
                      foreach($department as $da) 
                      {
                        
                      ?>
                        <div class="entry-header">
                        <li><a href="<?php echo base_url()?>home/department/<?php echo $da['d_id']?>"><?php echo $da['d_name']?></a></li>
                       
                      </div>
                      <?php }
                      ?>
                        <div class="entry-content">
                       
                      </article>
                    </div>

                    <div class="col3">
                    <?php 
                      $faculty = $this->db->get_where('faculty', array('f_id'=>4))->result_array();
                      
                      foreach($faculty as $fa) 
                      {
                      ?>
                      <h4 class="megamenu-col-title" style="border-bottom: 1px solid #f7f8f7;"><?php echo $fa['f_title']?></h4>
                      <?php  } ?>
                      <article class="post clearfix">
                      <?php 
                       $department = $this->db->get_where('department', array('f_id'=>4))->result_array();
                      
                      foreach($department as $da) 
                      {
                        
                      ?>
                        <div class="entry-header">
                        <li><a href="<?php echo base_url()?>home/department/<?php echo $da['d_id']?>"><?php echo $da['d_name']?></a></li>
                       
                      </div>
                      <?php }
                      ?>
                        <div class="entry-content">
                       
                      </article>
                    </div>
                  </div>
                </div>
              </li>
    
              <li><a href="#">USKT Offices <span class="indicator"><i class="fa fa-angle-down"></i></span></a>
  <div class="megamenu megamenu-bg-img" style="background:#ffff;">
  <div class="megamenu-row">
  <div class="col3">
    <div class="widget fold" style="background-image:url(<?php echo base_url()?>templates/front/images/bg/acedemics.jpg);">
      <div class="box" style="height:240px;margin-top: 24px;">
        <h4 style="text-align:center; color:white;">USKT OFFICES</h4>
        <p  style="text-align:center; color:white;">We are unlocking new horizons in pursuit of taking their abilities to new heights.</p>
      </div>
    </div>
  </div>
  <div class="col3">
  <h4 class="megamenu-col-title" style="border-bottom: 1px solid #f7f8f7;">Statutory Offices</h4>
  <article class="post clearfix">
  <div class="entry-header">
<li><a href="<?php echo base_url()?>home/vice_chancellors_office">Vice Chancellor Office</a></li>
</div>
<div class="entry-content">
</article>
<article class="post clearfix">
<div class="entry-header">
  <li><a href="<?php echo base_url()?>home/chairman_office">Chairman Office</a></li>
</div>
<div class="entry-content">
</article>
<article class="post clearfix">
<div class="entry-header">
  <li><a href="<?php echo base_url()?>home/registrar_office">Registrar Office</a></li>
</div>
<div class="entry-content">
</article>
<article class="post clearfix">
<div class="entry-header">
  <li><a href="<?php echo base_url()?>home/controller_examination">Controller Examination</a></li>
</div>
<div class="entry-content">
</article>
<article class="post clearfix">
<div class="entry-header">
  <li><a href="<?php echo base_url()?>home/treasures">Treasures</a></li>
</div>
<div class="entry-content">
  </article>
</div>
<div class="col3">
<h4 class="megamenu-col-title" style="border-bottom: 1px solid #f7f8f7;">Management Offices</h4>
<article class="post clearfix">
<div class="entry-header">
  <li> <a href="<?php echo base_url()?>home/human_resources">Human Resources</a></li>
</div>
<div class="entry-content">
</article>
<article class="post clearfix">
<div class="entry-header">
  <li> <a href="<?php echo base_url()?>home/IT_center">Information Technology Center</a></li>
</div>
<div class="entry-content">
</article>
<article class="post clearfix">
<div class="entry-header">
  <li> <a href="<?php echo base_url()?>home/security_department">Security Department</a></li>
</div>
<div class="entry-content">
  </article>
  <article class="post clearfix">
  <div class="entry-header">
    <li> <a href="<?php echo base_url()?>home/admission_office">Admission Office</a></li>
  </div>
  <div class="entry-content">
    </article>
  </div>
  <div class="col3">
    <h4 class="megamenu-col-title" style="border-bottom: 1px solid #f7f8f7;">Related Links</h4>

    <article class="post clearfix">
    <div class="entry-header">
      <li><a href="<?php echo base_url()?>home/oric_office">Office of Research, Innovation, and Commercialization (ORIC)</a></li>
    </div>
    <div class="entry-content">
      </article>
   
      <article class="post clearfix">
    <div class="entry-header">
      <li><a href="<?php echo base_url()?>home/student_services_office">Student Service Centre</a></li>
    </div>
    <div class="entry-content">
      </article>

      <article class="post clearfix">
    <div class="entry-header">
      <li><a href="<?php echo base_url()?>home/qec_office">Quality Enhancement Cell</a></li>
    </div>
    <div class="entry-content">
      </article>

      <article class="post clearfix">
    <div class="entry-header">
      <li><a href="<?php echo base_url()?>home/center_of_media_Publication">Center for Media and Publication</a></li>
    </div>
    <div class="entry-content">
      </article>


    </div>
  </div>
</div>
</li>
<li><a href="#">Life At USKT <span class="indicator"><i class="fa fa-angle-down"></i></span></a>
  <div class="megamenu megamenu-bg-img" style="background:#ffff;">
  <div class="megamenu-row">
  <div class="col3">
    <div class="widget fold" style="background-image:url(<?php echo base_url()?>templates/front/images/bg/acedemics.jpg);">
      <div class="box" style="height:240px;margin-top: 24px;">
        <h4 style="text-align:center; color:white;">USKT OFFICES</h4>
        <p  style="text-align:center; color:white;">We are unlocking new horizons in pursuit of taking their abilities to new heights.</p>
      </div>
    </div>
  </div>
  <div class="col3">
  <h4 class="megamenu-col-title" style="border-bottom: 1px solid #f7f8f7;">USKT Events</h4>
  <article class="post clearfix">
  <div class="entry-header">
<li><a href="<?php echo base_url()?>home/event">Events</a></li>
<div class="entry-content">
</article>
<article class="post clearfix">
<div class="entry-header">
<li><a href="<?php echo base_url()?>home/news_post">News</a></li>
</div>
<div class="entry-content">
</article>
<article class="post clearfix">
<div class="entry-header">
<li><a href="<?php echo base_url()?>home/gallery">Gallery</a></li>
</div>
<div class="entry-content">
</article>
</div>

<div class="col3">
<h4 class="megamenu-col-title" style="border-bottom: 1px solid #f7f8f7;">USKT Facilities</h4>
<article class="post clearfix">
<div class="entry-header">
  <li> <a href="<?php echo base_url()?>home/library">Library</a></li>
</div>
<div class="entry-content">
</article>
<article class="post clearfix">
<div class="entry-header">
  <li> <a href="<?php echo base_url()?>home/labs">Labs</a></li>
</div>
<div class="entry-content">
</article>
<article class="post clearfix">
<div class="entry-header">
  <li> <a href="<?php echo base_url()?>home/transport">Transport</a></li>
</div>
<div class="entry-content">
  </article>
  <article class="post clearfix">
  <div class="entry-header">
    <li> <a href="<?php echo base_url()?>home/hostel">Hostel</a></li>
  </div>
  <div class="entry-content">
    </article>
  </div>
  <div class="col3">
    <h4 class="megamenu-col-title" style="border-bottom: 1px solid #f7f8f7;">Faculities</h4>
<?php $detail = $this->db->get('faculty')->result_array();
foreach($detail as $det)
{
?>
    <article class="post clearfix">
    <div class="entry-header">
      <li><a href="<?php echo base_url()?>home/faculty_detail/<?php echo $det['f_id']?>"><?php echo $det['f_title']?></a></li>
    </div>
    <div class="entry-content">
      </article>
   
     <?php
}
?>


    </div>
  </div>
</div>
</li>
     
     
     
          <li><a href="<?php echo base_url()?>home/contact_us">Contact Us</a></li>
          


       
      </ul>

           </div>
          </nav>
        </div>
      </div><div style="display: none; width: 1349px; height: 90px; float: none;"></div>
    </div>
  </header>
 