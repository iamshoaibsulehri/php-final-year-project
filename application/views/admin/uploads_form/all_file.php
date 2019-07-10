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
                      <th>Prospectus</th>
                      <th>Faculty Application</th>
                      <th>Administration Form</th>
                      <th>Application Form</th>
                      <th>Action</th>
                    </tr>
                  </thead>
            <?php $i = 1;
               foreach($list_uploads as $list) 
               {
            ?>
                  <tbody>
                    <tr>
                      <td><?php echo $i++; ?></td>

                      <td>
                     <a href="<?php echo base_url() ?>uploads/d_files/<?php echo $list['up_prospect'];?>" >Preview Prospectus</a>
                     </td>
                       <td>
                       <a href="<?php echo base_url() ?>uploads/d_files/<?php echo $list['up_fac_app']; ?>">Preview Faculty Form</a>
                       </td>
                       <td>
                       <a href="<?php echo base_url() ?>uploads/d_files/<?php echo $list['up_admin_form']; ?>">Preview Admin Form</a>
                       </td>

                       <td>
                       <a href="<?php echo base_url() ?>uploads/d_files/<?php echo $list['up_app_form']; ?>">Preview Application Form</a>
                       </td>

                
                      <td style="text-align: right">
                      <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/add_file/<?php echo $list['upload_id']; ?>"><i class="fa fa-edit"></i></a>
                      <a class="t_trash" href="<?php echo base_url() ?>admin/delete_fee_time/<?php echo $list['upload_id']; ?>"><i class="fa fa-trash"></i></a>
                      </td>
                      
                    </tr>             
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              
</div>
</div>