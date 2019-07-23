
<div class="container">
<br>
<hr>
<div class="row">
<div class="col-md-12">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th >Event Registrations</th>
      </tr>
      <tr>
        <th style="width: 43px;">No:</th>
        <th>Name</th>
        <th>Type</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $i = 1;
                   $notification = $this->db->get_where('notifications')->result_array();
                   foreach($notification as $not) 
                   {
            ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $not['a_name']?></td>
        <td><?php echo $not['not_type']?></td>
        <td style="text-align: right"><a class="View" href="<?php echo base_url() ?>admin/notification_detail/<?php echo $not['not_id']; ?>">
          <button class="btn btn-info">View</button>
          </i></a> </td>
      </tr>
      <?php
                  }
                  ?>
    </tbody>
  </table>
</div>
</div>
</div>
