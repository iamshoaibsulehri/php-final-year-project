<style>
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>

<?php foreach($detail as $det){  
 
{
?>
<div class="container emp-profile">
  <form method="post">
    <div class="row">
      <div class="col-md-4">
        <div class="profile-img"><img src="<?php echo base_url()?>uploads/student/<?php echo $det['s_photo']?>" alt=""/>
          <div class="file btn btn-lg btn-primary"> Change Photo
            <input type="file" name="photo"/>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="box box-primary  " style="width:100%; height: 100%;">
            <h3>Student Application</h3>
            <hr>
            <p id="error" style="color: red; font-style: italic;"></p>
            <div class="box-body">
              <div class="form-group">
                <div class="col-sm-6">
                  <label class="form-label">Registration Number:</label>
                  <?php echo $det['student_id']?> </div>
                <div class="col-sm-6">
                  <label class="form-label">Student Name:</label>
                  <?php echo $det['name']?> </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6">
                  <label class="form-label">Date Registered:</label>
                  <div style="display: inline;"><?php echo $det['date_registered']?></div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label">Mobile:</label>
                  <?php echo $det['c_number']?> </div>
              </div>
            </div>
            <div class="box-body">
              <blockquote> <a href="<?php echo base_url()?>home/registration_form" class="btn btn-info btn-sm pull-right" onclick="" id="step1"><i class="fa fa-pencil"></i>&nbsp;Start</a>
                <p>Student Basic Info Incomplete.</p>
                <small>Start Application</small> </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4" style="margin-top: -100px;">
        <hr>
        <div class="profile-work">
          <p>Tabs</p>
          <a href="<?php echo base_url()?>home/registration_form">Application</a><br/>
          <a href="">Departments</a><br/>
          <a href="">News</a>
          <p>Useful links</p>
          <a href="#">Challan Form</a><br/>
          <a href="<?php echo base_url()?>home">USKT-University of Sialkot </a><br/>
        </div>
      </div>
      <div class="col-md-8">
        <hr>
        <h3 class="text-uppercase line-bottom-theme-colored-2 mt-0 line-height-1"><i class="fa fa-calendar mr-10"></i>Upcoming <span class="text-theme-colored2">Events</span></h3>
        <?php 
             $this->db->limit(3);
             $event_s = $this->db->get('events')->result_array();
             foreach($event_s as $event)
             {
               ?>
        <article>
          <div class="event-block">
            <div class="event-date text-center">
              <ul class="text-white font-18 font-weight-600">
                <li class="border-bottom">28</li>
                <li class="">Feb</li>
              </ul>
            </div>
            <div class="event-meta border-1px pl-40">
              <div class="event-content pull-left flip">
                <h4 class="event-title media-heading font-roboto-slab font-weight-700"><a href="#"><?php echo $event['event_title'];?></a></h4>
                <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored2"></i>
                <?php
                      
    $date = new DateTime($event['start_time']);
    echo $date->format('h:i a');
    ?>
                - <?php echo $event['end_time'];?></span> <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5 text-theme-colored2"></i> <?php echo $event['event_location'];?></span>
                <p class="mt-5">
                  <?php $limit = $event['event_description']; echo word_limiter($limit, 10);?>
                </p>
              </div>
            </div>
          </div>
        </article>
        <?php
              }
              ?>
      </div>
    </div>
  </form>
</div>
<?php
        }
        ?>
<?php
}
?>