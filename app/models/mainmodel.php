<?php
class mainmodel{
  private $db;

   public function __construct(){
       $this->db = new Database;
   }
   public function define(){
     if (isset($_POST['dfsubmit'])) {
$defid = "1234532223d453267d788654d333267888g999s998337d6545g7f483927494s7394g7494742v92674927d36484k647383s836452njfvdhchvjvjjvdbjbdhnnklhchidchd";
$fileNameNew1 = "";
       $file = $_FILES['defimage'];
   $picturepostupload= $_FILES['defimage']['name'];
   $file_tmp = $_FILES['defimage']['tmp_name'];
$fileSize= $_FILES['defimage']['size'];
$fileError= $_FILES['defimage']['error'];
$fileType= $_FILES['defimage']['type'];
$fileExt = explode('.', $picturepostupload);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg', 'jpeg', 'png','JPG');

if (in_array($fileActualExt, $allowed)) {
if ($fileError === 0) {
 if ($fileSize < 250000000) {
   $fileNameNew1 = uniqid('', true).".".$fileActualExt;
    $fileDestination = 'dfupload/'.$fileNameNew1;
   move_uploaded_file($file_tmp, $fileDestination);
 }else{
   // echo "your file is too big";
   $_SESSION['bigfileerr'] =  "The image File is to Big";

  header('Location: ' . BASEURL . '/define');
 }
}else{
 echo "there was an error uploading your file";
 $_SESSION['errupload'] =  "There was an error uploading your file";

header('Location: ' . BASEURL . '/define');
}
}

      $defrandids = substr(str_shuffle($defid), 0 , 10);
     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
       $data = [
        'fullname' => trim($_POST['fullname']),
        // 'dffcategory' => trim($_POST['dffcategory']),
        'defimage' => $fileNameNew1,
        'freason' => trim($_POST['freason']),
        'sreason' => trim($_POST['sreason']),
        'treason' => trim($_POST['treason']),
        'fhreason' => trim($_POST['fhreason']),
        'ffhreason' => trim($_POST['ffhreason']),
        'defid' => $defrandids

       ];
        $_SESSION['fullnamefixed'] =  $data['fullname'];

        header('Location: ' . BASEURL . '/define');

        $_SESSION['freasonfixed'] =  $data['freason'];

        header('Location: ' . BASEURL . '/define');

        $_SESSION['sreasonfixed'] =  $data['sreason'];

        header('Location: ' . BASEURL . '/define');

        $_SESSION['treasonfixed'] =  $data['treason'];

        header('Location: ' . BASEURL . '/define');

        $_SESSION['fhreasonfixed'] =  $data['fhreason'];

        header('Location: ' . BASEURL . '/define');

        $_SESSION['ffhreasonfixed'] =  $data['ffhreason'];

        header('Location: ' . BASEURL . '/define');

       if (empty($data['fullname'])) {
         $_SESSION['fullnameerr'] =  "Enter Your full name";

        header('Location: ' . BASEURL . '/define');
       }elseif (empty($data['defimage'])) {
         $_SESSION['selimgerr'] =  "Please select an image";

        header('Location: ' . BASEURL . '/define');
       }elseif (empty($data['freason'])) {
         $_SESSION['firsterr'] =  "Please write your first reason";

        header('Location: ' . BASEURL . '/define');
       }elseif (empty($data['sreason'])) {
         $_SESSION['seconderr'] =  "Please write your second reason";

        header('Location: ' . BASEURL . '/define');
       }elseif (empty($data['treason'])) {
         $_SESSION['thirderr'] =  "Please write your third reason";

        header('Location: ' . BASEURL . '/define');
       }elseif (empty($data['fhreason'])) {
         $_SESSION['fourtherr'] =  "Please write your fourth reason";

        header('Location: ' . BASEURL . '/define');
       }elseif (empty($data['ffhreason'])) {
         $_SESSION['fiftherr'] =  "Please write your fifth reason";

        header('Location: ' . BASEURL . '/define');
       }else {
         $this->db->query('INSERT INTO defuser (username, defimage, firstreason, secondreason, thirdreason, fourthreason, fifthreason, defid)
          VALUES (:username, :defimage, :firstreason, :secondreason, :thirdreason, :fourthreason, :fifthreason, :defid)');
          //Bind values
          $this->db->bind(':username', $data['fullname']);
          // $this->db->bind(':defcategory', $data['dffcategory']);
          $this->db->bind(':defimage', $data['defimage']);
          $this->db->bind(':firstreason', $data['freason']);
          $this->db->bind(':secondreason', $data['sreason']);
          $this->db->bind(':thirdreason', $data['treason']);
          $this->db->bind(':fourthreason', $data['fhreason']);
          $this->db->bind(':fifthreason', $data['ffhreason']);
          $this->db->bind(':defid', $data['defid']);
          //Execute
          if($this->db->execute()){
             unset($_SESSION['fullnamefixed']) ;
             header('Location: ' . BASEURL .'');
             unset($_SESSION['freasonfixed']) ;
             header('Location: ' . BASEURL .'');
             unset($_SESSION['sreasonfixed']) ;
             header('Location: ' . BASEURL .'');
             unset($_SESSION['treasonfixed']) ;
             header('Location: ' . BASEURL .'');
             unset($_SESSION['fhreasonfixed']) ;
             header('Location: ' . BASEURL .'');
             unset($_SESSION['ffhreasonfixed']) ;
             header('Location: ' . BASEURL .'');
                $_SESSION['success'] =  "Define successfully Uploaded";
             header('Location: ' . BASEURL .'');
         }else{
             // return false;
         }
       }
   }
   }

   public function getalldefine(){
     $this->db->query('SELECT * FROM defuser');
 $get = $this->db->resultSet();
 if($get) {
     return $get;
 }
   }
   public function deletedefine(){
     if (isset($_POST['delete_btn'])) {
       $data = [
        'delete' => trim($_POST['delete_id']),
        'imgname' => trim($_POST['imgname'])
       ];
       $query =  $this->db->query('DELETE FROM defuser WHERE defid=:delid');
       $post = $this->db->bind(':delid', $data['delete']);
       if($this->db->execute()){
         unlink('dfupload/'.$data['imgname']);
         $_SESSION['delsuccess'] =  "Deleted successfully";
       header('Location: ' . BASEURL . '/defadminpanel');

      }else{
          // return false;
      }
     }
   }
   public function logadmin(){
     if (isset($_POST['login_btn'])) {
       $data = [
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password'])
       ];
       if (empty($data['email'])) {
         $_SESSION['emailempty'] =  "Email field is empty";
       header('Location: ' . BASEURL . '/login');
       }else if (empty($data['password'])) {
         $_SESSION['passwordempty'] =  "Password field is empty";
       header('Location: ' . BASEURL . '/login');
       }else {
        $this->db->query('SELECT username,email,password FROM defadmin WHERE email=:email');
		    $this->db->bind(':email', $data['email']);
        $this->db->execute();
       if ($this->db->execute()) {
         if ($this->db->rowCount() === 1) {
   if ($row = $this->db->single()) {
     $pass = $row->password;
      $emailpass = $row->email;
      $userpass = $row->username;
      if (password_verify($data['password'],$pass)) {
        $_SESSION['defadminuser'] = $emailpass;
          header('Location: ' . BASEURL . '/defadminpanel');
                 exit;
      }else{
        	// echo 400;
        	echo "password is invalid";
        }
   }else{}
 }else{
    	// echo 500;
    	echo "invalid details";
    }
       }
       }
     }
   }
   public function logout(){
     if (isset($_SESSION['defadminuser'])) {


session_start();

session_unset();
session_destroy();

header('Location: ' . BASEURL . '/login');

}
   }
}
