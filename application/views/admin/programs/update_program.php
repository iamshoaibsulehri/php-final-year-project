<?php foreach($p_id as $id)
{
  ?>
<div class="row">
  <div class="col-md-12">
    <form method="POST" action="" enctype="multipart/form-data">
      <div class="form-group">
        <label class="" for="name">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $id['p_name']?>" id="name"/>
      </div>
      <div class="form-group">
        <label class="" for="department">Department</label>
        <select class="form-control" name= "department" id="department">
        <?php $departments= $this->db->get('department')->result_array();
        foreach($departments as $department)
        { ?>
        <option value="<?php echo $department['d_id'] ?>" <?php if($id['p_department'] == $department['d_id']){ echo "selected"; } ?>> <?php echo $department['d_name'] ?></option>
<?php
      }
     ?>
      </select>
      </div>
      <div class="form-group">
        <label class="" for="category">Category</label>
        <select class="form-control" value="<?php echo $id['p_category']?>" name= "category" id="category">
        
        <?php $category= $this->db->get('course_category')->result_array();
        foreach($category as $cat)
        { ?>
        <option value="<?php echo $cat['c_id'] ?>" <?php if($id['p_category'] == $cat['c_id']){ echo "selected"; } ?>> <?php echo $cat['c_name'] ?></option>
<?php
      }
     ?>
      </select>
      </div>
      <div class="form-group">
        <label class="" for="credit">Course Credit</label>
        <input type="text" name="credit" class="form-control" value="<?php echo $id['p_credit']?>" id="credit"/>
      </div>
      <div class="form-group">
        <label class="" for="samester">Samester</label>
        <input type="text" name="samester" class="form-control" value="<?php echo $id['p_samester']?>" id="samester"/>
      </div>
     <div class="form-group">
        <label class="" for="status">Admission Status</label>
        <input type="text" name="status" class="form-control" value="<?php echo $id['ad_status']?>" id="status"/>
      </div>
      <div class="form-group">
        <label class="" for="duration">Duration</label>
        <input type="text" name="duration" class="form-control" value="<?php echo $id['p_duration']?>" id="duration"/>
      </div>
      
      <div class="form-group">
        <label class="" for="description">Description</label>
        <textarea  name="description"  id="description"><?php echo $id['p_description']?> </textarea>
      </div>
      <div class="form-group">
      <label class="text-center" style="display: block;"><strong>Fee Structure</strong></label>
      <div class="row">
      <div class="col-md-4">
      Year
      </div>
      <div class="col-md-4">
      Samester
      </div>
      <div class="col-md-4">
      Fee
      </div>
      </div>
      <div class="items">
      <?php
       $fee_array = json_decode($id['p_fee']);
       
       foreach($fee_array as $fee){
      ?>
     
        <div class="row csht">
        <div class="col-md-11">
      <div class="row">
      <div class="col-md-4">
      <input type="text" class="form-control" value="<?php echo $fee->year; ?>" name="fee_year[]">
      </div>
      <div class="col-md-4">
      <input type="text" class="form-control" value="<?php echo $fee->samester; ?>" name="fee_samester[]">
      </div>
      <div class="col-md-4">
      <input type="text" class="form-control" value="<?php echo $fee->fee; ?>" name="fee_fee[]">
      </div>
      </div>
      </div>
      <div class="col-md-1"><a href="#" class="remove_field"><i class="fa fa-times"></i></a></div>
      </div>
     
       <?php } ?>
       </div>
    
 
 <button type="button" class="add_field_button">Add Field</button>
      </div>
      <div class="form-group">
        <label class="" for="criteria">Eligibility Criteria</label>
        <textarea  name="criteria"  id="criteria"><?php echo $id['p_criteria']?> </textarea>
      </div>

      <div class="form-group">
        <label class="" for="photo">Photo</label>
        <input type="file" class="form-control" id="photo" value = "<?php echo $id['p_photo']?>" name="photo"/>
      </div>
    <div class="form-group">
        <input type="Submit" class="form-control btn btn-info btn-icon-split" id="submit" name="submit"/>
    </div>
    
    </form>
  </div>
</div>

<?php
}
?>



<script>

$(document).ready(function() {
var max_fields = 20; //maximum input boxes allowed
var wrapper = $(".items"); //Fields wrapper
var add_button = $(".add_field_button"); //Add button ID
 
var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click

e.preventDefault();
x++; //text box increment
$(wrapper).append(' <div class="row csht"> <div class="col-md-11"> <div class="row"> <div class="col-md-4"> <input type="text" class="form-control" name="fee_year[]"> </div> <div class="col-md-4"> <input type="text" class="form-control" name="fee_samester[]"> </div> <div class="col-md-4"> <input type="text" class="form-control" name="fee_fee[]"> </div></div> </div><div class="col-md-1"><a href="#" class="remove_field"><i class="fa fa-times"></i></a></div></div>'); //add input box
});
 
$(wrapper).on("click",".remove_field", function(e){ //user click on remove field
e.preventDefault(); $(this).closest('.csht').remove(); x--;
})
});

</script>


<script>
     ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
</script>
<script>
     ClassicEditor
            .create( document.querySelector( '#criteria' ) )
            .catch( error => {
                console.error( error );
            } );
</script>