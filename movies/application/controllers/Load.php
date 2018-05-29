<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Load extends CI_Controller {
    public function index(){
        $this->load->view('home');
    }
    
    public function job1(){
          $this->load->view('index');
    }
    
    public function job2(){
          $this->load->view('index-2');
    } 
     public function job3(){
          $this->load->view('index-3');
    }
     public function job4(){
          $this->load->view('index-4');
    }
     public function job5(){
          $this->load->view('index-5');
    }
    public function job6(){
          $this->load->view('browse-company');
    }
    public function job7(){
          $this->load->view('browse-jobs-grid');
    }
    public function job8(){
          $this->load->view('browse-jobs');
    }
    public function job9(){
          $this->load->view('candidate-profile');
    }
    public function job10(){
          $this->load->view('create-resume');
    }
      public function job11(){
          $this->load->view('job-detail');
    }
      public function job12(){
          $this->load->view('resume-detail');
    }
      public function job13(){
          $this->load->view('search-job');
    } 
    public function job14(){
          $this->load->view('create-job');
    } 

}

?>