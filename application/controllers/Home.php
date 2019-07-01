<?php
class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->helper('text');
        $this->load->helper('date');
        $this->load->library('session');
    
    }
    public function index(){
        $data['page_name'] = 'home/index';
        $data['page_title'] = 'Home';
        $data['page_assets'] = "home-index";
        $this->load->view('front/layout',$data);
    }
    public function blog(){
        $data['page_name'] = 'blog/index';
        $data['page_title'] = 'Blog';
        $this->load->library('pagination');
        $config = array();
        $config["base_url"] = base_url('home/blog');
        $config['total_rows'] =  $this->db->count_all("blog");//here we will count all the data from the table
        $config['per_page'] = 10;//number of data to be shown on single page
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->db->limit($config['per_page'], $page);
        $data['blog']= $this->db->get('blog')->result_array();
        $data["links"] = $this->pagination->create_links();//create the link for pagination
   
     
        $this->load->view('front/layout', $data);
    }

public function blog_details($id){
    $data['page_name'] = 'blog/blog';
    $data['page_title'] = 'Blog Details'; 
    $ids = $this->uri->segment(3);
    if($id){
        $this->db->where('blog_id',$id);
     $data['blog_details']  =  $this->db->get('blog')->result_array();
    }
    

    $this->load->view('front/layout',$data);
}
public function event()
{
    $data['page_name'] = 'event/event';
    $data['page_title'] = 'All events';
    $this->load->library('pagination');
    
        
    if(isset( $_GET['q'])){
      $this->db->like('event_title',$_GET['q']);
      $events = $this->db->get('events');
      $count  = $events->num_rows();
    }else{
  $count = $this->db->count_all("events");
    }

        $config = array();
        $config["base_url"] = base_url('home/event');
        $config['total_rows'] =  $count;//here we will count all the data from the table
        $config['per_page'] = 5;//number of data to be shown on single page
        $config["uri_segment"] = 3;
        $config['full_tag_open']    = "<ul class='pagination theme-colored pull-right xs-pull-center mb-xs-40'>";
        $config['full_tag_close']   = "</ul>";
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = "<li class='active'><a href='#'>";
        $config['cur_tag_close']    = "</a></li>";
        $config['next_tag_open']    = "<li>";
        $config['next_tagl_close']  = "</li>";
        $config['prev_tag_open']    = "<li>";
        $config['prev_tagl_close']  = "</li>";
        $config['first_tag_open']   = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open']    = "<li>";
        $config['last_tagl_close']  = "</li>";
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->db->limit($config['per_page'], $page);
        if(isset( $_GET['q'])){
          $this->db->like('event_title',$_GET['q']);
        }
        $data['events']= $this->db->get('events')->result_array();
        $data["links"] = $this->pagination->create_links();//create the link for pagination
   
    $this->load->view('front/layout',$data);
 }
 public function event_detail($id){
   
  $data['page_name'] = 'event/event_detail';
  $data['page_title'] = 'Event Details'; 
  if($id){
   $data['event_details']  =  $this->db->get_where('events', array('event_id'=>$id))->result_array();
  }

  if($_POST)
  { 
  $rdata['reg_name'] = $this->input->post('register_name');
  $rdata['reg_email'] = $this->input->post('register_email');
  $rdata['reg_phone'] = $this->input->post('register_phone');
  $rdata['event_id'] = $id;
  $ndata['not_type'] = 'event';
  $ndata['type_id'] = $id;
  
  $this->db->insert('event_register',$rdata);
  $this->db->insert('notifications',$ndata);

}

$this->load->view('front/layout',$data);

}
 
public function contact_us(){
  $data['page_name'] = 'information/contact_us';
  $data['page_title'] = 'Contact Us'; 
 
  $this->load->view('front/layout',$data);
}

 public function departments(){
    $data['page_name'] = 'departments/index';
    $data['page_title'] = 'Department';

    $this->load->view('front/layout',$data); 
 }
 public function department(){
    $data['page_name'] = 'departments/dep';
    $data['page_title'] = 'Departments';
    $id = $this->uri->segment(3);
    if($id){
      $data['department_detail']  = $this->db->get_where('department',array('d_id'=>$id))->result_array();
    }

    $this->load->view('front/layout',$data); 
 }
 public function offices(){
    $data['page_name'] = 'manag_office/offices';
    $data['page_title'] = 'Office';
    $id = $this->uri->segment(3);
    if($id){
        $data['department_detail']  = $this->db->get_where('department',array('d_id'=>$id))->result_array();
      }

    $this->load->view('front/layout',$data); 
 }

