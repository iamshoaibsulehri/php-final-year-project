
<div class="container">
<a href="<?php echo base_url() ?>admin/add_blog" style="float:right" class="btn btn-primary">Add New</button></a>
<br>
<hr>
<div class="row">
<div class="col-md-12">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No:</th>
                      <th>Title</th>
                      <th>Photo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
            <?php $i = 1;
               foreach($blog as $bg) 
               {
            ?>
                  <tbody>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $bg['blog_title']?></td>
                      
                   
</td>
                    
                      <td><img src="<?php echo base_url() ?>uploads/blog/<?php echo $bg['blog_photo']; ?>" width="100" alt="" /></td>
                      <td style="text-align: right">
                      <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/update_blog/<?php echo $bg['blog_id']; ?>"><i class="fa fa-edit"></i></a>
                      <a class="t_trash" href="<?php echo base_url() ?>admin/delete_blog/<?php echo $bg['blog_id']; ?>"><i class="fa fa-trash"></i></a>
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