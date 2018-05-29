<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class User extends CI_Controller {
   
   public function construct(){
        parent::construct();
     $this->load->model('user_model');  
       
    }
      
    public function index()  
    {  if(isset($_SESSION['login']))
        {  
             $this->load->view('log');
             $this->load->view('home_recruiter');
        }
        else{
           $this->load->view('home'); 
        }
    }
    

public function login()
    {
        echo "<script>console.log('inside login controller');</script>";
        if(isset($_SESSION['login']))
        {   $email = $this->input->post('email');
            $userType="jobseeker";
            $this->load->view('log');
            echo "<script>console.log('inside log');</script>";
        }
        else
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $password =md5($password);
             /*echo "<script>
                   alert($password);
                   </script>";*/
           $this->load->model('User_model');
         $queryResult = $this->User_model->loggingUser($email,$password);
           
          if($queryResult->num_rows() > 0)
            {
                $row = $queryResult->row();
                echo "<script>console.log('Inside login. Rows Fetched.'+$row->mail +' image Location => '+$row->img_location);</script>";
                if($row->active=='active'){
                    $_SESSION['login']='true';
                    $_SESSION['uid']=intval( $row->uid);
                    $_SESSION['username']= $row->username;
                    $_SESSION['img_location']= $row->img_location;
                    $_SESSION['userDetails']= $row;
                    $this->load->view('log');
                } else {
                     $this->load->model('user_model');
                     $this->user_model->mail($row->username,$row->mail,$row->reg_id);
                      echo "<script>
                   alert('Account is inactive. Please check mail for activation link.Try again after Activation');
                   </script>";
                    header("Refresh: 0; url=http://movies.siddhrans.com/");
                }
             
            } else {
             
              echo "<script>
                   alert('Invalid login Credentials');
                   </script>";
               header("Refresh: 0; url=http://movies.siddhrans.com/");
            }
        }
    }

    
    
       public function userRegistration()
    {
  
        $this->load->model('user_model');
        $rows = $this->user_model->userCount("audition_job_user");
        $reg_id = "PORTAL/USE/";
        $count =$rows++;
        $reg = $reg_id.$count;
        $user=array(
                     'reg_id' => $reg ,
                    'username' =>   $this->input->post('name'),
                    'mail' =>   $this->input->post('email'),
                    'contact_no'=>  $this->input->post('number'),
                    'gender' =>   $this->input->post('gender'),
                    'password' =>   md5($this->input->post('password'))
                    
                    /*'created_date' => date['y-m-d H-i-s']*/
                    );
            $this->user_model->createUser($user);
              $this->user_model->mail($this->input->post('name'),$this->input->post('email'),$reg);
        }
        
     public function recruiterRegistration(){
         
         $this->load->model('user_model');
        $rows = $this->user_model->userCount("audition_recruiter_user");
        $reg_id = "PORTAL/REC/";
        $count =$rows++;
        $reg = $reg_id.$count;
        $user=array(
                     'reg_id' => $reg ,
                    'username' =>   $this->input->post('name'),
                    'mail' =>   $this->input->post('email'),
                    'contact_no'=>  $this->input->post('number'),
                    'gender' =>   $this->input->post('gender'),
                    'password' =>   md5($this->input->post('password'))
                    
                    /*'created_date' => date['y-m-d H-i-s']*/
                    );
            $this->user_model->createRecruiter($user);
            $this->load->view('message'); 
     }   
     
     public function recruiterlogin()
    {
       echo "<script>console.log('inside recruiter login controller');</script>";
        if(isset($_SESSION['login']))
        {
             $email = $this->input->post('email');
            
             $userType="recruiter";
               echo "<script>console.log('inside login session');</script>";
              /* echo "<script>alert($password);</script>";*/
               echo "<script>alert($email);</script>";
             $this->load->view('log');
           
        }
        else
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $password =md5($password);
             echo "<script>
                   alert($password);
                   </script>";
                    echo "<script>
                   alert($email);
                   </script>";
           $this->load->model('user_model');
           $rows=$this->user_model->recruiterlogin($email,$password);
           
            if($rows->num_rows() > 0)
            {
                $row = $rows->row();
                echo "<script>console.log('inside login check function');</script>";
                $_SESSION['login']='true';
                $_SESSION['uid']=intval( $row->uid);
                $_SESSION['username']= $row->username;
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $this->load->view('home_recruiter');
            }
            else
            {
             
              echo "<script>
                   alert('Provided Details may be incorrect or Account is inactive');
                   </script>";
               header("Refresh: 0; url=http://movies.siddhrans.com/");
            }
        }
    }
     
    
   public function log()
    {
        if(isset($_SESSION['login']))
        {
            $this->load->view('log');
        }
        else
        {
            header("Location: " .base_url()."log.php");
        }
        
    }
    
       public function home_recruiter()
    {
        if(isset($_SESSION['login']))
        {
            $this->load->view('home_recruiter');
        }
        else
        {
            header("Location: " .base_url()."home_recruiter.php");
        }
        
    }

public function verify(){
    
     $this->load->model('user_model');  
  $this->user_model->verify($_GET['mail'],$_GET['reg']);
   
}
   public function logout()  
    {  
        //removing session
        session_destroy();
        $_SESSION['login']='false';
       /* $this->load->view('home');*/
        header("Refresh: 0; url=http://movies.siddhrans.com/");
    }

}
?>  