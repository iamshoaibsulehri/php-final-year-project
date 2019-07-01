<hr>
<div class="container bootstrap snippet">
<div class="row">
<div class="col-sm-3">
  <!--left col-->
  <div class="text-center"> <img src ="<?php echo base_url()?>templates/front/fonts/login/form.png" class="avatar img-circle img-thumbnail" alt="avatar">
    <h6>Upload a different photo...</h6>
    <input type="file" name="image" class="text-center center-block file-upload">
  </div>
  <hr>
  <br>
  <div class="panel panel-default">
    <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
    <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
  </div>
  <ul class="list-group">
    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
    <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
    <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
    <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
    <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
  </ul>
  <div class="panel panel-default">
    <div class="panel-heading">Social Media</div>
    <div class="panel-body"> <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i> </div>
  </div>
</div>
<!--/col-3-->
<div class="col-sm-9">
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
  <li><a data-toggle="tab" href="#messages">Edit Profile</a></li>
  <li><a data-toggle="tab" href="#settings">Change Password</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="home"> </div>
<!--/tab-pane-->
<div class="tab-pane" id="messages">
  <hr>
  <form class="form" action="##" method="POST" id="registrationForm">
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
        <input type="text" value="<?php echo $det_rg['name']?>" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-6">
        <label for="last_name">
        <h4>Last name</h4>
        </label>
        <input type="text" value="<?php   echo $det_rg['last_name']?>" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-6">
        <label for="phone">
        <h4>Phone</h4>
        </label>
        <input type="text" value="<?php echo $det_rg['contact_no']?>" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
      </div>
    </div>
    <?php
             $detail = $this->db->get_where('students', array('email'=>$login['email']))->result_array();
           foreach($detail as $det)
           
           {
             ?>
    <div class="form-group">
      <div class="col-xs-6">
        <label for="phone">
        <h4>Email</h4>
        </label>
        <input type="email" value="<?php echo $det['email']?>" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
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
        <input type="text"  value="<?php echo $det_rg['city']?>" class="form-control" id="location" placeholder="somewhere" title="enter a location">
      </div>
    </div>
    <?php
           }
           ?>
    <div class="form-group">
      <div class="col-xs-12"> <br>
        <button class="btn btn-lg btn-success" type="submit"><i class="fa fa-save"></i> Save</button>
   
      </div>
    </div>
  </form>
  <hr>
</div>
<!--/tab-pane-->
<div class="tab-pane" id="settings">
<form class="form" action="##" method="POST" id="registrationForm">
<div class="form-group">
  <div class="col-xs-6">
    <label for="password">Password</label>
    <input type="password"  class="form-control" id="password" placeholder="password" >
  </div>
</div>
<div class="form-group">
  <div class="col-xs-6">
    <label for="password">Password</label>
    <input type="password"  class="form-control" id="confirm_password" placeholder="Confirm Password" >
  </div>
</div>
<div class="form-group">
  <div class="col-xs-12"> <br>
    <button class="btn btn-lg btn-success" type="submit"><i class="fa fa-save"></i> Save</button>
  </div>
</div>
</div>
</div>
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
