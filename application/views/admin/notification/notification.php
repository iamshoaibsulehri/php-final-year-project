<div class="container">
<br>
<hr>
<div class="row">
<div class="col-md-6">
<table class="table" id="" width="100%" cellspacing="0">
                  <thead>
                  <tr><th>Event Registrations</th></tr>
                    <tr>
                      <th>No:</th>
                      <th>Name</th>
                      <th>Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>
            <?php $i = 1;
               foreach($notification as $not) 
               {
            ?>
                  <tbody>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <?php $reg_detail =  $this->db->get_where('event_register', array('register_id'=>$not['type_id']))->result_array();?>
                      <td><?php if($reg_detail) { echo $reg_detail[0]['reg_name']; }?></td>
                      <td><?php echo $not['not_type']?></td>
                      <td style="text-align: right">
                      <a class="View" href="<?php echo base_url() ?>admin/registered_detail/<?php echo $not['type_id']; ?>"><button class="btn btn-info">View</button></i></a>
                      </td>
                    </tr>             
                    <?php
                  }
                  ?>
                  <tr style="text-align: right"><th></th><th></th> <th></th><th><a href="<?php echo base_url() ?>admin/registered_event"><button class="btn btn-danger">View All Notification</button></th></tr>
                  </tbody>
                  
                </table>
              
</div>
</div>