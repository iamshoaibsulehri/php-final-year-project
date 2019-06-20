<div class="row">
  <div class="col-md-12">
    <form method="POST" action="" enctype="multipart/form-data">
      <div class="form-group">
        <label class="" for="name">Name</label>
        <input type="text" name="name" class="form-control" id="title"/>
      </div>
     
      <div class="form-group">
        <label class="" for="category">Category</label>
        <select class="form-control" name= "category" id="category">
        <?php $category= $this->db->get('category')->result_array();
        foreach($category as $cat)
        { ?>
        <option value="<?php echo $cat['cat_id'] ?>" > <?php echo $cat['cat_name'] ?></option>
<?php
      }
     ?>
      </select>
      </div>

      <div class="form-group">
        <label class="" for="photo">Photo</label>
        <input type="file" name="photo" class="form-control" id="userfile" name=""/>
      </div>
      
    <div class="form-group">
        <input type="Submit" class="form-control btn btn-info btn-icon-split" id="submit" name="submit"/>
    </div>
    
    </form>
  </div>
</div>








<script>
     ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
</script>