public function user_login()
{
$login = $this->session->userdata('loggin');
if( $login ){
  redirect(base_url().'home/user_profile');
}
$data['page_name'] = 'user_registration_form/login';
$data['page_title'] = 'Login';
if($_POST){
      $email = $this->input->post('email');
      $password= md5($this->input->post('password'));
  if($email != "" &&  $password != ""){
      $datap = array(
          'email' =>$email,
          'password'=>$password
      );
      $this->db->where($datap);
      $this->db->limit(1);
    $query = $this->db->get('students');
    if($query->num_rows() == 1){
      $students = $this->db->get_where('students', array('email'=> $email))->result_array();                   
      $sdata = array(
            'name'=>$students[0]['name'],
            'email' =>$students[0]['email']
        );
        $this->session->set_userdata('loggin',$sdata);
      redirect(base_url().'home/user_profile');
    }else{
      $this->session->set_flashdata('message_name', 'Error! Email or Password Incorrect.');
      redirect(base_url().'home/user_login');
    }
  }else{
      $this->session->set_flashdata('message_name', 'Error! Email or Password Incorrect.');
      redirect(base_url().'home/user_login');
  }

}



$this->load->view('front/layout', $data);
}

  public function user_registration()
  {
    $login = $this->session->userdata('loggin');
    if( $login ){
        redirect(base_url().'home/user_profile');
    }
      $data['page_name'] = 'user_registration_form/registration';
      $data['page_title'] = 'Registration';

      if($_POST){
        $datap['name']= $this->input->post('name');
        $datap['email']= $this->input->post('email');
        $datap['password'] = md5($this->input->post('password'));
        $data['date_registered'] = date('Y-m-d H:i:s'); 
        $datap['c_number'] = date();

       if($_POST){
  $config['upload_path']          = './uploads/students/';
  $config['allowed_types']        = 'gif|jpg|png';
  $config['max_size']             = 10000000;
  $this->load->library('upload', $config);
  $this->upload->initialize($config);
  if ( ! $this->upload->do_upload('photo'))
  {
      $error = array('error' => $this->upload->display_errors());
         
         }
  else
  {
     $photo = array('upload_data' => $this->upload->data());
 
     $pdata['s_photo']= $photo['upload_data']['file_name'];
         }

}



        $check_data = array(
          'email' => $this->input->post('email')
        );
        $this->db->where($check_data);
        $this->db->limit(1);
      $query =   $this->db->get('students');
      if($query->num_rows() == 1){
        $this->session->set_flashdata('message_name', 'Error! User already registerd.');
        redirect(base_url()."home/user_registration/");
      }else{
      
        $this->db->insert('students',$datap);
        $datac['name']= $this->input->post('name');
        $datac['email']= $this->input->post('email');
       $datac['student_id'] = $this->db->insert_id();
        $this->db->insert('registration_form',$datac);
        $this->session->set_flashdata('message_name', 'Registered successfully. You can login now.');
        redirect(base_url()."home/user_login/");
      }                    
    }
      $this->load->view('front/layout', $data);
  }
        public function user_profile()
        {
          $login = $this->session->userdata('loggin');
          if( !$login ){
              redirect(base_url().'home/user_login');
          }
            $data['page_name'] = 'user_registration_form/profile';
            $data['page_title'] = 'Profile';
            $data['detail'] = $this->db->get_where('students', array('email'=>$login['email']))->result_array();
            $this->load->view('front/layout', $data);
          }



public function user_logout(){
   unset($_SESSION);
  session_destroy();
  redirect(base_url());
}


