
<?php foreach($gallery_id as $id)
{
?>
<div class="row">
  <div class="col-md-12">
    <form method="POST" action="" enctype="multipart/form-data">
      <div class="form-group">
        <label class="" for="name">Name</label>
        <input type="text" name="name" value="<?php echo $id['g_name']?>" class="form-control" id="title"/>
      </div>

      <div class="form-group">
        <label class="" for="category">Category</label>
        <select class="form-control" name= "category" id="category">
        <?php $category= $this->db->get('category')->result_array();
        foreach($category as $cat)
       
        {
          ?>
          
        <option value="<?php echo $cat['cat_id'] ?>" <?php if($id['g_category'] == $cat['cat_id']){ echo "selected"; } ?> > <?php echo $cat['cat_name'] ?></option>
<?php
    }
     ?>
      </select>
      </div>

      <div class="form-group">
        <label class="" for="photo">Photo</label> 
        <input type="file" class="form-control" value = "<?php echo $id['photo']?>" id="photo" name="photo"/>
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