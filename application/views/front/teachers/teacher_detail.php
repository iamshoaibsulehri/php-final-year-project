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

	<section class="inner-header divider layer-overlay overlay-theme-colored-7" style="background-image: url(
  <?php echo base_url()?>templates/front/images/bg/teachers.jpg);">
		<div class="container pt-120 pb-60">
			<!-- Section Content -->
			<div class="section-content">
				<div class="row">
					<div class="col-md-6">
						<h2 class="text-theme-colored2 font-36">Teachers</h2>
						<ol class="breadcrumb text-left mt-10 white">
							<li>
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Pages</a>
							</li>
							<li class="active">Teachers_detail</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section: Experts Details -->
	<section>
		<?php 
    foreach($t_detail as $detail)
    {
    ?>
		<div class="container">
			<div class="section-content">
				<div class="row">
					<div class="col-md-3">
						<div class="thumb">
							<img src="
            <?php echo base_url() ?>uploads/teacher/<?php echo $detail['t_photo'] ?>" style="width: 100%;" alt="">
							<h4 class="line-bottom-theme-colored-2">About Me:</h4>
							<ul>
								<li>
									<div class="bg-light media border-bottom p-15 mb-20">
										<div class="media-left">
											<i class="fa fa-map-marker text-theme-colored2 font-24 mt-5"></i>
										</div>
										<div class="media-body">
											<h5 class="mt-0 mb-0">Address:</h5>
											<p>  <?php echo $detail['t_address'] ?></p>
										</div>
									</div>
								</li>
								<li>
									<div class="bg-light media border-bottom p-15 mb-20">
										<div class="media-left">
											<i class="fa fa-phone text-theme-colored2 font-24 mt-5"></i>
										</div>
										<div class="media-body">
											<h5 class="mt-0 mb-0">Contact:</h5>
											<p><span>Phone:</span><?php echo $detail['t_contact'] ?><br><span>Mail:</span>
                      <?php echo $detail['email'] ?></p>
										</div>
									</div>
								</li>
								<li>
									<div class="bg-light media border-bottom p-15">
										<div class="media-left">
											<i class="fa fa-download text-theme-colored2 font-24 mt-5"></i>
										</div>
										<div class="media-body">
											<h5 class="mt-0 mb-0">Resume Download:</h5>
											<a href="#" class="text-underline"><i class="fa fa-file-pdf-o mr-5"></i>Download PDF</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-9">
						<h4 class="name font-24 mt-0 mb-0">
							<?php echo $detail['t_name'] ?>
						</h4>
						<h5 class="mt-5">
							<?php echo $detail['t_desig'] ?>
						</h5>
						<?php echo $detail['t_description'] ?>

						
						<?php     if($detail['t_qualification']!=Null){ ?>
						<div class="row">
							<div class="col-md-12">
								<div class="Heading_all">
									<h3 class="office">Qualification</h3>
								</div>
								<div class="row">
									<div class="col-md-12">
										<table>
											<tr>
												<th>Degree</th>
												<th>Institute</th>
												<th>Year</th>
											</tr>
											<?php
                    $t_details = json_decode($detail['t_qualification']);
                    foreach($t_details as $t_detail){
                    ?>
											<tr>
												<td>
													<?php echo $t_detail->degree; ?>
												</td>
												<td>
													<?php echo $t_detail->institute; ?>
												</td>
												<td>
													<?php echo $t_detail->year; ?>
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
						<?php } ?>

						<?php if($detail['t_experience']!=Null){ ?>
						<div class="row">
							<div class="col-md-12">
								<div class="Heading_all">
									<h3 class="office">Teaching Experience</h3>
								</div>
								<div class="row">
									<div class="col-md-12">
										<table>
											<tr>
												<th>Post</th>
												<th>Institute</th>
												<th>Year</th>
											</tr>
											<?php
                    $te_details = json_decode($detail['t_experience']);
                    foreach($te_details as $e_detail){
                    ?>
											<tr>
												<td>
													<?php echo $e_detail->position; ?>
												</td>
												<td>
													<?php echo $e_detail->einstitute; ?>
												</td>
												<td>
													<?php echo $e_detail->eyear; ?>
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
						<?php } ?>
						
					</div>
				</div>
			</div>
    </div>
    <?php
    }
    ?>
    </div>
</section>