public function registration_form($para1 = NULL,$para2 =NULL,$para3 = NULL){
  $login = $this->session->userdata('loggin');

  $data['form_validation'] = "validation";
  if( !$login ){
    redirect(base_url().'home/user_profile');
  }
 
    $data['page_name'] = 'user_registration_form/apply_online';
    $data['page_title'] = 'apply_online';

    if($para1 == "personal_info")
    {
  
      $datap['name']= $this->input->post('first_name');
      $datap['email']= $this->input->post('email');
      $datap['gender']= $this->input->post('gender');
      $datap['d_o_b']= $this->input->post('dob');
      $datap['last_name']= $this->input->post('last_name');
      $datap['father_first_name']= $this->input->post('father_name');
      $datap['father_last_name']= $this->input->post('father_namel');
      $datap['contact_no']= $this->input->post('contactno');
      $datap['landline']= $this->input->post('landline');
      $datap['merital_status']= $this->input->post('merital');
      $datap['cnic']= $this->input->post('CNIC');
      $datap['country']= $this->input->post('country');
      $datap['nationality']= $this->input->post('nationality_id');
      $datap['state']= $this->input->post('state');
      $datap['city']= $this->input->post('city');
      $datap['zip_code']= $this->input->post('zipcode');

      // address
      $datap['house_no']= $this->input->post('houseno');
      $datap['street']= $this->input->post('street');
      $datap['p_city']= $this->input->post('p_city');
      $datap['nearby_city']= $this->input->post('ncity');
      $datap['other']= $this->input->post('ocity');
      // Temporary addres
      $datap['t_house']= $this->input->post('t_houseno');
      $datap['t_street']= $this->input->post('t_street');
      $datap['t_city']= $this->input->post('t_city');
      $datap['t_nearby_city']= $this->input->post('t_ncity');
      $datap['t_mail']= $this->input->post('email');
      // guardian
      $datap['relation_type']= $this->input->post('relationship');
      $datap['p_name']= $this->input->post('full_name');
      $datap['p_cnic']= $this->input->post('p_CNIC');
      $datap['p_contact']= $this->input->post('contactno');
      $datap['p_email']= $this->input->post('gemail');
      $datap['p_house_no']= $this->input->post('hno');
      $datap['p_street']= $this->input->post('Street');
      $datap['parent_city']= $this->input->post('gcity');
      $datap['p_nearby_city']= $this->input->post('gnearcity');
      $datap['p_occupation']= $this->input->post('occupation');
      $datap['p_organization']= $this->input->post('organization');
      $datap['p_designation']= $this->input->post('designation');
      $datap['p_relation']= $this->input->post('relation');
     
    // emergency contact
      $datap['e_person']= $this->input->post('emengencyperson');
      $datap['e_contact']= $this->input->post('econtactno');
      $datap['e_relation']= $this->input->post('e_relation');
      $datap['e_mail']= $this->input->post('e_email');

    // status
      $datap['status']= 'submitted';

         
 $detail = $this->db->get_where('students', array('email'=>$login['email']))->result_array();
 $id=$detail[0]['student_id'];
$this->db->where('student_id',$id);

$this->db->update('registration_form' , $datap);
   echo '<div class="alert alert-success">Record Saved.</div>';
exit;
 }
    
    if($para1 == "academic_info")
    {
     
      $datap['s_result_status']= $this->input->post('result');
      $datap['s_qaulification']= $this->input->post('qaulification');
      $datap['s_institute']= $this->input->post('institute');
      $datap['s_passing_year']= $this->input->post('passingyear');
      $datap['s_total_marks']= $this->input->post('totalmarks');
      $datap['s_obtained_marks']= $this->input->post('obtainedmarks');
      $datap['s_percentage']= $this->input->post('percentage');

      if($_POST){
        
        $config['upload_path']          = './uploads/certificates/';
        $config['allowed_types']        = 'pdf|docx|jpeg|JPG|jpg|png';
        $config['max_size']             = 10000000;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $photoc = NULL;
        if ( ! $this->upload->do_upload('proof'))
        {
            $error = array('error' => $this->upload->display_errors());
            
               }
        else
        {
           $file = array('upload_data' => $this->upload->data());
       
           $datap['s_doc_proof']=   $file['upload_data']['file_name'];
           $photoc=  $file['upload_data']['file_name'];
               }
      
      }



$detail = $this->db->get_where('students', array('email'=>$login['email']))->result_array();
$student_id=$detail[0]['student_id'];
$datap['student_id']= $student_id;

// sending in where ID = Session Id
$row_id  = $this->input->post('st_id');
if($row_id != ""){
  if($photoc == NULL){
    $this->db->where('acad_id',$row_id);
    $get_file =  $this->db->get('academics')->result_array();
    $datap['s_doc_proof'] = $get_file[0]['s_doc_proof'];
    $photoc = $get_file[0]['s_doc_proof'];
  }
  $this->db->where('acad_id',$row_id);
  $this->db->update('academics',$datap);

  $datacc = array(
    'id' => $row_id,
    'photo'=> $photoc
   );
  echo   json_encode($datacc);
    
}else{
$this->db->insert('academics', $datap);
$id = $this->db->insert_id(); 
 $datacc = array(
   'id' => $id,
   'photo'=> $photoc
  );
 echo   json_encode($datacc);
   
}  
exit;
  }
 
 if($para1 == 'acc_edit'){
       $detail = $this->db->get_where('students', array('email'=>$login['email']))->result_array();
    $student_id=$detail[0]['student_id'];
    $st_id= $student_id;
     $acad_id = $para2;
    $this->db->where('student_id',$st_id);
    $this->db->where('acad_id',$acad_id);
    $accad_details =  $this->db->get('academics')->result_array();
    echo json_encode($accad_details);
   exit;
  }
  if($para1 == 'acc_delete'){
    $detail = $this->db->get_where('students', array('email'=>$login['email']))->result_array();
 $student_id=$detail[0]['student_id'];
 $st_id= $student_id;
  $acad_id = $para2;
 $this->db->where('student_id',$st_id);
 $this->db->where('acad_id',$acad_id);
  $this->db->delete('academics');
  echo $acad_id;
exit;
}
  $detail = $this->db->get_where('students', array('email'=>$login['email']))->result_array();
  $student_id=$detail[0]['student_id'];
  $data['student_id']= $student_id;


  if($para1 == 'program_priority')
  {
    $datap['faculty']= $this->input->post('faculty');
      $datap['department']= $this->input->post('department');
      $datap['program']= $this->input->post('program');
   

    $detail = $this->db->get_where('students', array('email'=>$login['email']))->result_array();
    $id=$detail[0]['student_id'];
   $this->db->where('student_id',$id);
   
   $this->db->update('registration_form' , $datap);
      echo '<div class="alert alert-success">Record Saved.</div>';
   exit;
}
if($para1 == "fc_to_dep"){
      $fc_id = $_GET['fc_id'];
   $departments =   $this->db->get_where('department',array('f_id'=>$fc_id))->result_array(); 
   echo '<option value="0">-- Select Option --</option>';
   foreach($departments as $dap){
     echo '<option value="'. $dap['d_id'] .'">'. $dap['d_name'] .'</option>';
   }
   exit;
}
if($para1 == "dep_to_sp"){
  $fc_id = $_GET['fc_id'];
$departments =   $this->db->get_where('program',array('p_department'=>$fc_id))->result_array(); 
echo '<option value="0">-- Select Option --</option>';
foreach($departments as $dap){
 echo '<option value="'. $dap['p_id'] .'">'. $dap['p_name'] .'</option>';
}
exit;
}
 

  $this->load->view('front/layoutu', $data);
}


      public function about_us(){
      $data['page_name'] = 'information/aboutus';
      $data['page_title'] = 'About Us';
      $data['about_detail'] = $this->db->get_where('pages', array('page_id' =>5))->result_array();

      $this->load->view('front/layout',$data); 
    }
    public function vice_chancellors_office(){
    $data['page_name'] = 'information/vc_office';
    $data['page_title'] = 'VC Office';
   
   
    $this->load->view('front/layout',$data); 
    }

   public function chairman_office(){
    $data['page_name'] = 'information/chairman_office';
    $data['page_title'] = 'Chairman Office';
   

    $this->load->view('front/layout',$data); 
 }

 public function registrar_office(){
  $data['page_name'] = 'information/registrar_office';
  $data['page_title'] = 'registrar Office';
 

  $this->load->view('front/layout',$data); 
}

