<div class="container">
  
<a href="<?php echo base_url() ?>admin/add_event" style="float:right" class="btn btn-primary">Add New</button></a>
<br>
<hr>
<div class="row">
<div class="col-md-12">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No:</th>
                      <th>Title</th>
                      <th>Category</th>
                      <th>Photo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
            <?php $i = 1;
               foreach($events as $event) 
               {
            ?>
              
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $event['event_title']?></td>
                      <td><?php $category= $this->db->get_where('category',array('cat_id'=>$event['event_category']))->result_array();
                      foreach($category as $cat)
                      {
                        echo $cat['cat_name'];
                      }
                      ?></td> 
                      <td><img src="<?php echo base_url() ?>uploads/events/<?php echo $event['event_photo']; ?>" width="100" alt=""/></td>
                      <td style="text-align: right">
                      <a style="padding: 0 5px;" href="<?php echo  base_url() ?>admin/update_event/<?php echo $event['event_id']; ?>"><i class="fa fa-edit"></i></a>
                      <a class="t_trash" href="<?php echo base_url() ?>admin/delete_event/<?php echo $event['event_id']; ?>"><i class="fa fa-trash"></i></a>
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