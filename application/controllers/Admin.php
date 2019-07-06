<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
public function __construct(){
    parent::__construct();
    $this->load->library('upload');
    $this->load->library('session');
    $this->load->helper('url');
    $this->load->database();
    $this->load->helper('text');
    
  

}
public function index(){
    $login = $this->session->userdata('admin_loggin');
   
    if( $login ){
        redirect(base_url().'admin/dashboard');
    }
    $this->load->view('admin/login');
}

public function register()
{
    
    $this->load->view('admin/register');
}





	public function login()
	{
        $login = $this->session->userdata('admin_loggin');
   
        if( $login ){
            redirect(base_url().'admin/dashboard');
        }
		$this->load->view('admin/login');
    }

public function admin_login()
{
   
    $login = $this->session->userdata('admin_loggin');
   
    if( $login ){
        redirect(base_url().'admin/dashboard');
    }
    $data['page_name']= "admin/login";
    $data['page_title']= 'login';
    $this->load->view('admin/layout',$data);   
    
       $pdata['email'] = $this->input->post('email');
       $pdata['password'] = md5($this->input->post('password'));
        
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($pdata);
        $query = $this->db->get();
        $result = $query->result_array();
        if($query->num_rows()==1){
            $sdata = array(
                
                'username'=>$result[0]['username'],
                'email' =>$result[0]['email']
            );
           $this->session->set_userdata('admin_loggin',$sdata);
           redirect(base_url().'admin/dashboard');
        }else{
            $this->session->set_flashdata('message_name', 'Error! Check your email or password.');
            redirect(base_url().'admin/login');
        }
}

