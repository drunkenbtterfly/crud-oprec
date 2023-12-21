<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		@charset "UTF-8";
		@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

.container {
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}

.container form {
	width: 500px;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 71, 0.8), 0 6px 20px 0 rgba(0, 0, 71, 0.19);
}

.link-right {
	display: flex;
	justify-content: flex-end;
}
	</style>
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h1 class="display-4 text-center">Edit Data</h1><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="email">Email</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?=$row['email'] ?>" >
		   </div>

			 <div class="form-group">
		     <label for="nama_lengkap">Nama</label>
		     <input type="nama_lengkap" 
		           class="form-control" 
		           id="nama_lengkap" 
		           name="nama_lengkap" 
		           value="<?=$row['nama_lengkap'] ?>" >
		   </div>

			 <div class="form-group">
		     <label for="ttl">TTL</label>
		     <input type="ttl" 
		           class="form-control" 
		           id="ttl" 
		           name="ttl" 
		           value="<?=$row['ttl'] ?>" >
		   </div>

			 <div class="form-group">
		     <label for="domisili">Domisili</label>
		     <input type="domisili" 
		           class="form-control" 
		           id="domisili" 
		           name="domisili" 
		           value="<?=$row['domisili'] ?>" >
		   </div>

			 <div class="form-group">
		     <label for="departemen">Departemen</label>
		     <input type="departemen" 
		           class="form-control" 
		           id="departemen" 
		           name="departemen" 
		           value="<?=$row['departemen'] ?>" >
		   </div>

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
	    </form>
	</div>
</body>
</html>