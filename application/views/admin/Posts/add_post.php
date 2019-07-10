<div class="row">
  <div class="col-md-12">
    <form method="POST" action="" enctype="multipart/form-data">
      <div class="form-group">
        <label class="" for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title"/>
      </div>
      <div class="form-group">
        <label class="" for="description">Description</label>
        <textarea  name="description"  id="editor"></textarea>
      </div>
      <div class="form-group">
        <label class="" for="location">Location</label>
        <input type="text" name="location" class="form-control" id="location"/>
      </div>
      <div class="form-group">
        <label class="" for="Tags">Tags</label>
        <input type="text" name="tags" class="form-control" id="Tags"/>
      </div>
      <div class="form-group">
        <label class="" for="category">Category</label>
        <select class="form-control" name= "category" id="category">
        <?php $category= $this->db->get('category')->result_array();
        foreach($category as $cat)
        { ?>
        <option value="<?php echo $cat['cat_id'] ?>"> <?php echo $cat['cat_name'] ?></option>
<?php
      }
     ?>
      </select>
      </div>
      <div class="form-group">
        <label class="" for="photo">Photo</label>
        <input type="file" class="form-control" id="photo" name="photo"/>
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