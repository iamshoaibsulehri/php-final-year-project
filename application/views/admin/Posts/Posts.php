<div class="container">
  
<a href="<?php echo base_url() ?>admin/add_post" style="float:right" class="btn btn-primary">Add New</button></a>
<br>
<hr>
<div class="row">
<div class="col-md-12">
<table class="table" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No:</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Author</th>
                      <th>Category</th>
                      <th>Tags</th>
                      <th>Photo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
            <?php $i = 1;
               foreach($posts as $post) 
               {
            ?>
                  <tbody>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $post['post_title']?></td>
                      <td><?php echo $post['post_description']?></td>
                      <td> <?php echo $post['post_author']?></td>
                      <td><?php $category= $this->db->get_where('category',array('cat_id'=>$post['post_category']))->result_array();
                      foreach($category as $cat)
                      {
                        echo $cat['cat_name'];
                      }
                      ?></td>
                      <td><?php echo $post['post_tags']?></td>
                      <td><img src="<?php echo base_url() ?>uploads/posts/<?php echo $post['post_photo']; ?>" width="100" alt=""/></td>
                      <td style="text-align: right">
                      <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/update_post/<?php echo $post['post_id']; ?>"><i class="fa fa-edit"></i></a>
                      <a class="t_trash" href="<?php echo base_url() ?>admin/delete_post/<?php echo $post['post_id']; ?>"><i class="fa fa-trash"></i></a>
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