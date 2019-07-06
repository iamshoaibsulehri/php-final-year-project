
      
<!-- Start main-content -->
<div class="main-content">
	<!-- Section: inner-header -->
	<section class="inner-header divider layer-overlay overlay-theme-colored-7" style="background-image: url(
      
		<?php echo base_url()?>templates/front/images/course/edit_top.jpg);">
		<div class="container pt-120 pb-60">
			<!-- Section Content -->
			<div class="section-content">
				<div class="row">
					<div class="col-md-6">
						<h2 class="text-theme-colored2 font-36">Edit profile</h2>
						<ol class="breadcrumb text-left mt-10 white">
							<li>
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Pages</a>
							</li>
							<li class="active">Edit Profile</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Section: Doctor Details -->
	<section class="">
		<div class="container">
			<div class="section-content">
				<div class="row">
<?php 
foreach($t_detail as $detail)
{
?>
<form name="editprofile-form" method="POST" enctype="multipart/form-data">
    <div class="col-sx-12 col-sm-3 col-md-3">
      <div class="doctor-thumb">
        <img src="
          <?php echo base_url() ?>uploads/teacher/<?php echo $detail['t_photo'] ?>" style="width: 100%;" alt="">
        </div>
        <div class="info p-20 bg-black-333">
          <h4 class="text-uppercase text-white">
            <?php echo $detail['t_name'] ?>
          </h4>
          <p class="text-gray-silver">
            <?php echo $detail['t_desig'] ?>
          </p>
          <ul class="list angle-double-right m-0">
            <li class="mt-0 text-gray-silver">
              <strong class="text-gray-lighter">Email</strong>
              <br>
                <?php echo $detail['email'] ?>
              </li>
              <li class="text-gray-silver">
                <strong class="text-gray-lighter">Phone</strong>
                <br>
                  <?php echo $detail['t_contact'] ?>
                </li>
              </ul>
           
              <a class="btn btn-danger btn-flat mt-10 mb-sm-30" href="<?php echo base_url()?>home/teacher_logout">Logout</a>
            </div>
          </div>
     
<div class="col-xs-12 col-sm-9 col-md-9">

<div class="icon-box mb-0 p-0">
<a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
<i class="fa fa-user"></i>
</a>
<h4 class="text-gray pt-10 mt-0 mb-30">Edit Profile</h4>
</div>
<hr>
<p class="text-gray"><?php echo $detail['t_desig'] ?>
</p>
<div class="row">
<div class="form-group col-md-6">
<label>Name</label>
<input name="name" value="<?php echo $detail['t_name'] ?>" class="form-control" type="text">
</div>
<div class="form-group col-md-6">
<label>Email</label>
<input name="mail"value="

<?php echo $detail['email'] ?>" class="form-control" type="email">
</div>
</div>
<div class="row">
<div class="form-group col-md-6">
<label>Phone</label>
<input name="contact" value="<?php echo $detail['t_contact'] ?>" class="form-control" type="text">
</div>
<div class="form-group col-md-6">
  <label class="" for="department">Department</label>
  <select class="form-control" name= "department" id="department">
    <?php $departments= $this->db->get('department')->result_array();
foreach($departments as $department)
{ ?>
    <option value="<?php echo $department['d_id'] ?>" <?php if($detail['t_department'] == $department['d_id']){ echo "selected"; } ?>><?php echo $department['d_name'] ?>
    </option>
    <?php
}
?>
  </select>
</div>
</div>
<div class="row">
<div class="form-group col-md-12">
  <label>Descrition</label>
  <textarea name="description"  class="form-control" cols="20" rows="5">
   <?php echo $detail['t_description'] ?>
  </textarea>
</div>
</div>
<div class="row">
<div class="form-group col-md-12">
  <label>Address</label>
  <input name="address" value="<?php echo $detail['t_address'] ?>" class="form-control" type="text">
  </div>
</div>

<div class="form-group">
  <label class="" style="display: block;">
    <strong>Acedemics Detail</strong>
  </label>
  <div class="row">
  <div class="col-md-4">
    Degree
</div>
 <div class="col-md-4 margin1" style="margin-left:-26px;">
    Institute
</div>
<div class="col-md-4 margin2" style="margin-left:-26px;"> 
    Year
</div>
</div>

<div class="items">
<?php
if($detail['t_qualification']!=Null){
$t_details = json_decode($detail['t_qualification']);
foreach($t_details as $t_detail){
?>
  <div class="row csht">
    <div class="col-md-11">
      <div class="row">
        <div class="col-md-4">
          <input type="text" class="form-control" value="<?php echo $t_detail->degree; ?>" name="degree[]">
          </div>
          <div class="col-md-4">
          <input type="text" class="form-control" value="<?php echo $t_detail->institute; ?>" name="institute[]">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" value=" <?php echo $t_detail->year; ?>" name="year[]">
              </div>
            </div>
          </div>
          <div class="col-md-1">
            <a href="#" class="remove_field">
              <i class="fa fa-times"></i>
            </a>
          </div>
        </div>
        <?php 
        }
       } ?>
      </div>
      <button type="button" class="add_field_button">Add Field</button>
    </div>
    
 <div class="form-group">
  <label class="" style="display: block;">
    <strong>Teaching Experience</strong>
  </label>
  <div class="row">
  <div class="col-md-4">
    Post
</div>
 <div class="col-md-4 margin1" style="margin-left:-26px;">
    Institute
</div>
<div class="col-md-4 margin2" style="margin-left:-26px;"> 
    Year
</div>

</div>

<div class="items1">
<?php
if($detail['t_experience']!=Null){
$e_detail = json_decode($detail['t_experience']);
foreach($e_detail as $te_detail){
?>
  <div class="row exp">
    <div class="col-md-11">
      <div class="row">
        <div class="col-md-4">
          <input type="text" class="form-control" value="<?php echo $te_detail->position; ?>" name="position[]">
          </div>
          <div class="col-md-4">
          <input type="text" class="form-control" value="<?php echo $te_detail->einstitute; ?>" name="e_institute[]">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" value=" <?php echo $te_detail->eyear; ?>" name="e_year[]">
              </div>
            </div>
          </div>
          <div class="col-md-1">
            <a href="#" class="remove_field">
              <i class="fa fa-times"></i>
            </a>
          </div>
        </div>
        <?php 
        }
       } ?>
      </div>
      <button type="button" class="add_field_button_exp">Add Field</button>
    </div>
    

    <div class="form-group">
      <button class="btn btn-dark btn-lg mt-15" name="perinfo" type="submit">Update</button>
    </div>
    <?php
        }
        ?>
  </form>


  <hr class="mt-70 mb-70">
    <form name="editprofile-form2"  method="POST" enctype="multipart/form-data">
      <div class="icon-box mb-0 p-0">
        <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
          <i class="fa fa-key"></i>
        </a>
        <h4 class="text-gray pt-10 mt-0 mb-30">Change Password</h4>
      </div>
      <hr>
        <p class="text-gray"></p>
        <div class="row">
          <div class="form-group col-md-6">
            <label>Choose Password</label>
            <input name="password" id="password" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
              <label>Re-enter Password</label>
              <input  name="confirm_password"  id="confirm_password" class="form-control" type="text">
              </div>
            </div>
           
              <div class="form-group">
                <button class="btn btn-dark btn-lg mt-15" name="upass" type="submit">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- end main-content -->
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
var max_fields = 20; //maximum input boxes allowed
var wrapper = $(".items"); //Fields wrapper
var add_button = $(".add_field_button"); //Add button ID
 
