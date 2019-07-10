<?php foreach($post_id as $id)
{
  ?>
<div class="row">
  <div class="col-md-12">
    <form method="POST" action="" enctype="multipart/form-data">
      <div class="form-group">
        <label class="" for="title">Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $id['post_title']?>" id="title"/>
      </div>
      <div class="form-group">
        <label class="" for="description">Description</label>
        <textarea  name="description"  id="editor"><?php echo $id['post_description']?> </textarea>
      </div>
      <div class="form-group">
        <label class="" for="author">Location</label>
        <input type="text" name="Location" class="form-control" value="<?php echo $id['location']?>" id="location"/>
      </div>
      <div class="form-group">
        <label class="" for="Tags">Tags</label>
        <input type="text" name="tags" class="form-control" value = "<?php echo $id['post_tags']?>" id="Tags"/>
      </div>
      <div class="form-group">
        <label class="" for="category">Category</label>
        <input type="text" name="category" class="form-control" value=" <?php echo $id['post_category']?>" id="category"/>
      </div>
      <div class="form-group">
        <label class="" for="photo">Photo</label>
        <input type="file" class="form-control" id="photo" value = "<?php echo $id['post_photo']?>" name="photo"/>
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
     ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
            
</script>