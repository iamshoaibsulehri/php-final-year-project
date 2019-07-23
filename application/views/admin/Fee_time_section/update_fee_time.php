
<div class="row">
  <div class="col-md-12">
  <?php 
foreach($tf_id as $detail)
{
  ?>
    <form method="POST" action="" enctype="multipart/form-data">
      <div class="form-group">
        <label class=""  for="category">Category</label>
        <select class="form-control" name= "category" id="category">
        <?php $category= $this->db->get('course_category')->result_array();
        foreach($category as $cat)
        { ?>
        <option value="<?php echo $detail['program_category'] ?>" <?php if($detail['program_category']== $cat['c_id']){ echo "selected"; } ?>> <?php echo $cat['c_name'] ?></option>
<?php
      }
     ?>
      </select>
      </div>
      
      <div class="form-group">
          <label class="" for="program">Program</label>
          <select class="form-control" name= "program" id="program">
        <?php $program= $this->db->get('program')->result_array();
        foreach($program as $pro)
        { ?>
        <option value="<?php echo $pro['p_id'] ?>" <?php if($pro['p_id'] == $detail['tf_program']){ echo "selected"; } ?>> <?php echo $pro['p_name'] ?></option>
<?php
      }
     ?>
      </select>
        </div>
      <div class="form-group">
          <label class="" for="fee">Total Fee</label>
          <input type="text"  value="<?php echo $detail['tf_fee'] ?>"  name="fee" class="form-control" id="fee"/>
        </div>
        <div class="form-group">
          <label class="" for="fee">Total Credit Hours</label>
          <input type="text"  value="<?php echo $detail['tf_credit'] ?>"  name="credit" class="form-control" id="credit"/>
        </div>
        <div class="form-group">
          <label class="" for="file">Upload Time Table File</label>
          <input type="file" class="form-control" id="file" name="file"/>
        </div>
      <div class="form-group">
          <input type="Submit" class="form-control btn btn-info btn-icon-split" id="submit" name="submit"/>
      </div>
      
    </form>
    <?php
    }
    ?>
  </div>
</div>
