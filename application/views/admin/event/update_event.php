<?php foreach($event_id as $event)
{
  ?>
<div class="row">
  <div class="col-md-12">
    <form method="POST" action="" enctype="multipart/form-data">
      <div class="form-group">
        <label class="" for="title">Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $event['event_title']?>" id="title"/>
      </div>
      <div class="form-group">
        <label class="" for="description">Description</label>
        <textarea  name="description"  id="editor"><?php echo $event['event_description']?> </textarea>
      </div>
      <div class="form-group">
        <label class="" for="location">Location</label>
        <input type="text" name="location" class="form-control" value="<?php echo $event['event_location']?>" id="location"/>
      </div>
      <div class="form-group">
        <label class="" for="date">Date</label>
        <input type="date" value="<?php echo $event['event_date']?>" name="date" class="form-control" id="date"/>
      </div>
      <div class="form-group">
        <label class="" for="date">Start Time</label>
        <input type="time" value="<?php echo $event['start_time']?>" name="start_time" class="form-control" id="date"/>
      </div>
      <div class="form-group">
        <label class="" for="date">End Time</label>
        <input type="time" value="<?php echo $event['end_time']?>" name="end_time" class="form-control" id="date"/>
      </div>
      <div class="form-group">
        <label class="" for="category">Category</label>
        <input type="text" name="category" class="form-control" value=" <?php echo  $event['event_category']?>" id="category"/>
      </div>
      <div class="form-group">
        <label class="" for="photo">Photo</label>
        <input type="file" class="form-control" id="photo" value = "<?php echo $event['event_photo']?>" name="photo"/>
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