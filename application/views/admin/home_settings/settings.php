
<div class="row">
  <div class="col-md-12">
    <form method="POST" action="" enctype="multipart/form-data">
<!-- Marque for Header -->
    <?php $data1 = $this->db->get_where('home_settings' , array('s_id'=>1))->result_array();
    foreach ($data1 as $data)
    {
    ?>
      <div class="form-group">
        <label class="" for="name"><?php echo $data['s_name']?></label> <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/update_setting/<?php echo $data['s_id']; ?>"><i class="fa fa-edit"></i></a>
        <input type="text" name="name" value="<?php echo $data['s_content']?>" class="form-control" id="name" readonly/>
      </div>
    <?php } ?>
<!-- End Marque -->

<!-- phone -->
<?php $data1 = $this->db->get_where('home_settings' , array('s_id'=>6))->result_array();
    foreach ($data1 as $data)
    {
    ?>
      <div class="form-group">
        <label class="" for="name"><?php echo $data['s_name']?></label> <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/update_setting/<?php echo $data['s_id']; ?>"><i class="fa fa-edit"></i></a>
        <input type="text" name="name" value="<?php echo $data['s_content']?>" class="form-control" id="name" readonly/>
      </div>
    <?php } ?>
<!-- End phone -->
<!-- Email -->
<?php $data1 = $this->db->get_where('home_settings' , array('s_id'=>7))->result_array();
    foreach ($data1 as $data)
    {
    ?>
      <div class="form-group">
        <label class="" for="name"><?php echo $data['s_name']?></label> <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/update_setting/<?php echo $data['s_id']; ?>"><i class="fa fa-edit"></i></a>
        <input type="text" name="name" value="<?php echo $data['s_content']?>" class="form-control" id="name" readonly/>
      </div>
    <?php } ?>
<!-- End Email -->
<!-- Address -->
<?php $data1 = $this->db->get_where('home_settings' , array('s_id'=>8))->result_array();
    foreach ($data1 as $data)
    {
    ?>
      <div class="form-group">
        <label class="" for="name"><?php echo $data['s_name']?></label> <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/update_setting/<?php echo $data['s_id']; ?>"><i class="fa fa-edit"></i></a>
        <input type="text" name="name" value="<?php echo $data['s_content']?>" class="form-control" id="name" readonly/>
      </div>
    <?php } ?>
<!-- End Address -->

<!-- Fact 1 -->
    <?php $data1 = $this->db->get_where('home_settings' , array('s_id'=>2))->result_array();
    foreach ($data1 as $data)
    {
    ?>
      <div class="form-group">
        <label class="" for="name"><?php echo $data['s_name']?></label> <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/update_setting/<?php echo $data['s_id']; ?>"><i class="fa fa-edit"></i></a>
        <input type="text" name="name" value="<?php echo $data['s_content']?>" class="form-control" id="name" readonly/>
      </div>
    <?php } ?>
    <!-- end -->

    <!-- Fact 2 -->
    <?php $data1 = $this->db->get_where('home_settings' , array('s_id'=>3))->result_array();
    foreach ($data1 as $data)
    {
    ?>
      <div class="form-group">
        <label class="" for="name"><?php echo $data['s_name']?></label> <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/update_setting/<?php echo $data['s_id']; ?>"><i class="fa fa-edit"></i></a>
        <input type="text" name="name" value="<?php echo $data['s_content']?>" class="form-control" id="name" readonly/>
      </div>
    <?php } ?>
    <!-- End -->
 <!-- Fact 3 -->
<?php $data1 = $this->db->get_where('home_settings' , array('s_id'=>4))->result_array();
    foreach ($data1 as $data)
    {
    ?>
      <div class="form-group">
        <label class="" for="name"><?php echo $data['s_name']?></label> <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/update_setting/<?php echo $data['s_id']; ?>"><i class="fa fa-edit"></i></a>
        <input type="text" name="name" value="<?php echo $data['s_content']?>" class="form-control" id="name" readonly/>
      </div>
    <?php } ?>  
    <!-- end -->

    <!-- Fact 4 -->
    <?php $data1 =$this->db->get_where('home_settings' , array('s_id'=>5))->result_array();
    foreach ($data1 as $data)
    {
    ?>
      <div class="form-group">
        <label class="" for="name"><?php echo $data['s_name']?></label> <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/update_setting/<?php echo $data['s_id']; ?>"><i class="fa fa-edit"></i></a>
        <input type="text" name="name" value="<?php echo $data['s_content']?>" class="form-control" id="name" readonly/>
      </div>
    <?php } ?>  
    <!-- end -->
   
    
    </form>
  </div>
</div>

