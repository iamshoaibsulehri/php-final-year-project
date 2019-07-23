
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


<div class="container pt-50 pb-70">

<h3 style="text-align:center;">Date Announcements  <i class="fa fa-bullhorn fa-2x" aria-hidden="true"></i></h3> 

<div class="row mt-60">
    <div class="col-md-12">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Notification</th>

    </tr>
      </thead>
      <tbody>
      <?php $i = 1;
      $data = $this->db->get_where('imp_dates')->result_array();
                   foreach($data as $dt)  {
                ?>
             <tr>
             <td><?php echo $i++; ?></td>
                 <td><?php echo $dt['title']?></td> 
                          
                          <td><?php echo $dt['notification']?></td>
                         
                          
                 
                        </tr>             
                       
                        <?php
                      }
                      ?>
    
                      </tbody>
                    </table>

                    </div>
                    </div>
                    </div>