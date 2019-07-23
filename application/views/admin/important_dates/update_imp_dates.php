<?php foreach($imp_id as $id)
{
  ?>
<div class="row">
  <div class="col-md-12">
    <form method="POST" action="" enctype="multipart/form-data">
      <div class="form-group">
      <div class="form-group">
        <label class="" for="title">Title</label>
        <input type="text" name="title" value="<?php echo $id['title']?>" class="form-control" id="title"/>
      </div>
      <div class="form-group">
        <label class="" for="notification">Date Notifications</label>
        <input type="text" name="notification" value="<?php echo $id['notification']?>" class="form-control" id="title"/>
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
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
            
</script>