<div class="row">
  <div class="col-md-12">
  <form method="POST" action="" enctype="multipart/form-data">
    <div class = "form-group">
    <label class="" for="name">Name</label>
    <input type="text" name = "name" class = "form-control" id="name" />
    </div>
    <div class = "form-group">
    <label class="" for="desig">Designation</label>
    <input type="text" name = "desig" class = "form-control" id="desig" />
    </div>
    <div class = "form-group">
    <label class="" for="description">Description</label>
    <textarea  name="description"  id="editor"></textarea>
    </div>

    <div class = "form-group">
    <label class="" for="biography">Biography</label>
    <textarea  name="biography"  id="editor2"></textarea>
    </div>

    <div class="form-group">
        <label class="" for="department">Department</label>
        <select class="form-control" name= "department" id="department">
        <?php $departments= $this->db->get('department')->result_array();
        foreach($departments as $department)
        { ?>
        <option value="<?php echo $department['d_id'] ?>"> <?php echo $department['d_name'] ?></option>
<?php
      }
     ?>
      </select>
      </div>

  
    
    <div class = "form-group">
    <label class="" for="address">Address</label>
    <input type="text" name = "address" class = "form-control" id="address" />
    </div>
    <div class = "form-group">
    <label class="" for="contact">Contact No:</label>
    <input type="text" name = "contact" class = "form-control" id="contact" />
    </div>
    <div class = "form-group">
    <label class="" for="qualification">Qualification</label>
    <input type="text" name = "Qualification" class = "form-control" id="Qualification" />
    </div>
    <div class = "form-group">
    <label class="" for="research">Research</label>
    <input type="text" name = "research" class = "form-control" id="research" />
    </div>
    <p><strong>Login Information</strong></p>
    <div class = "form-group">
    <label class="" for="mail">Mail Address</label>
    <input type="text" name = "mail" class = "form-control" id="mail" />
    </div>
    <div class = "form-group">
    <label class="" for="password">Password</label>
    <input type="password" name = "password" class = "form-control" id="password" />
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
<script>
     ClassicEditor
            .create( document.querySelector( '#editor2' ) )
            .catch( error => {
                console.error( error );
            } );
</script>