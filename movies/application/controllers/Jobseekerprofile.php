<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Jobseekerprofile extends CI_Controller {
    
      public function construct(){
        parent::construct();
     $this->load->model('Userprofilemodel');  
    }
    
    public function index()  
    {  
        $data   = array();
        $this->load->model('JobseekerprofileModels');
        $data['result'] = $this->JobseekerprofileModels->fetchAlljobseekerDetails();
        $this->load->view('candidate-profile',$data); 
       
    }
    

   public function jobseekerimage(){
 
   //set file upload settings 
			$config['upload_path']          = APPPATH. '../assets/uploads/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['max_size']             = 100;
		
			$this->load->library('upload', $config);
 
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('candidate-profile.php', $error);
			}else {
				//file is uploaded successfully
				//now get the file uploaded data 
				$upload_data = $this->upload->data();
 
				//get the uploaded file name
				$data['pic_file'] = $upload_data['file_name'];
               
                 $this->load->model('Userprofilemodel');  
				//store pic data to the db
				$this->Userprofilemodel->store_pic_data($data);
 
			/*	redirect('/');*/
			}
			 /*$data['picture_list'] = $this->Userprofilemodel->get_all_pics();
		     $this->load->view('picture_list', $data);*/
			$this->load->view('candidate-profile');
		
   }
   
   public function AlljobseekerDetails(){
        session_start();
        $_SESSION['uid']= $row->uid;
        $data   = array();
        $this->load->model('JobseekerprofileModels');
        $data['result'] = $this->JobseekerprofileModels->fetchAlljobseekerDetails();
       /* $this->load->view('candidate-profile',$data);*/
    /* print_r($data);*/
   }
   
   public function editDetails() {
       
    $user =	array(     
        'id' 			 =>	$this->input->post('uid'),              
        'username' 	 =>	$this->input->post('name'),              
        'middlename' 	 =>	$this->input->post('middlename'),              
        'lastname' 	 =>	$this->input->post('lastname'),              
        'mail'			 =>	$this->input->post('email'),              
        'contact_no' 	 =>	$this->input->post('number'),              
        'address' 		 =>	$this->input->post('address'),              
        'zip' 			 =>	$this->input->post('zip'),              
        'city' 		 =>	$this->input->post('city'),              
        'state' 		 =>	$this->input->post('state'),              
        'country' 		 =>	$this->input->post('country'),              
        'qualification' =>	$this->input->post('qualification'),              
        'certification' =>	$this->input->post('certification'),              
        'instituet' 	 =>	$this->input->post('instituet')
    );
         /*$this->load->library('form_validation');
         $this->form_validation->set_error_delimiters('<div class="error">', '</div>');*/
          $this->load->model('JobseekerprofileModels');
          
        $queryResult = $this->JobseekerprofileModels->updateJobseekerDetails($user);
        if($queryResult->num_rows() > 0){
            $row = $queryResult->row();
            $data['message'] = "Updated Successfully. ";
            $_SESSION['userDetails'] = $row;
        } else {
            $data['message'] = "Update Failed. Please Contact Administrator. ";
        }
        $this->load->view('candidate-profile',$data);
        
    }
   
	
}
?> 