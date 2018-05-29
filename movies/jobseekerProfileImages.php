<?php
/*include("../connections/connect.php");*/

if(isset($_FILES)) {
    $tmpPath = $_FILES['userImage']['tmp_name'];

    if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
        echo "<script>
                   alert('Here2');
                   </script>";
        $sourcePath = $_FILES['userImage']['tmp_name'];
        echo "<script>
                   alert($sourcePath);
                   </script>";
        $targetPath = "/home/sid11990/public_html/movies/assets/img/jobseekerProfileImg/".$_FILES['userImage']['name'];
        if(move_uploaded_file($sourcePath,$targetPath)) {
            echo "<script>
                   alert('Here3');
                   </script>";
            $id=$_POST['profileid'];
            $ci=& get_instance();
            $this->load->library('saveimage');
            $controller = new SaveImage();
            $controller->saveLocation($targetPath, $id);
        } else {
            echo "<P>MOVE UPLOADED FILE FAILED!</P>";
      print_r(error_get_last());
        }
    }
}

class SaveImage_model extends CI_Model{
      public function _construct(){
        parent::_construct();
        
        $this->load->database();
    }
    
    public function saveLocationAction($location, $uid) {
        echo "<script>
                   alert('Inside save action');
                   </script>";
       $query = "update audition_job_user set img_location='".$location."' WHERE uid = '".$uid."';";
            $this->db->query($query)or die("Query failed: " . mysql_error());
       
   }
    
}

class SaveImage extends CI_Controller {
      public function __construct(){
        parent::__construct();
        
     $this->load->model('saveimage_model');  
    }
    
     public function saveLocation($location, $uid) {
       $this->saveimage_model->saveLocationAction($location, $uid);
       
   }
}
?>
<!--
<img class="image-preview" src="<?php echo $targetPath; ?>" class="upload-preview" />
-->