public function logout(){
   session_destroy();
   redirect(base_url().'admin/');
}

    public function dashboard(){
        $login = $this->session->userdata('admin_loggin');
   
        if( !$login ){
            redirect(base_url().'admin/');
        }
        if(isset($_SESSION['admin_loggin'])){
            $data['page_name']= "dashboard";
           $data['page_title']= 'Dashboard';
           $this->load->view('admin/layout',$data);
        }else{
            redirect(base_url().'admin/login');
        }
    }
    public function users(){
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        $data['page_name']= "users/users";
        $data['page_title']= 'Users';
        $data['users'] = $this->db->get('users')->result_array();
        $this->load->view('admin/layout',$data);
    }
    public function add_user(){
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        $data['page_name']= "users/add_user";
        $data['page_title'] = "Add User";
    if($_POST){
        $pdata['first_name'] = $this->input->post('first_name');
        $pdata['last_name'] = $this->input->post('last_name');
        $pdata['username'] = $this->input->post('user_name');
        $pdata['email'] = $this->input->post('email');
        $pdata['password'] = md5($this->input->post('password'));
       
        
        if($_FILES['photo']){
            $config['upload_path']          = './uploads/user/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000000;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('photo'))
            {
                $error = array('error' => $this->upload->display_errors());
                   print_r($error);
                   die();
                   }
            else
            {
               $photo = array('upload_data' => $this->upload->data());
           
               $pdata['photo']= $photo['upload_data']['file_name'];
                   }
    
        }
        $this->db->insert('users',$pdata);
        $this->session->set_flashdata('message_name', 'User successfully added.');
        redirect(base_url()."admin/users");
    }
        $this->load->view('admin/layout',$data);
    }
    public function update_user(){
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        $data['page_name']= "users/update_user";
        $data['page_title'] = "Edit User";
        $id = $this->uri->segment(3);
        $data['user_id'] = $this->db->get_where('users', array('user_id'=>$id))->result_array();
        if($_POST){
            
            $pdata['first_name'] = $this->input->post('first_name');
            $pdata['last_name'] = $this->input->post('last_name');
            $pdata['username'] = $this->input->post('user_name');
            $pdata['email'] = $this->input->post('email');
            $password = $this->input->post('password');
            if($password  != ""){
            $pdata['password'] = md5($this->input->post('password'));
        }
      
        if($_FILES['photo']){
            $config['upload_path']          = './uploads/user/';
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
           
               $pdata['photo']= $photo['upload_data']['file_name'];
                   }
    
        }
            $this->db->where('user_id',$id);
            $this->db->update('users',$pdata);
            $this->session->set_flashdata('message_name', 'User successfully Updated.');
            redirect(base_url()."admin/update_user/".$id);
        }
        $this->load->view('admin/layout',$data);
    }
    public function delete_user(){
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        $id = $this->uri->segment(3);
       if($id){
           $this->db->where('user_id',$id);
           $this->db->delete('users');
           $this->session->set_flashdata('message_name', 'User successfully Deleted.');
           redirect(base_url()."admin/users");
       }
    }
    public function Posts()
    {
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        $data['page_name'] = "Posts/Posts";
        $data['page_title'] = "All Posts";
        $data['posts'] = $this->db->get('posts')->result_array();
        $this->load->view('admin/layout', $data);
    }
    public function add_post()
    {
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }

        $data['page_name'] = "Posts/add_post";
        $data['page_title'] = "New Post";     
        
       if($_POST) 
        {
          
            $pdata['post_title'] = $this->input->post('title');
            $pdata['post_description'] =$this->input->post('description');
            $pdata['post_author'] = $this->input->post('author');
            $pdata['post_tags'] = $this->input->post('tags');
            $pdata['post_category'] = $this->input->post('category'); 
           
            if($_FILES['photo']){
                $config['upload_path']          = './uploads/posts/';
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
                  
                   $pdata['post_photo']= $photo['upload_data']['file_name'];
                   
                       }
        
            }

            $this->db->insert('posts', $pdata);
            
            $this->session->set_flashdata('message_name', 'Post added Succesully.');
            redirect(base_url(). "admin/posts");
        }
        $this->load->view('admin/layout' , $data);
   }
   public function update_post()
       {
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        
           $data['page_name']= "Posts/update_post";
           $data['page_title']= "Update Post";
           $id = $this->uri->segment(3);
         
           $data['post_id'] = $this->db->get_where('posts', array('post_id'=>$id))->result_array();
           if($_POST)
           {
            $pdata['post_title'] = $this->input->post('title');
            $pdata['post_description'] =$this->input->post('description');
            $pdata['post_author'] = $this->input->post('author');
            $pdata['post_tags'] = $this->input->post('tags');
            $pdata['post_category'] = $this->input->post('category');  
           
           if($_FILES['photo']){
            $config['upload_path']          = './uploads/posts/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000000;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('photo'))
            {
                $error = array('error' => $this->upload->display_errors());
                   print_r($error);
                   die();
                   }
            else
            {
               $photo = array('upload_data' => $this->upload->data());
              
               $pdata['post_photo']= $photo['upload_data']['file_name'];
               
                   }
    
        }
           $this->db->where('post_id', $id);    
           $this->db->update('posts', $pdata);
           $this->session->set_flashdata('message_name', 'Post successfully Updated.');
           redirect(base_url()."admin/update_post/" .$id);
        }
           $this->load->view('admin/layout', $data);
        }
   public function delete_post()
   {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
    $id = $this->uri->segment(3);
       if($id)
       {
           $this->db->where('post_id', $id);
           $this->db->delete('posts');
           $this->session->set_flashdata('message_name', 'Post successfully Deleted.');
           redirect(base_url()."admin/posts");
       }
   }
   public function category()
    {
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        
        $data['page_name'] = "category/category";
        $data['page_title'] = "All Categories";
        $data['category'] = $this->db->get('category')->result_array();
        $this->load->view('admin/layout', $data);
    }

    public function add_category()
    {
        
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        
       $data['page_name'] = "category/add-category";
       $data['page_title'] = "Add New";
       
       
        if($_POST)
        {
            $pdata['cat_name'] = $this->input->post('name');
            $pdata['cat_description'] = $this->input->post('description');
          
            if($_FILES)
            {
            $config['upload_path']          = './uploads/category/';
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
           
               $pdata['cat_photo']= $photo['upload_data']['file_name'];
                   }

            }
            
            $this->db->insert('category', $pdata);
            $this->session->set_flashdata('message_name', 'Category successfully added.');
        }
            $this->load->view('admin/layout', $data);
            
            
}
   public function update_category()
   {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
       $data['page_name'] = "category/update_category";
       $data['page_title'] = "Update Category";
       $id= $this->uri->segment(3);   
       $data['cat_id'] = $this->db->get_where('category' , array('cat_id'=>$id))->result_array();
       
       if($_POST)
       {
        $pdata['cat_name'] = $this->input->post('name');
        $pdata['cat_description'] =$this->input->post('description');  
       
        if($_FILES['photo']){
            $config['upload_path']          = './uploads/category/';
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
           
               $pdata['cat_photo']= $photo['upload_data']['file_name'];
                   }
    
        }
       $this->db->where('cat_id', $id);    
       $this->db->update('category', $pdata);
       $this->session->set_flashdata('message_name', 'Category successfully Updated.');
       redirect(base_url()."admin/update_category/" .$id);
    }
    $this->load->view('admin/layout', $data);
    
   }

   public function delete_category()
   {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
    $id = $this->uri->segment(3);
       if($id)
       {
           $this->db->where('cat_id', $id);
           $this->db->delete('category');
           $this->session->set_flashdata('message_name', 'category successfully Deleted.');
           redirect(base_url()."admin/category");
       }

   }
   public function blog()
   {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
    $data['page_name'] = "blog/blog";
    $data['page_title'] = "All Blogs";
    $data['blog'] = $this->db->get('blog')->result_array();
    $this->load->view('admin/layout', $data);   
   }

   public function add_blog()
   {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
    $data['page_name'] = "blog/add_blog";
    $data['page_title'] = "Add New";
    
    if($_POST) 
    {
      
        $pdata['blog_title'] = $this->input->post('title');
        $pdata['blog_description'] =$this->input->post('description');
        $pdata['blog_author'] = $this->input->post('author');
        $pdata['blog_tags'] = $this->input->post('tags');
        $pdata['blog_category'] = $this->input->post('category'); 
        $pdata['created_at'] = time();
        if($_FILES['photo']){
            $config['upload_path']          = './uploads/blog/';
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
           
               $pdata['blog_photo']= $photo['upload_data']['file_name'];
                   }
    
        }
        $this->db->insert('blog', $pdata);
        $this->session->set_flashdata('message_name', 'blog added Succesully.');
        redirect(base_url(). "admin/blog");
    }
    $this->load->view('admin/layout', $data);
   
   }

   public function update_blog()
   {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
    $data['page_name'] = "blog/update_blog";
    $data['page_title'] = "Update blog";
    $id= $this->uri->segment(3);
    $data['blog_id'] = $this->db->get_where('blog', array('blog_id'=>$id))->result_array();
   
    if($_POST)
    {
     $pdata['blog_title'] = $this->input->post('title');
     $pdata['blog_description'] =$this->input->post('description');  
     $pdata['blog_author'] = $this->input->post('author');
     $pdata['blog_tags'] = $this->input->post('tags');
     $pdata['blog_category'] = $this->input->post('category');  
    
     if($_FILES['photo']){
        $config['upload_path']          = './uploads/blog/';
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
       
           $pdata['blog_photo']= $photo['upload_data']['file_name'];
               }

    }
    $this->db->where('blog_id', $id);    
    $this->db->update('blog', $pdata);
    $this->session->set_flashdata('message_name', 'blog successfully Updated.');
    redirect(base_url()."admin/update_blog/" .$id);
     }
    $this->load->view('admin/layout', $data);
   
  }
  
  public function delete_blog()
  {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
   $id = $this->uri->segment(3);
      if($id)
      {
          $this->db->where('blog_id', $id);
          $this->db->delete('blog');
          $this->session->set_flashdata('message_name', 'blog successfully Deleted.');
          redirect(base_url()."admin/blog");
      }

  }
  public function event()
  {
      
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
   $data['page_name'] = 'event/event';
   $data['page_title'] = 'All Events';
   $data['events'] = $this->db->get('events')->result_array();
   
   $this->load->view('admin/layout', $data);   
  }

  public function add_event()
  {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
   $data['page_name'] = "event/add_event";
   $data['page_title'] = "Add New";
   
   if($_POST) 
   {
     
       $pdata['event_title'] = $this->input->post('title');
       $pdata['event_description'] =$this->input->post('description');
       $pdata['event_location'] = $this->input->post('location');
       $pdata['event_category'] = $this->input->post('category');
       $pdata['event_date'] = $this->input->post('date'); 
       $pdata['start_time'] = $this->input->post('start_time'); 
       $pdata['end_time'] = $this->input->post('end_time'); 
      
       if($_FILES['photo']){
        $config['upload_path']          = './uploads/events/';
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
       $pdata['event_date']= 1/12/2019; 
       $this->db->insert('events', $pdata);
       
       
       $this->session->set_flashdata('message_name', 'event added Succesully.');
       redirect(base_url(). "admin/event");
       
    }
   

   $this->load->view('admin/layout', $data);
  }
  
  public function update_event()
  {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    } 
   $data['page_name'] = "event/update_event";
   $data['page_title'] = "Update event";
   $id= $this->uri->segment(3);
   $data['event_id'] = $this->db->get_where('events', array('event_id'=>$id))->result_array();
  
   if($_POST)
   {
    $pdata['event_title'] = $this->input->post('title');
    $pdata['event_description'] =$this->input->post('description');  
    $pdata['event_location'] = $this->input->post('location');
    $pdata['event_category'] = $this->input->post('category');  
    $pdata['event_date'] = $this->input->post('date'); 
   
    $pdata['start_time'] = $this->input->post('start_time'); 
    $pdata['end_time'] = $this->input->post('end_time'); 
   
    if($_FILES['photo']){
        $config['upload_path']          = './uploads/events/';
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
   $this->db->where('event_id', $id);    
   $this->db->update('events', $pdata);
   $this->session->set_flashdata('message_name', 'Event successfully Updated.');
   redirect(base_url(). "admin/event");
    }
   $this->load->view('admin/layout', $data);
  
 }
 
 public function delete_event()
 {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
  $id = $this->uri->segment(3);
     if($id)
     {
         $this->db->where('event_id', $id);
         $this->db->delete('events');
         $this->session->set_flashdata('message_name', 'event successfully Deleted.');
         redirect(base_url()."admin/event");
     }

 }

 public function faculties()
  {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
   $data['page_name'] = 'faculty/faculties';
   $data['page_title'] = 'All Faculties';
   $data['faculty'] = $this->db->get('faculty')->result_array();
   
   $this->load->view('admin/layout', $data);   
  }

  public function add_faculty()
  {

  $data['page_name'] = 'faculty/add_faculty';
   $data['page_title'] = 'Add Faculty';
   
    
   if($_POST) 
   {
     
       $pdata['f_title'] = $this->input->post('title');
       $pdata['f_description'] =$this->input->post('description');
       
      
       if($_FILES['photo']){
        $config['upload_path']          = './uploads/faculty/';
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
       
           $pdata['f_photo']= $photo['upload_data']['file_name'];
               }

    }
       $this->db->insert('faculty', $pdata);
       
       
       $this->session->set_flashdata('message_name', 'Faculty added Succesully.');
       redirect(base_url(). "admin/faculties");
       
    }
   
   $this->load->view('admin/layout', $data);
   
  }
  
  public function update_faculty()
  {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
   $data['page_name'] = "faculty/update_faculty";
   $data['page_title'] = "Update Faculty";
   $id= $this->uri->segment(3);
   $data['f_id'] = $this->db->get_where('faculty', array('f_id'=>$id))->result_array();
  
   if($_POST)
   {
    $pdata['f_title'] = $this->input->post('title');
    $pdata['f_description'] =$this->input->post('description'); 
    if($_FILES['photo']){
        $config['upload_path']          = './uploads/faculty/';
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
       
           $pdata['f_photo']= $photo['upload_data']['file_name'];
               }

    }
    
   $this->db->where('f_id', $id);    
   $this->db->update('department', $pdata);
   $this->session->set_flashdata('message_name', 'Faculty successfully Updated.');
   redirect(base_url()."admin/faculties/" .$id);
    }
   $this->load->view('admin/layout', $data);
  
 }
 
 public function delete_faculty()
 {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
  $id = $this->uri->segment(3);
     if($id)
     {
         $this->db->where('f_id', $id);
         $this->db->delete('faculty');
         $this->session->set_flashdata('message_name', 'Faculty successfully Deleted.');
         redirect(base_url()."admin/faculties");
     }

 }
 
 public function departments()
  {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
   $data['page_name'] = 'department/departments';
   $data['page_title'] = 'All departments';
   $data['depart'] = $this->db->get('department')->result_array();
   
   $this->load->view('admin/layout', $data);   
  }

  public function add_department()
  {

    $data['page_name'] = 'department/add_department';
   $data['page_title'] = 'All departments';
   
    
   if($_POST) 
   {
     
       $pdata['d_name'] = $this->input->post('name');
       $pdata['d_description'] =$this->input->post('description');
       $pdata['top_title'] = $this->input->post('top_title');
       $pdata['top_description'] = $this->input->post('top_description');
       $pdata['f_id'] = $this->input->post('faculty');
      
       if($_FILES['photo']){
        $config['upload_path']          = './uploads/department/';
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
       
           $pdata['d_photo']= $photo['upload_data']['file_name'];
               }

    }
       $this->db->insert('department', $pdata);
       
       
       $this->session->set_flashdata('message_name', 'department added Succesully.');
       redirect(base_url(). "admin/departments");
       
    }
   
   $this->load->view('admin/layout', $data);
   
  }
  
  public function update_department()
  {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
   $data['page_name'] = "department/update_department";
   $data['page_title'] = "Update department";
   $id= $this->uri->segment(3);
   $data['d_id'] = $this->db->get_where('department', array('d_id'=>$id))->result_array();
  
   if($_POST)
   {
    $pdata['d_name'] = $this->input->post('name');
    $pdata['d_description'] =$this->input->post('description'); 
    $pdata['top_title'] = $this->input->post('top_title');
    $pdata['top_description'] = $this->input->post('top_description');   
    $pdata['f_id'] = $this->input->post('faculty');  

    if($_FILES['photo']){
        $config['upload_path']          = './uploads/department/';
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
       
           $pdata['d_photo']= $photo['upload_data']['file_name'];
               }

    }
    
   $this->db->where('d_id', $id);    
   $this->db->update('department', $pdata);
   $this->session->set_flashdata('message_name', 'department successfully Updated.');
   redirect(base_url()."admin/departments/" .$id);
    }
   $this->load->view('admin/layout', $data);
  
 }
 
 public function delete_department()
 {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
  $id = $this->uri->segment(3);
     if($id)
     {
         $this->db->where('d_id', $id);
         $this->db->delete('department');
         $this->session->set_flashdata('message_name', 'Department successfully Deleted.');
         redirect(base_url()."admin/departments");
     }

 }

 public function teachers()

     {
        
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        
         $data['page_name'] = 'teachers/teachers';
         $data['page_title'] = 'All Teachers';
         $data['teachers']= $this->db->get('teacher')->result_array();
         $this->load->view('admin/layout', $data);

     }
   
     public function add_teacher()
     {
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        
   
       $data['page_name'] = 'teachers/add_teacher';
       $data['page_title'] = 'Add Teacher';
       
      if($_POST) 
      {
        
          $pdata['t_name'] = $this->input->post('name');
          $pdata['t_desig'] =$this->input->post('desig');
          $pdata['t_description'] =$this->input->post('description');
          $pdata['t_biography'] =$this->input->post('biography');
          $pdata['t_department'] =$this->input->post('department');
          $pdata['t_address'] =$this->input->post('address');
          $pdata['t_contact'] =$this->input->post('contact');
          $pdata['t_address'] =$this->input->post('contact'); 
          $pdata['t_mail'] =$this->input->post('mail'); 
          $pdata['t_research'] =$this->input->post('research'); 
          $pdata['password'] =$this->input->post('password'); 
          
          
        
     
          if($_FILES ['photo']){
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
           
               $pdata['t_photo']= $photo['upload_data']['file_name'];
                   }
    
        }
           

          $this->db->insert('teacher', $pdata);
         
          $this->session->set_flashdata('message_name', 'department added Succesully.');
          redirect(base_url(). "admin/teachers");
          
       }
      
   
      $this->load->view('admin/layout', $data);
     }
     
     public function update_teacher()
     {
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        
      $data['page_name'] = "teachers/update_teacher";
      $data['page_title'] = "Update Teacher";
      $id= $this->uri->segment(3);
      $data['t_id'] = $this->db->get_where('teacher', array('t_id'=>$id))->result_array();
      
      if($_POST)
      {
       $pdata['t_name'] = $this->input->post('name');
       $pdata['t_desig'] =$this->input->post('desig');
       $pdata['t_description'] =$this->input->post('description'); 
       $pdata['t_biography'] =$this->input->post('biography');
       $pdata['t_department'] =$this->input->post('department');
       $pdata['t_address'] =$this->input->post('address');
      $pdata['t_contact'] =$this->input->post('contact');
       $pdata['email'] =$this->input->post('mail');
       $pdata['t_research'] =$this->input->post('research'); 
      $password = md5($this->input->post('password')); 
      if($password != "")
      {
          $pdata['password']= md5($this->input->post('password'));  
      }
 
       if($_FILES ['photo']){
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
       
           $pdata['t_photo']= $photo['upload_data']['file_name'];
               }

    }
       

     
        $this->db->where('t_id', $id);    
        $this->db->update('teacher', $pdata);
    
      $this->session->set_flashdata('message_name', 'teacher successfully Updated.');
      redirect(base_url()."admin/teachers/" .$id);

       }
      $this->load->view('admin/layout', $data);
     
    }
    
    public function delete_teacher()
    {

        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        
     $id = $this->uri->segment(3);
        if($id)
        {
            $this->db->where('t_id', $id);
            $this->db->delete('teacher');
            $this->session->set_flashdata('message_name', 'teacher successfully Deleted.');
            redirect(base_url()."admin/teachers");
        }
   
    }
    public function course_category()
    {
        
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        $data['page_name'] = "course_category/course_category";
        $data['page_title'] = "All Categories";
        $data['course_category'] = $this->db->get('course_category')->result_array();
        $this->load->view('admin/layout', $data);
    }

    public function add_course_category()
    {
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        
        
       $data['page_name'] = "course_category/add_course_category";
       $data['page_title'] = "Add New";
       
       
        if($_POST)
        {
            $pdata['c_name'] = $this->input->post('name');
            
            if($_FILES)
            {
            $config['upload_path']          = './uploads/course_category/';
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
           
               $pdata['c_photo']= $photo['upload_data']['file_name'];
                   }

            }
            
            $this->db->insert('course_category', $pdata);
            $this->session->set_flashdata('message_name', 'Category successfully added.');
        }
            $this->load->view('admin/layout', $data);
            
            
}
   public function update_course_category()
   {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
       $data['page_name'] = "category/update_category";
       $data['page_title'] = "Update Category";
       $id= $this->uri->segment(3);   
       $data['c_id'] = $this->db->get_where('course_category' , array('c_id'=>$id))->result_array();
       
       if($_POST)
       {
        $pdata['c_name'] = $this->input->post('name');
        $pdata['c_description'] =$this->input->post('description');  
       
        if($_FILES['photo']){
            $config['upload_path']          = './uploads/course_category/';
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
           
               $pdata['c_photo']= $photo['upload_data']['file_name'];
                   }
    
        }
       $this->db->where('c_id', $id);    
       $this->db->update('course_category', $pdata);
       $this->session->set_flashdata('message_name', 'Category successfully Updated.');
       redirect(base_url()."admin/update_category/" .$id);
    }
    $this->load->view('admin/layout', $data);
    
   }

   public function delete_course_category()
   {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
    $id = $this->uri->segment(3);
       if($id)
       {
           $this->db->where('c_id', $id);
           $this->db->delete('course_category');
           $this->session->set_flashdata('message_name', 'category successfully Deleted.');
           redirect(base_url()."admin/course_category");
       }

   }
   public function programs()
  {
      
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
   $data['page_name'] = 'programs/programs';
   $data['page_title'] = 'All programs';
   $data['programs'] = $this->db->get('program')->result_array();
   
   $this->load->view('admin/layout', $data);   
  }

  public function add_program()
  {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    

    $data['page_name'] = 'programs/add_program';
    $data['page_title'] = 'All department';
    
   if($_POST) 
   {
     
       $pdata['p_name'] = $this->input->post('name');
       $pdata['p_department'] =$this->input->post('department');
       $pdata['p_category'] =$this->input->post('category');
       $pdata['ad_status'] =$this->input->post('status');
       $pdata['p_credit'] =$this->input->post('credit');
       $pdata['p_duration'] =$this->input->post('duration');
       $pdata['p_samester'] =$this->input->post('samester');
       $pdata['p_description'] =$this->input->post('description');
       $pdata['p_criteria'] =$this->input->post('criteria');
      
$fee_year = $this->input->post('fee_year');
$samester_fee = $this->input->post('fee_samester');
$fee_value = $this->input->post('fee_fee');
  $i = 0;
  $fee_data = array();
  foreach($fee_year as $fees){
      
     $fee['year'] =  $fees;
     $fee['samester'] = $samester_fee[$i];
     $fee['fee'] = $fee_value[$i];
     $fee_data[] = $fee;
    
    $i++;
   
  }
$datac  = json_encode($fee_data);
$pdata['p_fee'] =$datac;

       if($_FILES['photo']){
        $config['upload_path']          = './uploads/program/';
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
       
           $pdata['p_photo']= $photo['upload_data']['file_name'];
               }

    }
       $this->db->insert('program', $pdata);
       
       
       $this->session->set_flashdata('message_name', 'program added Succesully.');
       redirect(base_url(). "admin/programs");
       
    }
   

   $this->load->view('admin/layout', $data);
  }
  
  public function update_program()
  {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
   $data['page_name'] = "programs/update_program";
   $data['page_title'] = "Update program";
   $id= $this->uri->segment(3);
   $data['p_id'] = $this->db->get_where('program', array('p_id'=>$id))->result_array();
  
   if($_POST)
   {
    $pdata['p_name'] = $this->input->post('name');
    $pdata['p_department'] =$this->input->post('program'); 
    $pdata['p_department'] =$this->input->post('department');
    $pdata['p_category'] =$this->input->post('category'); 
    $pdata['ad_status'] =$this->input->post('status'); 
    $pdata['p_credit'] =$this->input->post('credit');
    $pdata['p_duration'] =$this->input->post('duration');
    $pdata['p_samester'] =$this->input->post('samester');
    $pdata['p_description'] =$this->input->post('description');
    $pdata['p_criteria'] =$this->input->post('criteria');
    $fee_year = $this->input->post('fee_year');
    $samester_fee = $this->input->post('fee_samester');
    $fee_value = $this->input->post('fee_fee');
      $i = 0;
      $fee_data = array();
      foreach($fee_year as $fees){
          
         $fee['year'] =  $fees;
         $fee['samester'] = $samester_fee[$i];
         $fee['fee'] = $fee_value[$i];
         $fee_data[] = $fee;
        
        $i++;
       
      }
    $datac  = json_encode($fee_data);
    $pdata['p_fee'] =$datac;
          

    if($_FILES['photo']){
        $config['upload_path']          = './uploads/program/';
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
       
           $pdata['p_photo']= $photo['upload_data']['file_name'];
               }

    }
   
   $this->db->where('p_id', $id);    
   $this->db->update('program', $pdata);
   $this->session->set_flashdata('message_name', 'program successfully Updated.');
   redirect(base_url()."admin/programs/" .$id);
    }
   $this->load->view('admin/layout', $data);
  
 }
 
 public function delete_program()
 {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
  $id = $this->uri->segment(3);
     if($id)
     {
         $this->db->where('p_id', $id);
         $this->db->delete('program');
         $this->session->set_flashdata('message_name', 'program successfully Deleted.');
         redirect(base_url()."admin/programs");
     }

 }
 public function home_settings()
    {
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        
        $data['page_name'] = "home_settings/settings";
        $data['page_title'] = "All Settings";
    
        $this->load->view('admin/layout', $data);
    }

   public function update_setting()
   {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
    $data['page_name'] = "home_settings/update_settings";
    $data['page_title'] = "Update Setting";
    $id= $this->uri->segment(3);
    $data['s_id'] = $this->db->get_where('home_settings', array('s_id'=>$id))->result_array();
       if($_POST)
       {
           $pdata['s_content'] = $this->input->post('content');
         
       $this->db->where('s_id', $id);    
       $this->db->update('home_settings', $pdata);
       $this->session->set_flashdata('message_name', 'Setting successfully Updated.');
       redirect(base_url()."admin/home_settings/" .$id);
    }
    $this->load->view('admin/layout', $data);
    
   }

   public function delete_settings()
   {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
    $id = $this->uri->segment(3);
       if($id)
       {
           $this->db->where('s_id', $id);
           $this->db->delete('home_settings');
           $this->session->set_flashdata('message_name', 'Settings successfully Deleted.');
           redirect(base_url()."admin/settings");
       }

   }
   public function pages()
   {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
       $data['page_name'] = "all_pages/pages";
       $data['page_title'] = "All Pages";
       $data['pages'] = $this->db->get('pages')->result_array();
       
       $this->load->view('admin/layout', $data);
   }

   public function add_page()
   {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
       $data['page_name'] = "all_pages/add_page";
       $data['page_title'] = "Add Page";
      
      
       if($_POST)
       {
           $pdata['page_title'] = $this->input->post('name');
           $pdata['page_description'] = $this->input->post('description');
           
           if($_FILES)
           {
           $config['upload_path']          = './uploads/pages/';
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
          
              $pdata['page_photo']= $photo['upload_data']['file_name'];
                  }

           }
           
           $this->db->insert('pages', $pdata);
           $this->session->set_flashdata('message_name', 'Page successfully added.');
           redirect(base_url()."admin/pages/");
       }
           $this->load->view('admin/layout', $data);
           
           
           
}
  public function update_page()
  {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
   $data['page_name'] = "all_pages/update_page";
   $data['page_title'] = "Update Page";
   $id= $this->uri->segment(3);
   $data['page_id'] = $this->db->get_where('pages', array('page_id'=>$id))->result_array();
  
      if($_POST)
      {
       $pdata['page_title'] = $this->input->post('name');
           $pdata['page_description'] = $this->input->post('description');
      
       if($_FILES['photo']){
           $config['upload_path']          = './uploads/pages/';
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
          
              $pdata['page_photo']= $photo['upload_data']['file_name'];
                  }
   
       }
      $this->db->where('page_id', $id);    
      $this->db->update('pages', $pdata);
      $this->session->set_flashdata('message_name', 'Page successfully Updated.');
      redirect(base_url()."admin/pages/" .$id);
   }
   $this->load->view('admin/layout', $data);
   
  }

  public function delete_page()
  {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
   $id = $this->uri->segment(3);
      if($id)
      {
          $this->db->where('page_id', $id);
          $this->db->delete('pages');
          $this->session->set_flashdata('message_name', 'page successfully Deleted.');
          redirect(base_url()."admin/pages");
      }

  }
  public function testimonial()
    {
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        
        $data['page_name'] = "testimonial/testimonial";
        $data['page_title'] = "All testimonial";
        $data['testimonial'] = $this->db->get('testimonial')->result_array();
        $this->load->view('admin/layout', $data);
    }

    public function add_testimonial()
    {
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        
       $data['page_name'] = "testimonial/add-testimonial";
       $data['page_title'] = "Add New";
       
       
        if($_POST)
        {
            $pdata['t_name'] = $this->input->post('name');
            $pdata['t_description'] = $this->input->post('description');
            $pdata['t_desig'] = $this->input->post('desig');
          
            if($_FILES)
            {
            $config['upload_path']          = './uploads/testimonial/';
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
           
               $pdata['t_photo']= $photo['upload_data']['file_name'];
                   }

            }
            
            $this->db->insert('testimonial', $pdata);
            $this->session->set_flashdata('message_name', 'testimonial successfully added.');
        }
            $this->load->view('admin/layout', $data);
            
            
}
   public function update_testimonial()
   {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
       $data['page_name'] = "testimonial/update_testimonial";
       $data['page_title'] = "Update testimonial";
       $id= $this->uri->segment(3);   
       $data['tee_id'] = $this->db->get_where('testimonial' , array('t_id'=>$id))->result_array();
       
       if($_POST)
       {
        $pdata['t_name'] = $this->input->post('name');
        $pdata['t_description'] =$this->input->post('description');  
        $pdata['t_desig'] = $this->input->post('desig');
       
        if($_FILES['photo']){
            $config['upload_path']          = './uploads/testimonial/';
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
           
               $pdata['t_photo']= $photo['upload_data']['file_name'];
                   }
    
        }
       
       $this->db->where('t_id', $id);    
       $this->db->update('testimonial', $pdata);
       $this->session->set_flashdata('message_name', 'testimonial successfully Updated.');
       redirect(base_url()."admin/update_testimonial/" .$id);
    }
    $this->load->view('admin/layout', $data);
    
   }

   public function delete_testimonial()
   {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
    $id = $this->uri->segment(3);
       if($id)
       {
           $this->db->where('t_id', $id);
           $this->db->delete('testimonial');
           $this->session->set_flashdata('message_name', 'testimonial successfully Deleted.');
           redirect(base_url()."admin/testimonial");
       }

   }


   public function gallery()
    {
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        
        $data['page_name'] = "gallery/gallery";
        $data['page_title'] = "All Images";
        $data['gallery'] = $this->db->get('gallery')->result_array();
        $this->load->view('admin/layout', $data);
    }

    public function add_gallery()
    {
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        
       $data['page_name'] = "gallery/add_gallery";
       $data['page_title'] = "Add New";
       
       
        if($_POST)
        {
            $pdata['g_name'] = $this->input->post('name');
          
            $pdata['g_category'] = $this->input->post('category');
           
            if($_FILES)
            {
            $config['upload_path']          = './uploads/gallery/';
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
           
               $pdata['photo']= $photo['upload_data']['file_name'];
                   }

            }
            $this->db->insert('gallery', $pdata);
            $this->session->set_flashdata('message_name', 'image successfully added.');
            redirect(base_url()."admin/gallery" .$id);
        }
            $this->load->view('admin/layout', $data);
            
            
}
   public function update_gallery()
   {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
       $data['page_name'] = "gallery/update_gallery";
       $data['page_title'] = "Update Gallery";
       $id= $this->uri->segment(3);   
       $data['gallery_id'] = $this->db->get_where('gallery' , array('g_id'=>$id))->result_array();
       
       if($_POST)
       {
        $pdata['g_name'] = $this->input->post('name');
        $pdata['g_category'] = $this->input->post('category');
        if($_FILES['photo']){
            $config['upload_path']          = './uploads/gallery/';
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
           
               $pdata['photo']= $photo['upload_data']['file_name'];
                   }
    
        }
       
      
        
       $this->db->where('g_id', $id);    
       $this->db->update('gallery', $pdata);
       $this->session->set_flashdata('message_name', 'image successfully Updated.');
       redirect(base_url()."admin/gallery/" .$id);
    }
    $this->load->view('admin/layout', $data);
    
   }

   public function delete_gallery()
   {
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
    $id = $this->uri->segment(3);
       if($id)
       {
           $this->db->where('g_id', $id);
           $this->db->delete('gallery');
           $this->session->set_flashdata('message_name', 'image successfully Deleted.');
           redirect(base_url()."admin/gallery");
       }

   }
  
public function notifications()
{
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
    $data['page_name'] = "notification/notification";
    $data['page_title'] = "All Notifications";
    $data['notification'] = $this->db->get('notifications')->result_array();
    $this->load->view('admin/layout', $data);
}
public function registered_event()
{
    $login = $this->session->userdata('admin_loggin');
    if( !$login ){
        redirect(base_url().'admin/');
    }
    
    $data['page_name'] = "notification/event_registered";
    $data['page_title'] = "All Registered";
    $data['notification'] = $this->db->get('notifications')->result_array();
    $this->load->view('admin/layout', $data);
}
public function registered_detail()
{
    
        $login = $this->session->userdata('admin_loggin');
        if( !$login ){
            redirect(base_url().'admin/');
        }
        $id = $this->uri->segment(3);
        $data['page_name'] = "notification/registered_detail";
        $data['page_title'] = "Detail";
        $data['register_detail'] = $this->db->get_where('event_register' ,array('register_id'=>$id))->result_array();
        $this->load->view('admin/layout', $data);  
}

}