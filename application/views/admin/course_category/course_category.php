<div class="container">
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
               foreach($course_category as $c_cat) 
               {
            ?>
                  <tbody>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $c_cat['c_name']?></td>
                      
                      <td><img src="<?php echo base_url() ?>uploads/course_category/<?php echo $c_cat['c_photo']; ?>" width="100" alt=""/></td>
                    
                    <td style="text-align: right">
                      <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/update_course_category/<?php echo $c_cat['c_id']; ?>"><i class="fa fa-edit"></i></a>
                      <a class="t_trash" href="<?php echo base_url() ?>admin/delete_course_category/<?php echo $c_cat['c_id']; ?>"><i class="fa fa-trash"></i></a>
                     
                     </td>
                     
                    </tr>             
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
                <a href="<?php echo base_url() ?>admin/add_course_category" class="btn btn-primary">Add New</button></a>
                
</div>
</div>