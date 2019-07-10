<?php foreach($register_detail as $detail)
{
  ?>
<div class="row">
  <div class="col-md-12">
    <form method="POST" action="" enctype="multipart/form-data">
    
      <div class="form-group">
        <label class="" for="name">Name</label>
        <input type="text" name="name" value="<?php echo $detail['reg_name']?>" class="form-control" id="top_title"/>
      </div>
      <div class="form-group">
        <label class="" for="email">Top Description</label>
        <input type="text" name="email" value="<?php echo $detail['reg_email']?>" class="form-control" id="top_description"/>
      </div>
      <div class="form-group">
        <label class="" for="phone">Phone</label>
        <input type="text" name="phone" value="<?php echo $detail['reg_phone']?>" class="form-control" id="top_description"/>
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





