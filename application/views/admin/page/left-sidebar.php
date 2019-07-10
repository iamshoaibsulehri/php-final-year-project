<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>admin/dashboard">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">University of Sialkot</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="<?php echo base_url() ?>admin/dashboard">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>



<!-- events -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
    <i class="fas fa-graduation-cap"></i>
    <span>Events</span>
  </a>
  <div id="collapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Action:</h6>
     <!--event-->
     <a class="collapse-item " href="<?php echo base_url() ?>admin/event">
    <i class="fas fa-fw fa-pen"></i>
    <span>All Events</span></a>
     <!--add Event-->
     <a class="collapse-item " href="<?php echo base_url() ?>admin/add_event">
    <i class="fas fa-fw fa-pen"></i>
    <span>Add Event</span></a>
    </div>
  </div>
</li>
<!-- End Events -->

<!-- News -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsepost" aria-expanded="true" aria-controls="collapsepost">
    <i class="fas fa-graduation-cap"></i>
    <span>News Post</span>
  </a>
  <div id="collapsepost" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Action:</h6>
     <!--News-->
     <a class="collapse-item " href="<?php echo base_url() ?>admin/posts">
    <i class="fas fa-fw fa-pen"></i>
    <span>All News Posts</span></a>
     <!--add News-->
     <a class="collapse-item " href="<?php echo base_url() ?>admin/add_post">
    <i class="fas fa-fw fa-pen"></i>
    <span>Add News Post</span></a>
    </div>
  </div>
</li>
<!-- End News -->

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsehome" aria-expanded="true" aria-controls="collapsegallery">
    <i class="fas fa-graduation-cap"></i>
    <span>Home Settings</span>
  </a>
  <div id="collapsehome" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Action:</h6>
      
      <!--Gallery -->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/home_settings">
      <i class="fas fa-graduation-cap"></i>
       <span>Basic Home Setting</span>
      </a>
      <!--Gallery Add-->
     
    </div>
  </div>
</li>
<!-- end Home Settings -->

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetime" aria-expanded="true" aria-controls="collapsegallery">
    <i class="fas fa-graduation-cap"></i>
    <span>Time Table</span>
  </a>
  <div id="collapsetime" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Action:</h6>
      
      <!--Gallery -->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/list_fee_time">
      <i class="fas fa-graduation-cap"></i>
       <span>All List</span>
      </a>
      <!--Gallery Add-->
      <!--Blog Add-->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/add_fee_time">
      <i class="fas fa-graduation-cap"></i>
       <span>Add TimeTable </span>
      </a>
    </div>
  </div>
</li>
<!-- end Home Settings -->

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseblog" aria-expanded="true" aria-controls="collapseblog">
    <i class="fas fa-graduation-cap"></i>
    <span>Blog</span>
  </a>
  <div id="collapseblog" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Action:</h6>
      
      <!--blog -->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/blog">
      <i class="fas fa-graduation-cap"></i>
       <span>All Blogs</span>
      </a>
      <!--Blog Add-->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/add_blog">
      <i class="fas fa-graduation-cap"></i>
       <span>Add Blog </span>
      </a>
    </div>
  </div>
</li>
<!-- end Blog -->

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsegallery" aria-expanded="true" aria-controls="collapsegallery">
    <i class="fas fa-graduation-cap"></i>
    <span>Gallery</span>
  </a>
  <div id="collapsegallery" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Action:</h6>
      
      <!--Gallery -->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/gallery">
      <i class="fas fa-graduation-cap"></i>
       <span> Gallery</span>
      </a>
      <!--Gallery Add-->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/add_gallery">
      <i class="fas fa-graduation-cap"></i>
       <span>Add Gallery </span>
      </a>
    </div>
  </div>
</li>
<!-- end gllry -->

