<?php
class Userprofilemodel extends CI_Model
{
   public function _construct(){
        parent::_construct();
        $this->load->database();
    } 
    
/* public function jobSeekerProfileImgSave($name){
      echo "<script>console.log('inside img model 1');
                   </script>";
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
}*/

//fetch all pictures from db
	function get_all_pics(){
		$all_pics = $this->db->get('jobseekerImages');
		return $all_pics->result();
	}
 
	//save picture data to db
	function store_pic_data($data){
		$insert_data['img'] = $data['pic_file'];
		$query = $this->db->insert('jobseekerImages', $insert_data);
	}
	
	function editData($id,$data){
	    $this->db->where('id', $id);
        $this->db->update('batch', $data);
	}
	
	  function getDetailsById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('audition_job_user');
        return $query->row();
    }
    
}
?>