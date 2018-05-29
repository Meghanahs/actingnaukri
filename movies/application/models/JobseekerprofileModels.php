<?php
class JobseekerprofileModels extends CI_Model
{
 public function _construct(){
        parent::_construct();
        $this->load->database();
    }
  public function jobSeekerProfileImgSave($name){
  echo "<script>console.log('inside img model 1');</script>";
 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){
      echo "<script>
                   console.log('inside img model 2');
                   </script>";
 
  // Insert record
  $query = "insert into jobseekerImages values('".$name."')";
  mysqli_query($con,$query);
  
  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
}
}
  public function fetchAlljobseekerDetails(){
        
        $this->db->select("*");
        
        $query =$this->db->query("SELECT * FROM audition_job_user");
          /*$this->db->from('audition_job_user');*/
      /*  $query = $this->db->where(uid, intval($_SESSION['uid']));*/
        return $result = $query->result();
    }
    

    
   public function  updateJobseekerDetails($user) {
       	$id 			=	$user['id'];              
		$username 	    =	$user['username'];              
		$middlename 	=	$user['middlename'];              
		$lastname 	    =	$user['lastname'];              
		$mail		    =	$user['mail'];              
		$contact_no 	=	$user['contact_no'];            
		$address		=	$user['address'];            
		$zip 		    =	$user['zip'];              
		$city 		    =	$user['city'];              
		$state 		    =	$user['state'];              
		$country 	    =	$user['country'];            
		$eduction       =	$user['qualification'];              
		$certification  =	$user['certification'];              
		$instituet 	    =	$user['instituet'];
        
       
       
       $result  =$this->db->query("update audition_job_user 
                                                set
                                                    username        = '$username',
                                                    middlename      = '$middlename',
                                                    lastname        = '$lastname',
                                                    mail            = '$mail',
                                                    contact_no      = '$contact_no',
                                                    address         = '$address',
                                                    zip             = '$zip',
                                                    city            = '$city',
                                                    state           = '$state',
                                                    country         = '$country',
                                                    education       = '$eduction',
                                                    certification   = '$certification',
                                                    instituet       = '$instituet'
                                                where uid = '$id' ;
                                          ");
        $queryResult = $this->db->query("SELECT * FROM audition_job_user where uid='$id';");
        
        return $queryResult;

       
   }

    
}
?>