<!-- Pages -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsepage" aria-expanded="true" aria-controls="collapsepage">
    <i class="fas fa-graduation-cap"></i>
    <span>Pages</span>
  </a>
  <div id="collapsepage" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Action:</h6>
     <!--pages-->
     <a class="collapse-item " href="<?php echo base_url() ?>admin/pages">
    <i class="fas fa-fw fa-pen"></i>
    <span>All Pages</span></a>
     <!--add pages-->
     <a class="collapse-item " href="<?php echo base_url() ?>admin/add_page">
    <i class="fas fa-fw fa-pen"></i>
    <span>Add Page </span></a>
    </div>
  </div>
</li>
<!-- End Pages -->

<hr class="sidebar-divider">
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseprogram" aria-expanded="true" aria-controls="collapseprogram">
    <i class="fas fa-graduation-cap"></i>
    <span>Programs</span>
  </a>
  <div id="collapseprogram" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Action:</h6>
      
      <!--Program -->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/programs">
      <i class="fas fa-graduation-cap"></i>
       <span>Program</span>
      </a>
      <!--Program Category-->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/course_category">
      <i class="fas fa-graduation-cap"></i>
       <span>Program Category</span>
      </a>
      
    </div>
  </div>
</li>

<!-- end program -->

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsedepartment" aria-expanded="true" aria-controls="collapsedepartment">
    <i class="fas fa-graduation-cap"></i>
    <span>Departments</span>
  </a>
  <div id="collapsedepartment" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Action:</h6>
      
      <!--Program -->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/departments">
      <i class="fas fa-graduation-cap"></i>
       <span>All Departments</span>
      </a>
      <!--Program Category-->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/add_department">
      <i class="fas fa-graduation-cap"></i>
       <span>Add Department </span>
      </a>
    </div>
  </div>
</li>
<!-- end department -->


<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefaculties" aria-expanded="true" aria-controls="collapsefaculties">
    <i class="fas fa-graduation-cap"></i>
    <span>Faculties</span>
  </a>
  <div id="collapsefaculties" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Action:</h6>
      
      <!--Faculties -->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/faculties">
      <i class="fas fa-graduation-cap"></i>
       <span>All Faculties</span>
      </a>
      <!--Faculties Add-->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/add_faculty">
      <i class="fas fa-graduation-cap"></i>
       <span>Add Faculty </span>
      </a>
    </div>
  </div>
</li>

<!-- end Faculties -->

<!-- Divider -->
<hr class="sidebar-divider">

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsenotifications" aria-expanded="true" aria-controls="collapsenotifications">
    <i class="fas fa-graduation-cap"></i>
    <span>Notifications</span>
  </a>
  <div id="collapsenotifications" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Action:</h6>
      
      <!--Notifications -->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/notifications">
      <i class="fas fa-graduation-cap"></i>
       <span>All Notifications</span>
      </a>
    </div>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseteacher" aria-expanded="true" aria-controls="collapseteacher">
    <i class="fas fa-graduation-cap"></i>
    <span>Teachers</span>
  </a>
  <div id="collapseteacher" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Action:</h6>
      
      <!--Teacher -->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/teachers">
      <i class="fas fa-graduation-cap"></i>
       <span>All Teachers</span>
      </a>
      <!--Teacher Add-->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/add_teacher">
      <i class="fas fa-graduation-cap"></i>
       <span>Add Teacher </span>
      </a>
    </div>
  </div>
</li>
<!-- end Teachers -->






<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseuser" aria-expanded="true" aria-controls="collapseuser">
    <i class="fas fa-graduation-cap"></i>
    <span>Users</span>
  </a>
  <div id="collapseuser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Action:</h6>
      <!--user -->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/users">
      <i class="fas fa-graduation-cap"></i>
       <span>All Users</span>
      </a>
      <!--User Add-->
      <a class="collapse-item " href="<?php echo base_url() ?>admin/add_user">
      <i class="fas fa-graduation-cap"></i>
       <span>Add Users </span>
      </a>
    </div>
  </div>
</li>
<!-- end gllry -->



<!-- Divider -->
<hr class="sidebar-divider">


<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>