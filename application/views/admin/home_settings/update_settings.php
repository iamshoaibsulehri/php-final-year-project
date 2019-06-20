
<?php foreach($s_id as $st)
{
?>
<div class="row">
  <div class="col-md-12">
    <form method="POST" action="" enctype="multipart/form-data">
      <div class="form-group">
        <label class="" name="name" for="name"><?php echo $st['s_name']?></label>
        <input type="text" name="content" value="<?php echo $st['s_content']?>" class="form-control" id="content"/>
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
