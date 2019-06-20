
     <style>

/* Active/hover state (menu items) */
.menuzord-menu2 > li.active > a,
.menuzord-menu2 > li:hover > a{
  background: #afc4d6;
    color: black !important;
 
}

/* Dropdown */


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
</style>
     
     <?php    
      $login = $this->session->userdata('loggin');
                          if( $login ){
                            ?>
  <nav class="navbar bg-blue nav-lg header-nav">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle userhead_toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img class="logo-default" src="<?php echo base_url()?>templates/front/images/logo-wide2.png" style=" width: 100px; height: auto; padding: 16px;" alt="">
    
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class=" nav navbar-nav  menu" style="">
    <li class="active" ><a style="    font-size: 22px; font-weight: bold;" href="#">University of Sialkot</a></li>
        
    <li><a href="<?php echo base_url()?>home/policies">Policies</a></li>
        <li><a href="<?php echo base_url()?>home/faqs">FAQs</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" style="">
        <li class="padding"><a href="<?php echo base_url()?>home/user_profile"><span class="fa fa-user "></span> User Profile</a>
        <ul class="dropdown-menu" style="    background: transparent; margin: -5px -56px  0px 0px;">
        <li><a href="<?php echo base_url()?>home/user_logout">Logout</a></li>
     </ul>
      </li>
        
      </ul>
    </div>
  </div>
</nav>
                          
                        <li>
                        <?php 
                          }
                          else
                          {
                        ?>



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
            <ul class="menuzord-menu2  styled-icons icon-sm pull-right flip sm-pull-none sm-text-center effect mt-5">
               <li><a href="<?php echo base_url()?>home/under_construction" class="text-white">Downloads</a></li>
                <li><a href="<?php echo base_url()?>home/user_registration" class="text-white">Admission</a></li>
                <li><a href="<?php echo base_url()?>home/under_construction" class="text-white">Career</a></li>
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
                    <div class="col2">
                     
                      <div class="widget" style="background-image:url(<?php echo base_url()?>templates/front/images/bg/p4.png);">
                        <div class="box" style="height:140px;  ">
                         <h4 style="text-align:center">ACADEMICS</h4>
                         <p  style="text-align:center">We are unlocking new horizons in pursuit of taking their abilities to new heights.</p>
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

              <li><a href="<?php echo base_url()?>home/contact_us">CONTACT US</a></li>
              <li><a href="<?php echo base_url()?>home/event">EVENTS</a></li>
      </ul>

           </div>
          </nav>
        </div>
      </div><div style="display: none; width: 1349px; height: 90px; float: none;"></div>
    </div>
  </header>
  <?php
                          }
                          ?>