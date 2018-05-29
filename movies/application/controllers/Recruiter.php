<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Recruiter extends CI_Controller {
    
     public function index(){
        $this->load->view('companyDetails');
    }
    
     public function editRecruiterDetails() {
       
    $recruiter =	array(     
        'id' 			 =>	$this->input->post('uid'),              
        'username' 	     =>	$this->input->post('name'),              
        'mail'			 =>	$this->input->post('email'),              
        'contact_no' 	 =>	$this->input->post('number'), 
        'Comapanyname'   =>	$this->input->post('Comapanyname'),
        'tagline'        =>	$this->input->post('tagline'), 
        'categories'     =>	$this->input->post('categories'), 
        'Ceo'            =>	$this->input->post('Ceo'), 
        'startedyear'    =>	$this->input->post('startedyear'), 
        'description'    =>	$this->input->post('description'), 
        'employeeno'     =>	$this->input->post('employeeno'), 
        'backgroundimg'  =>	$this->input->post('backgroundimg'), 
        'fblink'         =>	$this->input->post('fblink'), 
        'tweeterlink'    =>	$this->input->post('tweeterlink'), 
        'googlelink' 		 =>	$this->input->post('googlelink'), 
        'instagram'        =>	$this->input->post('instagram'), 
        'website'        =>	$this->input->post('website'), 
        'aboutcompany'        =>	$this->input->post('aboutcompany'), 
        'address'        =>	$this->input->post('address'), 
        'city' 		 =>	$this->input->post('city'),              
        'state' 		 =>	$this->input->post('state'),
        'country' 		 =>	$this->input->post('country'),
        'zip' 			 =>	$this->input->post('zip'),          
        /*'qualification' =>	$this->input->post('qualification'),              
        'certification' =>	$this->input->post('certification'),              
        'instituet' 	 =>	$this->input->post('instituet')*/
    );
    
}
}

?>