<div class="container">
<br>
<hr>
<div class="row">
<div class="col-md-6">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

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
                  <tr style="text-align: right"><th colspan="4"><a href="<?php echo base_url() ?>admin/registered_event"><button class="btn btn-danger btn-sm">View All Notification</button></a></th></tr>
                  </tbody>
                  
                </table>
                
              
</div>

<!-- New Users Registrations -->
<div class="col-md-6">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>
                  <tr><th>New User Registrations</th></tr>
                    <tr>
                      <th>No:</th>
                      <th>Name</th>
                      <th>Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>
            <?php $i = 1;
                        $detail = $this->db->get_where('notifications', array('not_type'=>'User Registration'))->result_array();
               foreach($detail as $not) 
               {
            ?>
                  <tbody>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <?php $reg_detail =  $this->db->get_where('event_register', array('register_id'=>$not['type_id']))->result_array();?>
                      <td><?php if($reg_detail) { echo $reg_detail[0]['reg_name']; }?></td>
                      <td><?php echo $not['not_type']?></td>
                      <td style="text-align: right">
                      <a class="View" href="<?php echo base_url() ?>admin/user_detail/<?php echo $not['type_id']; ?>"><button class="btn btn-info">View</button></i></a>
                      </td>
                    </tr>             
                    <?php
                  }
                  ?>
                  <tr style="text-align: right"><th colspan="4"><a href="<?php echo base_url() ?>admin/new_user_registrations"><button class="btn btn-danger btn-sm">View All Notification</button></a></th></tr>
                  </tbody>
                  
                </table>
                
              
</div>

</div>




