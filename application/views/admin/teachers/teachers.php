<div class="container">
    
<a href="<?php echo base_url() ?>admin/add_teacher" style="float:right" class="btn btn-primary">Add New</button></a>
<br>
<hr>
<div class="row">
<div class="col-md-12">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
  <th>Id</th>
  <th>Name Of Teachers</th>
  <th>Photo</th>
  <th>Department</th>
  <th>Mail Address</th>
  <th>Action</th>
</tr>
  </thead>
  <tbody>
  <?php $i = 1;
               foreach($teachers as $teacher)  {
            ?>
         <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $teacher['t_name']?></td>
                      
                      <td><img src="<?php echo base_url() ?>uploads/teacher/<?php echo $teacher['t_photo']; ?>" width="100" alt=""/></td>
                    
                      <td><?php $departments= $this->db->get_where('department',array('d_id'=>$teacher['t_department']))->result_array();
                      foreach($departments as $department)
                      {
                        echo $department['d_name'];
                      }
                      ?></td> 
                       <td><?php echo $teacher['email'] ?></td>
                      <td style="text-align: right">
                      <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/update_teacher/<?php echo $teacher['t_id']; ?>"><i class="fa fa-edit"></i></a>
                      <a class="t_trash" href="<?php echo base_url() ?>admin/delete_teacher/<?php echo $teacher['t_id']; ?>"><i class="fa fa-trash"></i></a>
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