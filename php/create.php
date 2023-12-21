<?php 

if (isset($_GET['id'])) {
	include "koneksi.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM `reqruitment` WHERE 1";
  $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['create'])){
    include "../koneksi.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$email = validate($_POST['email']);
  $nama_lengkap = validate($_POST['nama_lengkap']);
  $ttl = validate($_POST['ttl']);
  $domisili = validate($_POST['domisili']);
  $departemen = validate($_POST['departemen']);


       $sql = "INSERT INTO `reqruitment` (email, nama_lengkap, ttl, domisili, departemen) VALUES ('$email', '$nama_lengkap', '$ttl', '$domisili', '$departemen')";
       $result = mysqli_query($koneksi,$sql);
       if ($result) {
       	  header("Location: ../index.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	
}else {
	header("Location: index.php");
}

?>