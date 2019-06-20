<div class ="container">
    
<a href="<?php echo base_url() ?>admin/add_user" style="float:right" class="btn btn-primary">Add New</button></a>
<br>
<hr>
<div class="row">
<div class="col-md-12">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No:</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
               
                  <tbody>
                  <?php
                  $i = 1;
                  foreach($users as $user){
                  ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $user['first_name'] ?> <?php echo $user['last_name'] ?></td>
                      <td><?php echo $user['username']; ?></td>
                      <td><img src="<?php echo base_url() ?>uploads/user/<?php echo $user['photo']; ?>" width="100" alt=""/></td>
                      
                      <td style="text-align: right">
                      <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/update_user/<?php echo $user['user_id']; ?>"><i class="fa fa-edit"></i></a>
                      <a class="t_trash" href="<?php echo base_url() ?>admin/delete_user/<?php echo $user['user_id']; ?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                  }
                    ?>
                  </tbody>
                </table>
              
</div>
</div>
                </div>