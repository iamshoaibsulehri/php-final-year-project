<div class="container">
<a href="<?php echo base_url() ?>admin/add_department" style="float:right" class="btn btn-primary">Add New</button></a>
<br>
<hr>
<div class="row">
<div class="col-md-12">
<table class="table" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No:</th>
                      <th>Name</th>
                      <th>Photo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
            <?php $i = 1;
               foreach($depart as $department) 
               {
            ?>
                  <tbody>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $department['d_name']?></td>
                      
                      <td><img src="<?php echo base_url() ?>uploads/department/<?php echo $department['d_photo']; ?>" width="100" alt=""/></td>
                      <td style="text-align: right">
                      <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/update_department/<?php echo $department['d_id']; ?>"><i class="fa fa-edit"></i></a>
                      <a class="t_trash" href="<?php echo base_url() ?>admin/delete_department/<?php echo $department['d_id']; ?>"><i class="fa fa-trash"></i></a>
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