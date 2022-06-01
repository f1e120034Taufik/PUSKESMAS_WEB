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
		        	<a id="obat" class="nav-link active" href="Obat.php">Obat</a>
		      	</li>
		      	
		      	<!-- LINK RUANGAN -->

		      	<li class="nav-item">
		        	<a id="ruangan" class="nav-link" href="Ruangan.php">Ruangan</a>
		      	</li>
		    </ul>
		</div>
	</nav>
<p></p>
<div class="row bg-light text-dark" style="margin-right: 30px; margin-left: 30px; border: solid 1px lightgreen;">
  	<div class="col" style="border-right: solid 1px lightgreen;">
  		<form action="/action_page.php">

  	<!--INPUT ID OBAT-->

  	<div class="mb-3 mt-3">
    	<label for="id_obat" class="form-label">Id_Obat:</label>
    	<input type="id_obat" class="form-control" id="id_obat" placeholder="id_Obat" name="id_obat">
  	</div>

  	<!--INPUT NAMA OBAT-->

  	<div class="mb-3">
    	<label for="nama_obat" class="form-label">Nama_ Obat</label>
    	<input type="nama_obat" class="form-control" id="nama_obat" placeholder="Nama_Obat" name="nama_obat">
  	</div>
  	
  	<!--INPUT JENIS OBAT-->

  	<div class="mb-3">
    	<label for="jenis_obat" class="form-label">Jenis_Obat</label>
    	<input type="jenis_obat" class="form-control" id="jenis_obat" placeholder="Jenis_Obat" name="jenis_obat">
  	</div>
  	
  	<!--INPUT KANDUNGAN OBAT-->

  	<div class="mb-3">
    	<label for="kandungan_obat" class="form-label">Kandungan_Obat</label>
    	<input type="kandungan_obat" class="form-control" id="kandungan_obat" placeholder="Kandungan_Obat" name="kandungan_obat">
  	</div>

  	<!--INPUT KUANTITAS OBAT-->

  	<div class="mb-3">
    	<label for="kuantitas" class="form-label">Kuantitas</label>
    	<input type="kuantitas" class="form-control" id="kuantitas" placeholder="Kuantitas" name="kuantitas">
  	</div>

</form>
</div>
 <div class="col">
  	<h1 class="text-center">DATA OBAT</h1>
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