<style>
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		box-shadow: 0 3px 5px rgba(0, 0, 0, .2);
	}

	td,
	th {
		border: 1px solid #d1cede;
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even) {
		background-color: #dddddd;
	}

	tr:hover {
		background-color: #d1cede;
	}

</style>

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <?php 
    
    foreach($program_data as $data)
    {
    ?>
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" style="background-image: url(<?php echo base_url()?>templates/front/images/course/background_top.png);">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Course Details</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Course Details</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
}
?>
    <!-- Section: Services Details -->
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-12">
          <?php 
    
    foreach($program_data as $data)
    {
    ?>
            <div class="single-service">
              <div class = "course_img">
                <img src="<?php echo base_url()?>uploads/program/<?php echo $data['p_photo']?>" style="width:1600; height:1065;" alt="">
             </div>
              <h3 class="text-uppercase mt-30 mb-10" style="font-weight: bold;"><?php echo $data['p_name']?></h3>
              <div class="double-line-bottom-theme-colored-2 mt-10" ></div>
              <p><?php $limit = $data['p_description'];
               echo  ellipsize($limit,3, 50);
              ?></p>
              <ul id="myTab" class="nav nav-tabs mt-30">
                <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
                <li><a href="#tab2" data-toggle="tab">Eligibility Criteria</a></li>
                <li><a href="#tab3" data-toggle="tab">Apply Now</a></li>
                <li><a href="#tab4" data-toggle="tab">Fee Structure</a></li>
            
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                  <h4 class="line-bottom-theme-colored-2 mb-15">Course Details</h4>
                  <?php echo $data['p_description']?>
                </div>
                <div class="tab-pane fade" id="tab2">
                  <h4 class="line-bottom-theme-colored-2 mb-15">Eligibility Criteria</h4>
                  <?php echo $data['p_criteria']?>
                </div>
                <div class="tab-pane fade" id="tab3">
                <div class="center" style="    text-align: center; padding:60px; background-image: url(<?php echo base_url()?>templates/front/images/bg/bg-pattern.png)">
                <a class="btn btn-xl btn-theme-colored2 mt-30 pr-40 pl-40" href="<?php echo base_url()?>home/registration_form">Apply Now</a>
                </div>
                </div>
                <div class="tab-pane fade" id="tab4">
                  <h4 class="line-bottom-theme-colored-2 mb-20">Fees Structure</h4>
                  <div class="row">
									<div class="col-md-12">
                  <table>
											<tr>
												<th style="background-color:blue; color:black;">Year</th>
												<th style="background-color:green; color:black;">Samester</th>
												<th style="background-color:grey; color:black;">Year</th>
											</tr>
											<?php
                    $fee_array = json_decode($data['p_fee']);
       
                    foreach($fee_array as $fee){
                    ?>
											<tr>
												<td>
                        <?php echo $fee->year; ?>
												</td>
												<td>
												<?php echo $fee->samester; ?>
												</td>
												<td>
												<?php echo $fee->fee; ?>
												</td>
											</tr>
											<?php 
                      } 
                      ?>
										</table>
                </div>
              </div>
              </div>
              </div>
             
            </div>
          </div>
          <?php
}
?>
         <!-- sidebar -->
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->