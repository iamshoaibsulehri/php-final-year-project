<div class="row">
  <div class="col-md-12">
    <form method="POST" action="" enctype="multipart/form-data">
      <div class="form-group">
        <label class="" for="category">Category</label>
        <select class="form-control" name= "category" id="category">
        <?php $category= $this->db->get('course_category')->result_array();
        foreach($category as $cat)
        { ?>
        <option value="<?php echo $cat['c_id'] ?>"> <?php echo $cat['c_name'] ?></option>
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
        <option value="<?php echo $pro['p_id'] ?>"> <?php echo $pro['p_name'] ?></option>
<?php
      }
     ?>
      </select>
        </div>
      <div class="form-group">
          <label class="" for="fee">Total Fee</label>
          <input type="text" name="fee" class="form-control" id="fee"/>
        </div>
        <div class="form-group">
          <label class="" for="fee">Total Credit Hours</label>
          <input type="text" name="credit" class="form-control" id="credit"/>
        </div>
        <div class="form-group">
          <label class="" for="file">Upload Time Table File</label>
          <input type="file" class="form-control" id="file" name="file"/>
        </div>
      <div class="form-group">
          <input type="Submit" class="form-control btn btn-info btn-icon-split" id="submit" name="submit"/>
      </div>
      
    </form>
  </div>
</div>
