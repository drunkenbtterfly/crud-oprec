<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/create.php" 
		      method="post">
            
		   <h1 class="display-4 text-center">Tambah Data</h1><hr><br>
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
		           value="<?php if(isset($_GET['email']))
		                           echo($_GET['email']); ?>"
		           placeholder="Masukkan email...">
		   </div>

			 <div class="form-group">
		     <label for="nama_lengkap">Nama</label>
		     <input type="nama_lengkap" 
		           class="form-control" 
		           id="nama_lengkap" 
		           name="nama_lengkap" 
		           value="<?php if(isset($_GET['nama_lengkap']))
		                           echo($_GET['nama_lengkap']); ?>"
							 placeholder="Masukkan nama...">
		   </div>

			 <div class="form-group">
		     <label for="ttl">TTL</label>
		     <input type="ttl" 
		           class="form-control" 
		           id="ttl" 
		           name="ttl" 
		           value="<?php if(isset($_GET['ttl']))
		                           echo($_GET['ttl']); ?>"
							 placeholder="Isi Tempat & tanggal lahir...">
		   </div>

			 <div class="form-group">
		     <label for="domisili">Domisili</label>
		     <input type="domisili"
		           class="form-control"
							  
		           id="domisili" 
		           name="domisili" 
		           value="<?php if(isset($_GET['domisili']))
		                           echo($_GET['domisili']); ?>"
							 placeholder="Masukkan domisili 1 tahun kedepan...">
		   </div>

			 <div class="form-group">
		     <label for="departemen">Departemen</label>
		     <input type="departemen" 
		           class="form-control" 
		           id="departemen" 
		           name="departemen" 
		           value="<?php if(isset($_GET['departemen']))
		                           echo($_GET['departemen']); ?>"
							 placeholder="Masukkan departemen yang anda lamar...">
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Create</button>
	    </form>
	</div>
</body>
</html>