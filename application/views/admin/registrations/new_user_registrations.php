<div class="container">

<br>
<hr>
<div class="row">
<div class="col-md-12">
<table class="table" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No:</th>
                      <th>UserName</th>
                      <th>Email</th>
                      <th>Application Status</th>
                      <th>Photo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
            <?php $i = 1;
            $detail = $this->db->get('students')->result_array();
               foreach($detail as $det) 
               {
            ?>
                  <tbody>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $det['username']?></td>
                      <td><?php echo $det['email']?></td>
                      <td><?php echo $det['application_status']?></td>
                      <td><img src="<?php echo base_url() ?>uploads/student_profile/<?php echo $det['photo']; ?>" width="100" alt=""/></td>
                      <td style="text-align: right">
                      
                      <a class="View" href="<?php echo base_url() ?>admin/user_detail/<?php echo $det['student_id']; ?>"><button class="btn btn-info">View</button></i></a>
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