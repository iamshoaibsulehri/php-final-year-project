 <form class="form" action="" method="POST" id="registrationForm">
    <?php
    $id = $this->uri->segment(3);
     $this->db->where('not_id', $id);
    
 $notification = $this->db->get('notifications')->result_array();

  
  foreach($notification as $not)
  {
 
   if($not['not_type']=='User Registration'){

    
    $students_detail= $this->db->get_where('students' ,array('student_id'=>$not['type_id']))->result_array();
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
        <input type="text" value="<?php   echo $det['email']?>" class="form-control"  readonly>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-6">
        <label for="phone">
        <h4>Phone</h4>
        </label>
        <input type="text" value="<?php echo $det['phone']?>" class="form-control"  readonly>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-6">
        <label for="text">
        <h4>Form Status</h4>
        </label>
        <input type="text"  value="<?php echo $det['application_status']?>" class="form-control" readonly>
      </div>
    </div>
  </form>
  
 <a href="<?php echo base_url()?>admin/notifications"> <button type="button" class="btn btn-primary btn-block">Back </button>
    </a>
    <?php
    }

    
           }

    
    
           if($not['not_type']=='event'){
              ?>
       
                    <?php $i = 1;
               
                $register_detail = $this->db->get_where('event_register' ,array('register_id'=>$not['type_id']))->result_array();
               foreach($register_detail as $detail)
                 {
              ?>


                 <div class="row">
  <div class="col-md-12">
    <form method="POST" action="" enctype="multipart/form-data">
    
      <div class="form-group">
        <label class="" for="name">Name</label>
        <input type="text" name="name" value="<?php echo $detail['reg_name']?>" class="form-control" readonly/>
      </div>
      <div class="form-group">
        <label class="" for="email">Top Description</label>
        <input type="text" name="email" value="<?php echo $detail['reg_email']?>" class="form-control" readonly/>
      </div>
      <div class="form-group">
        <label class="" for="phone">Phone</label>
        <input type="text" name="phone" value="<?php echo $detail['reg_phone']?>" class="form-control"  readonly />
      </div>
     

    
    </form>
  </div>
</div>           
<a href="<?php echo base_url()?>admin/notifications"> <button type="button" class="btn btn-primary btn-block">Back </button>
    </a>            
                   
                    
            
            <?php
            }
         
            
          }
           
          //type

          if($not['not_type']=='job_application'){
            ?>
     
                  <?php $i = 1;
             
              $register_detail = $this->db->get_where('job_form' ,array('a_id'=>$not['type_id']))->result_array();
             foreach($register_detail as $detail)
               {
            ?>


               <div class="row">
<div class="col-md-12">
  <form method="POST" action="" enctype="multipart/form-data">
  
    <div class="form-group">
      <label class="" for="name">Name</label>
      <input type="text" name="name" value="<?php echo $detail['a_name']?>" class="form-control" readonly/>
    </div>
    <div class="form-group">
      <label class="" for="email">Contact Email</label>
      <input type="text" name="email" value="<?php echo $detail['a_email']?>" class="form-control" readonly/>
    </div>
    <div class="form-group">
      <label class="" for="phone">Gender</label>
      <input type="text" name="phone" value="<?php echo $detail['a_gender']?>" class="form-control"  readonly />
    </div>
    <div class="form-group">
      <label class="" for="phone">Post Applied</label>
      <input type="text" name="phone" value="<?php echo $detail['a_post']?>" class="form-control"  readonly />
    </div>
   
    <div class="form-group">
      <label class="" for="phone">Message</label>
      <input type="text" name="phone" value="<?php echo $detail['a_message']?>" class="form-control"  readonly />
    </div>
    <div class="form-group">
      <label class="" for="phone">CV</label><br>
      <a href="<?php echo base_url()?>uploads/jobcv/<?php echo $detail['cv']?> "><input type="text" value="Download CV"  class="form-control"  readonly />
    </a>
    </div>
   
  </form>
</div>
</div>           
                 
<a href="<?php echo base_url()?>admin/notifications"> <button type="button" class="btn btn-primary btn-block">Back </button>
    </a>         
                  
          
          <?php
          }
       
          
        }
//done


if($not['not_type']=='contact_inquiry'){
  ?>

        <?php $i = 1;
   
    $register_detail = $this->db->get_where('contact_inquiry' ,array('con_id'=>$not['type_id']))->result_array();
   foreach($register_detail as $detail)
     {
  ?>


     <div class="row">
<div class="col-md-12">
<form method="POST" action="" enctype="multipart/form-data">

<div class="form-group">
<label class="" for="name">Name</label>
<input type="text" name="name" value="<?php echo $detail['con_name']?>" class="form-control" readonly/>
</div>
<div class="form-group">
<label class="" for="email">Contact Email</label>
<input type="text" name="email" value="<?php echo $detail['con_email']?>" class="form-control" readonly/>
</div>
<div class="form-group">
<label class="" for="phone">Subject</label>
<input type="text" name="phone" value="<?php echo $detail['con_sub']?>" class="form-control"  readonly />
</div>
<div class="form-group">
<label class="" for="phone">Phone</label>
<input type="text" name="phone" value="<?php echo   $detail['phone']?>" class="form-control"  readonly />
</div>

<div class="form-group">
<label class="" for="phone">Message</label>
<input type="text" name="phone" value="<?php echo $detail['message']?>" class="form-control"  readonly />
</div>
<div class="form-group">
<label class="" for="phone">Date </label>
<input type="text" name="phone" value="<?php $time=   strtotime($detail['date']);

$newformat = date('Y-m-d / h:i A',$time);

echo $newformat;
?>" class="form-control"  readonly />
</div>

</form>
</div>
</div>           
<a href="<?php echo base_url()?>admin/notifications"> <button type="button" class="btn btn-primary btn-block">Back </button>
    </a>  
       
        

<?php
}


}
//done



          }
           ?>
  
