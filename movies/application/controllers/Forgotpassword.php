<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Forgotpassword extends CI_Controller {
      public function __construct(){
        parent::__construct();
        
     $this->load->model('forgotpassword_model');  
    }
   
    public function index()  
    {  
        $this->load->view('reset-password');  
    }
    
    public function changePassword()  
    {  
        $this->load->view('changePassword');  
    }
   
   public function password()
   {
          $email = $this->input->post('email');
    $findemail = $this->forgotpassword_model->resetpassword($email);
    if ($findemail) {
        $this->forgotpassword_model->mail($findemail['mail']);
    } else {
        echo "<script>alert(' $email not found, please enter correct email id')</script>";
       header("Refresh: 1; url=http://movies.siddhrans.com/");
    }
   }
   
   public function changePasswordAction() {
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $this->load->model('forgotpassword_model');
        $this->forgotpassword_model->updatePassword($email, $password);
         header("Refresh: 1; url=http://movies.siddhrans.com/");
       
   }
   
}
?>