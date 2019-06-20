<div class="row">
  <div class="col-md-12">
    <form method="POST" action="" enctype="multipart/form-data">
      <div class="form-group">
        <label class="" for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name"/>
      </div>

      <div class="form-group">
        <label class="" for="faculty">Faculty</label>
        <select class="form-control" name= "faculty" id="faculty">
        <?php $faculty= $this->db->get('faculty')->result_array();
        foreach($faculty as $fac)
        { ?>
        <option value="<?php echo $fac['f_id'] ?>"> <?php echo $fac['f_title'] ?></option>
<?php
      }
     ?>
      </select>
      </div>
      
      <div class="form-group">
        <label class="" for="top_title">Top Title</label>
        <input type="text" name="top_title" class="form-control" id="top_title"/>
      </div>
      <div class="form-group">
        <label class="" for="top_description">Top Description</label>
        <input type="text" name="top_description" class="form-control" id="top_description"/>
      </div>
      <div class="form-group">
        <label class="" for="description">Description</label>
        <textarea  name="description"  id="editor"></textarea>
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