public function controller_examination(){
  $data['page_name'] = 'information/controller_exam';
  $data['page_title'] = 'Examination Office';
 

  $this->load->view('front/layout',$data); 
}

public function treasures(){
  $data['page_name'] = 'information/treasures';
  $data['page_title'] = 'Treasures Office';
 

  $this->load->view('front/layout',$data); 
}

public function human_resources(){
  $data['page_name'] = 'information/hr_office';
  $data['page_title'] = 'HR Office';
 

  $this->load->view('front/layout',$data); 
}

public function IT_center(){
  $data['page_name'] = 'information/it_center';
  $data['page_title'] = 'IT_center Office';
 

  $this->load->view('front/layout',$data); 
}

public function security_department(){
  $data['page_name'] = 'information/security_department';
  $data['page_title'] = 'security_department';
 

  $this->load->view('front/layout',$data); 
}


public function admission_policy(){
  $data['page_name'] = 'information/admission_policy';
  $data['page_title'] = 'Admission policy';
  

  $this->load->view('front/layout',$data); 

}

public function FAQs(){
  $data['page_name'] = 'information/faqs';
  $data['page_title'] = 'Frequently Asked Questions';
  

  $this->load->view('front/layout',$data); 

}

public function admission_office(){
  $data['page_name'] = 'information/admission_office';
  $data['page_title'] = 'Admission Office';
  

  $this->load->view('front/layout',$data); 

}

