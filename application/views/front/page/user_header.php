<style>


</style>

<nav class="navbar bg-blue nav-lg">
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
        <li class="active"><a  style="font-weight: bolder;font-size: 21px;" href="#">University of Sialkot</a></li>
        
        <li><a href="<?php echo base_url()?>home/policies">Policies</a></li>
        <li><a href="<?php echo base_url()?>home/faqs">FAQs</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" style=" padding: 32px;">
       
        <a class="dropdown-toggle fa fa-user" data-toggle="dropdown" href="<?php echo base_url()?>home/user_profile">User Profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
        <ul class="dropdown-menu">
        <li><a href="<?php echo base_url()?>home/user_logout">Logout</a></li>
     </ul>
    </li>
        
      </ul>
    </div>
  </div>
</nav>
         
<!-- skin-color for nav hover -->