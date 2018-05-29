<?php
class User_model extends CI_Model
{
    protected $table = "audition_user";
    public $email;
    public $password;
    
    public function _construct(){
        parent::_construct();
        $this->load->database();
    }

  
  public function loggingUser($email,$password)
    {
        echo "<script>console.log('inside user login model');</script>";
        $db=$this->load->database();
        $this->email=$email;
        $this->password=$password;
        $queryResult =$this->db->query("SELECT * FROM audition_job_user where mail='$this->email' and password='$this->password';");
        return $queryResult;
    }
    
    
public function recruiterlogin($email,$password)
    {
        echo "<script>console.log('inside recruiterlogin model');</script>";
        $db=$this->load->database();
        $this->email=$email;
        $this->password=$password;
        $query =$this->db->query("SELECT * FROM audition_recruiter_user where mail='$this->email' and password='$this->password' and status='active';");
       /* $rows=$query->num_rows();*/
     
        return $query;
    }
    
/*  public function loggingUser($email,$password){
  $this->db->select("uid,username,mail,contact_no");
  $whereCondition = $array = array('mail' =>$email,'password'=>$password);
  $this->db->where($whereCondition);
  $this->db->from('audition_job_user');
  $query = $this->db->get();
  return $query;
 }*/

    public function createUser($user)
    {
        $db=$this->load->database();
        $this->db->insert("audition_job_user",$user);
        echo "<script>console.log('Success');</script>";
        /*
        echo "<script>alert('working');</script>";
        foreach($user as $x => $x_value) 
        {
            echo "<script>alert('Key= '. $x . ', Value=' . $x_value);</script>";
        }
        */
    }
     public function createRecruiter($user)
    {
        $db=$this->load->database();
        
        $this->db->insert("audition_recruiter_user",$user);
        
        echo "<script>console.log('Success');</script>";
    }
    
    public function userCount($table){
        $query = $this->db->query("SELECT * FROM $table");
        $rows=$query->num_rows();
        return $rows;
    }
    
    public function mail($name,$mail,$reg){
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: Movie Audition <info@siddhrans.com>' . "\r\n";
        $query1 =$this->db->query("SELECT * FROM audition_job_user where mail='$mail'");
        $row=$query1->result_array();
        if ($query1->num_rows()>0)

  /* $content="<html><body><table border='1'><tr><td>Name</td><td>".$name."</td></tr><tr><td>Email</td><td>".$mail
    ."</td></tr><tr><td>Link</td><td><a href='http://movies.siddhrans.com/verify.php?mail=$mail&reg=$reg></td></tr></table></body></html>";
      mail($mail,"New Enquiry ".$mail,$content,$headers);*/
     
      
            $mail_message='Dear '.$row[0]['username'].','."\r\n";
            $mail_message.='Thanks for for registration,<br>'.' Click '.'
            <a href="http://movies.siddhrans.com/index.php/User/verify?mail='.$mail.'&reg='.$reg.'">Here</a>'.' to Activate your account<br>';
            $mail_message.='<br>Thanks & Regards';
            $mail_message.='<br>Movie Audition';
            mail($mail,"Account activation ".$mail,$mail_message,$headers);
            $this->load->view('success');
    }
    
    public function verify($name,$id){
 $q="select * from audition_job_user where mail='$name' and reg_id='$id'";
  $confirm = $this->db->query($q); 
   $rows=$confirm->num_rows();
   if($rows>0){
       $q = "UPDATE audition_job_user SET active='active' where mail='$name' and reg_id='$id'";
       $this->db->query($q);
        $this->load->view('activationMsg');
        /*header("Refresh: 5; url=http://movies.siddhrans.com/");*/
     
   }
   else{
       echo"unauthorized user";
   }
    }
    
}

?>