<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pasien Rawat Jalan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg bg-body-tertiary">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">Dashboard Pasien Rawat Jalan</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="<?php echo base_url() ?>dashboard/">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url() ?>dashboard/listPasien">List Poliklinik</a>
	        </li>
	      </ul>
	  <a href="<?php echo base_url(); ?>login/logout" class="d-flex" role="search">
        <button class="btn btn-outline-success" type="submit">Logout</button>
      </a>

	    </div>
	  </div>
	</nav>

    <div class="container" style="margin-top: 60px;">
	<h3>Dashboard</h3>
    	<table class="table">
    		<thead>
    		<tr>
    			<td>
    				No
    			</td>
    			<td>
    				No RM
    			</td>
    			<td>
    				Nama Pasien
    			</td>
    			<td>
    				Poliklinik
    			</td>
    			<td>
    				Action
    			</td>
    		</tr>
    		</thead>
    		<tbody>
    		<?php for ($i=0; $i <count($dataPasien) ; $i++) { ?>
    		<tr>
    			<td>
    				<?php echo $i+1 ?>
    			</td>
    			<td>
    				<?php echo $dataPasien[$i]['nomorRekamMedis'] ?>
    			</td>
    			<td>
    				<?php echo $dataPasien[$i]['namaPasien'] ?>
    			</td>
    			<td>
    				<?php echo $dataPasien[$i]['namaPoliklinik'] ?>
    			</td>
    			<td>
    				<a href="<?php echo base_url() ?>dashboard/edit/<?php echo $dataPasien[$i]['idPasien'] ?>" class="btn btn-success">Edit</a>
    				<a href="<?php echo base_url() ?>dashboard/hapus/<?php echo $dataPasien[$i]['idPasien'] ?>" class="btn btn-danger">Hapus</a>
    			</td>
    		</tr>
    		<?php } ?>
    		</tbody>
    		
    	</table>
     

     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>