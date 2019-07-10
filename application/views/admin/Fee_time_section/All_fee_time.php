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
                      <th>Program</th>
                      <th>Timetable File</th>
                      <th>Photo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
            <?php $i = 1;
               foreach($list_detail as $list) 
               {
            ?>
                  <tbody>
                    <tr>
                      <td><?php echo $i++; ?></td>

                      <td>
                      <?php 
                      $id= $list['tf_program'];
                      $programs = $this->db->get_where('program', array('p_id'=>$id))->result_array();
                      foreach($programs as $pr){
                      echo  $pr['p_name'];
                    }
                      ?></td>
                       <td> <?php 
                      $id= $list['program_category'];
                      $cat = $this->db->get_where('course_category', array('c_id'=>$id))->result_array();
                      foreach($cat as $c){
                      echo  $c['c_name'];
                    }

                      ?>
                       
                       </td>
                      <td><img src="<?php echo base_url() ?>uploads/timetable/<?php echo $list['tf_time']; ?>" width="100" alt=""/></td>
                      <td style="text-align: right">
                      <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/add_fee_time/<?php echo $list['tf_id']; ?>"><i class="fa fa-edit"></i></a>
                      <a class="t_trash" href="<?php echo base_url() ?>admin/delete_fee_time/<?php echo $list['tf_id']; ?>"><i class="fa fa-trash"></i></a>
                      </td>
                      
                    </tr>             
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              
</div>
</div>