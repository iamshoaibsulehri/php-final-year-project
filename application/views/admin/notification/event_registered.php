
<div class="container">
  
<a href="<?php echo base_url() ?>admin/add_event" style="float:right" class="btn btn-primary">Add New</button></a>
<br>
<hr>
<div class="row">
<div class="col-md-12">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No:</th>
                      <th>Name</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1;
               foreach($notification as $not) 
               {
            ?>
              
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <?php $reg_detail =  $this->db->get_where('event_register', array('register_id'=>$not['type_id']))->result_array();?>
                    
                    <td><?php if($reg_detail) { echo $reg_detail[0]['reg_name']; }?></td>
                     
                      <td style="text-align: right">
                      <a class="View" href="<?php echo base_url() ?>admin/registered_detail/<?php echo $not['type_id']; ?>"><button class="btn btn-info">View</button></i></a>
                      </td>
                      </td>
                    </tr>             
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              
</div>
</div>