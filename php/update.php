<?php 

if (isset($_GET['update'])) {
	include "koneksi.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$update = validate($_GET['update']);

	$sql = "SELECT * FROM reqruitment WHERE 1";
  $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
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


       $sql = "UPDATE reqruitment SET nama_lengkap='$nama_lengkap', ttl='$ttl', domisili='$domisili', departemen='$departemen' WHERE email='$email'";
       $result = mysqli_query($koneksi,$sql);
       if ($result) {
       	  header("Location: ../index.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$update&error=unknown error occurred&$user_data");
       }
	
}else {
	header("Location: index.php");
}