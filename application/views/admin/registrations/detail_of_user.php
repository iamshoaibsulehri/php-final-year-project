 <form class="form" action="" method="POST" id="registrationForm">
    <?php
    
                  foreach($students_detail as $det)
        
          
           {
             ?>
    <div class="form-group">
      <div class="col-xs-6">
        <label for="first_name">
        <h4>Username</h4>
        </label>
        <input type="text" value="<?php echo $det['username']?>" class="form-control" name="first_name" id="first_name" placeholder="first name" readonly>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-6">
        <label for="last_name">
        <h4>Email</h4>
        </label>
        <input type="text" value="<?php   echo $det['email']?>" class="form-control" name="last_name" id="last_name" placeholder="last name" readonly>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-6">
        <label for="phone">
        <h4>Phone</h4>
        </label>
        <input type="text" value="<?php echo $det['phone']?>" class="form-control" name="phone" id="phone" placeholder="enter phone" readonly>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-6">
        <label for="text">
        <h4>Form Status</h4>
        </label>
        <input type="text"  value="<?php echo $det['application_status']?>" class="form-control" name="city "id="location" placeholder="somewhere" readonly>
      </div>
    </div>
    
    <?php
           }
           ?>
  
  </form>
  <a class="View" href="<?php echo base_url() ?>admin/new_user_registrations/"><button class="btn btn-info btn-lg btn-block">Go Back</button></i></a>