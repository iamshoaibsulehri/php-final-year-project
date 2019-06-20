
<?php foreach($tee_id as $id)
{
?>
<div class="row">
  <div class="col-md-12">
    <form method="POST" action="" enctype="multipart/form-data">
      <div class="form-group">
        <label class="" for="name">Name</label>
        <input type="text" name="name" value="<?php echo $id['t_name']?>" class="form-control" id="title"/>
      </div>
      <div class="form-group">
        <label class="" for="desig">Designation</label>
        <input type="text" name="desig"   value="<?php echo $id['t_desig']?>" class="form-control" id="desig"/>
      </div>
      <div class="form-group">
        <label class="" for="description">Description</label>
        <textarea  name="description"  id="editor"><?php echo $id['t_description']?></textarea>
      </div>
      <div class="form-group">
        <label class="" for="photo">Photo</label>
        <input type="file" class="form-control" value = "<?php echo $id['t_photo']?>" id="photo" name="photo"/>
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