var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click

e.preventDefault();
x++; //text box increment
$(wrapper).append(' <div class="row csht"> <div class="col-md-11"> <div class="row"> <div class="col-md-4"> <input type="text" class="form-control" name="degree[]"> </div> <div class="col-md-4"> <input type="text" class="form-control" name="institute[]"> </div> <div class="col-md-4"><input type="text" class="form-control" name="year[]"> </div></div> </div><div class="col-md-1"><a href="#" class="remove_field"><i class="fa fa-times"></i></a></div></div>'); //add input box
});
 
$(wrapper).on("click",".remove_field", function(e){ //user click on remove field
e.preventDefault(); $(this).closest('.csht').remove(); x--;
})
});
</script>

<script>
$(document).ready(function() {
var max_fields = 20; //maximum input boxes allowed
var wrapper = $(".items1"); //Fields wrapper
var add_button = $(".add_field_button_exp"); //Add button ID
 
var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click

e.preventDefault();
x++; //text box increment
$(wrapper).append(' <div class="row exp"> <div class="col-md-11"><div class="row"> <div class="col-md-4"> <input type="text" class="form-control" name="position[]"> </div> <div class="col-md-4"> <input type="text" class="form-control" name="einstitute[]"> </div> <div class="col-md-4"><input type="text" class="form-control" name="eyear[]"> </div></div> </div><div class="col-md-1"><a href="#" class="remove_field"><i class="fa fa-times"></i></a></div></div>'); //add input box
});
 
$(wrapper).on("click",".remove_field", function(e){ //user click on remove field
e.preventDefault(); $(this).closest('.exp').remove(); x--;
})
});
</script>
