
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

<h3 style="text-align:center; border-bottom:3px solid black;"> Fees & TimeTable</h3> 

<ul id="myTab" class="nav nav-tabs mt-30" style="    margin-left: 566px;">
                <li class="active"><a href="#tab1" data-toggle="tab">Graduate</a></li>
                <li><a href="#tab2" data-toggle="tab">UnderGraduate</a></li>
               
              </ul>
              
<div class="container">
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
      <th>Id</th>
      <th>Program</th>
      <th>Total Fee</th>
      <th>Total Credit Hours</th>
      <th>Time Table</th>
     
    </tr>
      </thead>
      <tbody>
      <?php $i = 1;
      $data = $this->db->get_where('time_fee', array('program_category'=>1))->result_array();
                   foreach($data as $dt)  {
                ?>
             <tr>
             <td><?php echo $i++; ?></td>
                 <td><?php $program= $this->db->get_where('program',array('p_id'=>$dt['tf_program']))->result_array();
                          foreach($program as $name)
                          {
                            echo $name['p_name'];
                          }
                          ?></td> 
                          
                          <td><?php echo $dt['tf_fee']?></td>
                          <td><?php echo $dt['tf_credit']?></td>
                          
                          <td><a href="<?php echo base_url() ?>uploads/timetable/<?php echo $dt['tf_time']; ?>" width="100" alt="" >Preview</a></td>
                        
                          
                           
                          
                        </tr>             
                       
                        <?php
                      }
                      ?>
    
                      </tbody>
                    </table>
                
                
                </div>



                <div class="tab-pane fade" id="tab2">

               
    
   
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
      <th>Id</th>
      <th>Program</th>
      <th>Total Fee</th>
      <th>Total Credit Hours</th>
      <th>Time Table</th>
     
    </tr>
      </thead>
      <tbody>
      <?php $i = 1;
      $data = $this->db->get_where('time_fee', array('program_category'=>2))->result_array();
                   foreach($data as $dt)  {
                ?>
             <tr>
             <td><?php echo $i++; ?></td>
                 <td><?php $program= $this->db->get_where('program',array('p_id'=>$dt['tf_program']))->result_array();
                          foreach($program as $name)
                          {
                            echo $name['p_name'];
                          }
                          ?></td> 
                          
                          <td><?php echo $dt['tf_fee']?></td>
                          <td><?php echo $dt['tf_credit']?></td>
                          
                          <td><a href="<?php echo base_url() ?>uploads/timetable/<?php echo $dt['tf_time']; ?>" width="100" alt="" >Preview</a></td>
                        
                          
                           
                          
                        </tr>             
                       
                        <?php
                      }
                      ?>
    
                      </tbody>
                    </table>
                  
   
    </div>
    </div>

