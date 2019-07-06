<hr>
<div class="container bootstrap snippet">
<div class="row">
<div class="col-sm-3">
  <!--left col-->
  <form class="form" action="" method="POST" id="registrationForm" enctype="multipart/form-data">
  <?php 
    $login = $this->session->userdata('loggin');
    $detail = $this->db->get_where('students', array('email'=>$login['email']))->result_array();
            $id=$detail[0]['student_id'];
           $this->db->where('student_id',$id); 
  foreach($detail as $det){
  ?>
  <?php if($det['photo']==""){ ?>
  <div class="text-center"> <img src ="<?php echo base_url()?>templates/front/fonts/login/form.png" class="avatar img-circle img-thumbnail" alt="avatar">
  <?php }
  ?>
  <?php if($det['photo']!=""){ ?>
  <div class="text-center"> <img src ="<?php echo base_url()?>uploads/student_profile/<?php echo $det['photo']?>" class="avatar img-circle img-thumbnail" alt="avatar">
  <?php }
  ?>
    <h6>Upload a photo with  <span class="color" style="color:red;">Blue Background<span>.</h6>
    <input type="file" name="image" class="text-center center-block file-upload">
  </div>
  <?php
  }
  ?>

  <button class="btn btn-sm btn-success" style="margin:14px 80px;" name="file" type="submit"><i class=""></i>Update</button>
  </form>
  <hr>
  <br>
  <div class="panel panel-default">
    <div class="panel-heading">Application <i class="fa fa-link fa-1x"></i></div>
    <div class="panel-body" style="font-weight:bold; font-size:15px; color: #212331;"><a href="<?php echo base_url()?>home/registration_form">Application</a></div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading">Application Status</div>
    <?php $data = $this->db->get('registration_form', $id)->result_array();
   foreach($data as $det)
   {

    if($det['status'] == ""){
    ?>
    <div class="panel-body">  <i class="fa fa-clock-o"></i>Not Submitted </div>
    <?php }
    ?>
<?php
if($det['status'] =="submitted"){
    ?>
    <div class="panel-body"  style="font-weight:bold; font-size:15px; color: #212331;">  <i class="fa fa-clock-o"></i> Submitted </div>
    <?php }
    ?>
    <?php

if($det['status'] == "approved"){
    ?>
    <div class="panel-body"  style="font-weight:bold; color: green"> <i class="fa fa-clock-o"></i>Approved </div>
    <?php }
    ?>
    

    <?php
    }
    ?>
  </div>
</div>
<!--/col-3-->
<div class="col-sm-9">
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
  <li><a data-toggle="tab" href="#messages">Personal Info</a></li>
  <li><a data-toggle="tab" href="#settings">Change Password</a></li>
</ul>
<div class="tab-content" style="border-bottom:none !important;">

<div class="tab-pane active" id="home">

<div class="box box-primary" style="height: 100%">
        <div class="text-body" style="overflow: visible;">

            <h3>Student Application</h3>
            <hr>
            <?php $data = $this->db->get('students', $id)->result_array();
   foreach($data as $det)
   {
     ?>

            <div class="box-body">
                <div class="form-group">
                    <div class="col-sm-6" style="color:black; font-size: 15px">
                        <label class="form-label" style="color:black; font-weight:bold; font-size: 17px">Registration Number:</label>
                        <?php echo $det['student_id']?>
                    </div>
                    <div class="col-sm-6" style="color:black; font-size: 15px">
                        <label class="form-label" style="color:black; font-weight:bold; font-size: 17px">Student Name:</label>
                        <?php echo $det['username']?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6" style="color:black; font-size: 15px">
                        <label class="form-label" style="color:black; font-weight:bold; font-size: 17px" >Date Registered:</label>
                            <div style="display: inline;">   <?php echo $det['date_registered']?></div>
                    </div>
                    <div class="col-sm-6" style="color:black; font-size: 15px" >
                        <label class="form-label" style="color:black; font-weight:bold; font-size: 17px">Mobile:</label>
                        <?php echo $det['phone']?>
                    </div>
                </div>
            </div>
            <?php
   }
   ?>
           <div class="col-md-10">
                <div class="box-body">
                    <blockquote>
                        <a class="btn btn-info btn-sm pull-right" href="<?php echo base_url()?>home/registration_form"  id="step1"><i class="fa fa-pencil"></i>&nbsp;Start</a>
                        <p>Student Basic Info Incomplete.</p>
                        <small>Start Application</small>
                    </blockquote>
                </div>
                </div>

        </div>
    </div>

 </div>
<!--/tab-pane-->
<div class="tab-pane" id="messages">
  <hr>
  <form class="form" action="" method="POST" id="registrationForm">
    <?php
                  $detail_reg = $this->db->get_where('registration_form', array('email'=>$login['email']))->result_array();
           foreach($detail_reg as $det_rg)
          
           {
             ?>
    <div class="form-group">
      <div class="col-xs-6">
        <label for="first_name">
        <h4>First name</h4>
        </label>
        <input type="text" value="<?php echo $det_rg['name']?>" class="form-control" name="first_name" id="first_name" placeholder="first name" readonly>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-6">
        <label for="last_name">
        <h4>Last name</h4>
        </label>
        <input type="text" value="<?php   echo $det_rg['last_name']?>" class="form-control" name="last_name" id="last_name" placeholder="last name" readonly>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-6">
        <label for="phone">
        <h4>Phone</h4>
        </label>
        <input type="text" value="<?php echo $det_rg['contact_no']?>" class="form-control" name="phone" id="phone" placeholder="enter phone" readonly>
      </div>
    </div>
    <?php
             $detail = $this->db->get_where('students', array('email'=>$login['email']))->result_array();
           foreach($detail as $det)
           
           {
             ?>
    <div class="form-group">
      <div class="col-xs-6">
        <label for="email">
        <h4>Email</h4>
        </label>
        <input type="email" value="<?php echo $det['email']?>" class="form-control" name="email" id="email" placeholder="enter phone" readonly>
      </div>
    </div>
    <?php
           }
           ?>
    <div class="form-group">
      <div class="col-xs-6">
        <label for="text">
        <h4>City</h4>
        </label>
        <input type="text"  value="<?php echo $det_rg['city']?>" class="form-control" name="city "id="location" placeholder="somewhere" readonly>
      </div>
    </div>
    <?php
           }
           ?>
  
  </form>
  <hr>
</div>
<!--/tab-pane-->
<div class="tab-pane" id="settings">
<hr>
<form class="form" action=""  method="POST" id="registrationForm">
<div class="form-group">
  <div class="col-xs-6">
  <label for="New Password">
        <h4>New Password</h4>
        </label>
    <input type="password"  name="password" class="form-control" id="password" placeholder="password" >
  </div>
</div>
<div class="form-group">
  <div class="col-xs-6">
  <label for="Confrim_Password">
        <h4>Confirm Password</h4>
        </label>
    <input type="password"  class="form-control"  id="confirm_password" placeholder="Confirm Password" >
  </div>
</div>
<div class="form-group">
  <div class="col-xs-12"> <br>
    <button class="btn btn-lg btn-success" name="pass" type="submit"><i class="fa fa-save"></i> Update Password</button>
  </div>
</div>
</div>
</div>
</form>
<hr>
<!--/tab-pane-->
</div>
<!--/tab-content-->
</div>
<!--/col-9-->
</div>
<!--/row-->
<script>

var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

</script>


<script>


$(document).ready(function() {

    
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});
});

</script>