public function qec_office(){
  $data['page_name'] = 'information/qec_office';
  $data['page_title'] = 'QEC Office';
  

  $this->load->view('front/layout',$data); 

}

public function oric_office(){
  $data['page_name'] = 'information/oric';
  $data['page_title'] = 'Oric Office';
  

  $this->load->view('front/layout',$data); 

}

public function student_services_office(){
  $data['page_name'] = 'information/student_services';
  $data['page_title'] = 'Student Services Office';
  

  $this->load->view('front/layout',$data); 

}

public function center_of_media_Publication(){
  $data['page_name'] = 'information/medical_publication';
  $data['page_title'] = 'Center Of Media Publication';
  

  $this->load->view('front/layout',$data); 

}

// Offices of USKT

     public function program_detail(){
      $data['page_name'] = 'programs/program_detail';
      $data['page_title'] = 'Program';

      $id = $this->uri->segment(3);
      $data['program_data'] = $this->db->get_where('program', array('p_id' =>$id))->result_array();

      $this->load->view('front/layout',$data); 
   }
   public function teacher()
   {
    $data['page_name'] = 'teachers/teacher_list';
    $data['page_title'] = 'All Teachers';
    $this->load->library('pagination');
    if(isset( $_GET['q'])){
      $this->db->like('t_name',$_GET['q']);
      if(isset($_GET['d'])){
      $dep = $_GET['d'];
      $this->db->where('t_department', $dep);
      }
      $teacher = $this->db->get('teacher');
      $count  = $teacher->num_rows();
    }else{
  $count = $this->db->count_all("teacher");
    }

        $config = array();
        $config["base_url"] = base_url('home/teacher');
        $config['total_rows'] =  $count;//here we will count all the data from the table
        $config['per_page'] = 4;//number of data to be shown on single page
        $config["uri_segment"] = 3;
        $config['full_tag_open']    = "<ul class='pagination theme-colored pull-right xs-pull-center mb-xs-40'>";
        $config['full_tag_close']   = "</ul>";
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = "<li class='active'><a href='#'>";
        $config['cur_tag_close']    = "</a></li>";
        $config['next_tag_open']    = "<li>";
        $config['next_tagl_close']  = "</li>";
        $config['prev_tag_open']    = "<li>";
        $config['prev_tagl_close']  = "</li>";
        $config['first_tag_open']   = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open']    = "<li>";
        $config['last_tagl_close']  = "</li>";
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->db->limit($config['per_page'], $page);
        if(isset( $_GET['q'])){
          $this->db->like('t_name',$_GET['q']);
        }
        $data['teacher']= $this->db->get('teacher')->result_array();
        $data["links"] = $this->pagination->create_links();//create the link for pagination

   


    $this->load->view('front/layout',$data); 
   }
   public function teacher_detail($id)
   {
    $data['page_name'] = 'teachers/teacher_detail';
    $data['page_title'] = 'Teacher Detail';
    if($id)
    {
      $data['t_detail'] = $this->db->get_where('teacher', array('t_id'=>$id))->result_array();
    }
    $this->load->view('front/layout',$data); 
   }

   public function edit_profile()
   {
    $data['page_name'] = "teachers/edit_profile";
    $data['page_title'] = "Edit Profile";
    $id= $this->uri->segment(3);
    $data['t_detail'] = $this->db->get_where('teacher', array('t_id'=>$id))->result_array();
    
    if($_POST)
    {
     
      $pdata['t_name'] = $this->input->post('name');
      $pdata['t_desig'] =$this->input->post('desig');
      $pdata['t_description'] =$this->input->post('description');
      $pdata['t_biography'] =$this->input->post('biography');
      $pdata['t_department'] =$this->input->post('department');
      $pdata['t_mail'] =$this->input->post('mail');
      $pdata['t_address'] =$this->input->post('address');
      $pdata['t_contact'] =$this->input->post('contact'); 
      $pdata['t_mail'] =$this->input->post('mail');
      $pdata['t_research'] =$this->input->post('research'); 


      $degree = $this->input->post('degree');
      $institute = $this->input->post('institute');
      $year = $this->input->post('year');
  $i = 0;
  $all_data = array();
  foreach($degree as $deg){
      
     $detail['degree'] =  $deg;
     
     $detail['institute'] = $institute[$i];
     $detail['year'] = $year[$i];
     $all_data[] = $detail;

    $i++;
   
  }
$datac  = json_encode($all_data);
$pdata['t_qualification'] = $datac;
 
// Experience

$position = $this->input->post('position');

$einstitute = $this->input->post('e_institute');
 $eyear = $this->input->post('e_year');
$i = 0;
$exp_data = array();

foreach($position as $pos){

$edetail['position'] =  $pos;
$edetail['einstitute'] = $einstitute[$i];
$edetail['eyear'] = $eyear[$i];
$exp_data[] = $edetail;

$i++;

}
$datae  = json_encode($exp_data);
$pdata['t_experience'] = $datae;

if($_POST){
  $config['upload_path']          = './uploads/teacher/';
  $config['allowed_types']        = 'gif|jpg|png';
  $config['max_size']             = 10000000;
  $this->load->library('upload', $config);
  $this->upload->initialize($config);
  if ( ! $this->upload->do_upload('photo'))
  {
      $error = array('error' => $this->upload->display_errors());
         
         }
  else
  {
     $photo = array('upload_data' => $this->upload->data());
 
     $pdata['event_photo']= $photo['upload_data']['file_name'];
         }

}

      $this->db->where('t_id', $id);    
      $this->db->update('teacher', $pdata);
  
      $this->session->set_flashdata('message_name', 'program added Succesully.');
      redirect(base_url(). "home/teacher_detail/" .$id);
    
 
     }
    $this->load->view('front/layout', $data);
   
  }

  public function faculty_detail()
  {
   $data['page_name'] = 'faculty/faculty_detail';
   $data['page_title'] = 'Faculty Detail';
   $id= $this->uri->segment(3);
     $data['f_detail'] = $this->db->get_where('faculty', array('f_id'=>$id))->result_array();
   
   $this->load->view('front/layout',$data); 
  }

  public function under_construction()
  {
   $data['page_name'] = 'information/under_construction';
   $data['page_title'] = ' under_construction';
  
   
   $this->load->view('front/layout',$data); 
  } 

function test_email(){
  $this->load->library('email');
  $this->email->from('smartprix36@gmail.com', 'Muhammad Salman');
$this->email->to('m.salman@thetasolutions.co.uk');
 
$this->email->subject('Email Test');
$this->email->message('Testing the email class.');
$this->email->send();
echo '<br />';
echo $this->email->print_debugger();
}
}
