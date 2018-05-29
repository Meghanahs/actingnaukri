<?php
class Forgotpassword_model extends CI_Model{
      public function _construct(){
        parent::_construct();
        $this->load->database();
    }
     public function resetpassword($email){
    $this->db->select('mail');
    $this->db->from('audition_job_user');
    $this->db->where('mail', $email);
    $query=$this->db->get();
    return $query->row_array();
         
     }
     
    public function mail($mail){
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: Movie Audition <info@siddhrans.com>' . "\r\n";
        $query1 =$this->db->query("SELECT * FROM audition_job_user where mail='$mail'");
        $row=$query1->result_array();
        if ($query1->num_rows()>0)
        {

            $mail_message='Dear '.$row[0]['username'].','. "\r\n";
            $mail_message.='Thanks for contacting regarding forgot password,<br>'.' Click '.'
            <a href='.'http://movies.siddhrans.com/index.php/Forgotpassword/changePassword?mail=$mail>Here</a> to reset your password<br>';
           
            $mail_message.='<br>Thanks & Regards';
            $mail_message.='<br>Movie Audition';
            mail($mail,"Password Reset Request ".$mail,$mail_message,$headers);
          
            $this->load->view('changePasswordMsg');
        }
    }
    
    public function updatePassword($email, $password){
        echo "<script>console.log('Email '.$email)</script>";
         echo "<script>console.log('Password '.$password)</script>";
        $passwordEncrypted = md5($password);
        echo "<script>console.log('Password after Encryption '.$passwordEncrypted)</script>";
         $q = "UPDATE audition_job_user SET password='$passwordEncrypted' where mail='$email'";
          $this->db->query($q);
    }
    
    
    
}


?>