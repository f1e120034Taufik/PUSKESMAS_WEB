<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<title></title>
</head>
<body>

	<!--NAV BAR-->
	
	<nav class="navbar navbar-expand-sm bg-success navbar-light">
		<div class="container-fluid">
		    <ul class="navbar-nav nav-tabs">

		    	<!-- LINK DOKTER -->

		      	<li class="nav-item" >
		        	<a class="nav-link" href="Dokter.php">Dokter</a>
		      	</li>

		      	<!-- LINK PASIEN -->

		     	<li class="nav-item">
		        	<a id="pasien" class="nav-link" href="Pasien.php" >Pasien</a>
		      	</li>
		      	
		      	<!-- LINK OBAT -->

		      	<li class="nav-item">
		        	<a id="obat" class="nav-link" href="Obat.php">Obat</a>
		      	</li>
		      	
		      	<!-- LINK RUANGAN -->

		      	<li class="nav-item">
		        	<a id="ruangan" class="nav-link active" href="Ruangan.php">Ruangan</a>
		      	</li>
		    </ul>
		</div>
	</nav>
<p></p>
<div class="row bg-light text-dark" style="margin-right: 30px; margin-left: 30px; border: solid 1px lightgreen;">
  	<div class="col" style="border-right: solid 1px lightgreen;">
  		<form action="/action_page.php">

  	<!--INPUT ID RUANGAN-->

  	<div class="mb-3 mt-3">
    	<label for="id_ruangan" class="form-label">Id_Ruangan</label>
    	<input type="id_ruangan" class="form-control" id="id_ruangan" placeholder="id_ruangan" name="id_ruangan">
  	</div>

  	<!--INPUT NAMA DOKTER-->

  	<div class="mb-3">
    	<label for="id_dokter" class="form-label">Id_Dokter</label>
    	<input type="id_dokter" class="form-control" id="id_dokter" placeholder="Id_Dokter" name="id_dokter">
  	</div>
  	
  	<!--INPUT NAMA PASIEN-->

  	<div class="mb-3">
    	<label for="id_pasien" class="form-label">Id_Pasien</label>
    	<input type="id_pasien" class="form-control" id="id_pasien" placeholder="Id_Pasien" name="id_pasien">
  	</div>
  	
</form>
</div>
 <div class="col">
  	<h1 class="text-center">DATA RUANGAN</h1>
	<hr>
	<form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
    </form>
    <div  class="bg-secondary my-custom-scrollbar my-custom-scrollbar-primary" style="margin: 20px; height: 450px; overflow: auto;" >

    	<!--DATA GRID VIEW-->
    		<!--MASIH KOSONG SILAHKAN DIISI KODINGANNYA WKWKWKWK-->

    </div>

    <!-- TOMBOL SIMPAN, UBAH DAN HAPUS -->

    	<div class="d-flex align-item-end justify-content-around" style="margin-bottom: 20px;">
    		<div class=" btn btn-primary border">Simpan</div>
    		<div class=" btn btn-warning border">Ubah</div>
    		<div class=" btn btn-danger border">Hapus</div>
  		</div>
</div>

</div>

<nav class="navbar navbar-expand-sm bg-success navbar-success fixed-bottom">
<p></p>
</nav>
</body>
</html>