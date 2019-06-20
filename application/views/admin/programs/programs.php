<div class="container">
    
<a href="<?php echo base_url() ?>admin/add_program" style="float:right" class="btn btn-primary">Add New</button></a>
<br>
<hr>
<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No:</th>
                      <th>Name</th>
                      <th>Department</th>
                      <th>Photo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
            <?php $i = 1;
               foreach($programs as $program) 
               {
            ?>
                
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $program['p_name']?></td>
                      <td>   
                    <?php $department= $this->db->get_where('department',array('d_id'=>$program['p_department']))->result_array();
                      
                        foreach($department as $dep)
                        {
                        echo  $dep['d_name'];
                        }
                      ?>
                      </td>

                      <td><img src="<?php echo base_url() ?>uploads/program/<?php echo $program['p_photo']; ?>" width="100" alt=""/></td>
                      <td style="text-align: right">
                      <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/update_program/<?php echo $program['p_id']; ?>"><i class="fa fa-edit"></i></a>
                      <a class="t_trash" href="<?php echo base_url() ?>admin/delete_program/<?php echo $program['p_id']; ?>"><i class="fa fa-trash"></i></a>
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
</div>