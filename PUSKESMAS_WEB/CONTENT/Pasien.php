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

		      	<li class="nav-item">
		        	<a class="nav-link" href="Dokter.php">Dokter</a>
		      	</li>

		      	<!-- LINK PASIEN -->

		     	<li class="nav-item">
		        	<a id="pasien" class="nav-link active">Pasien</a>
		      	</li>
		      	
		      	<!-- LINK OBAT -->

		      	<li class="nav-item">
		        	<a id="obat" class="nav-link" href="Obat.php">Obat</a>
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

  	<!--INPUT ID PASIEN-->

  	<div class="mb-3 mt-3">
    	<label for="id_pasien" class="form-label">Id_Pasien:</label>
    	<input type="id_pasien" class="form-control" id="id_pasien" placeholder="id_Pasien" name="id_pasien">
  	</div>

  	<!--INPUT NAMA PASIEN-->

  	<div class="mb-3">
    	<label for="nama_pasien" class="form-pasien">Nama_ Pasien</label>
    	<input type="nama_pasien" class="form-control" id="nama_pasien" placeholder="Nama_Pasien" name="nama_pasien">
  	</div>
  	
  	<!--INPUT ALAMAT PASIEN-->

  	<div class="mb-3">
    	<label for="alamat_pasien" class="form-label">Alamat_ Pasien</label>
    	<input type="alamat_pasien" class="form-control" id="alamat_pasien" placeholder="Alamat_Pasien" name="alamat_pasien">
  	</div>
  	
  	<!--INPUT HP PASIEN-->

  	<div class="mb-3">
    	<label for="hp_pasien" class="form-label">Hp_ Pasien</label>
    	<input type="hp_pasien" class="form-control" id="hp_pasien" placeholder="Hp_Pasien" name="hp_pasien">
  	</div>

  	<!--INPUT TANGGAL LAHIR PASIEN-->

  	<div class="mb-3">
    	<label for="tgl_pasien" class="form-label">Tanggal_Lahir_Pasien</label>
    	<input type="date" class="form-control" id="tgl_pasien" placeholder="Tanggal_Lahir_Pasien" name="tgl_pasien">
  	</div>

  	<!--INPUT RIWAYAT PENYAKIT-->

	<div class="mb-3">
    	<label for="riwayat_penyakit" class="form-label">Riwayat_Penyakit_Diderita</label>
    	<input type="riwayat_penyakit" class="form-control" id="riwayat_penyakit" placeholder="Riwayat_Penyakit" name="riwayat_penyakit">
  	</div>

	<!--INPUT DOKTER/PERAWAT-->

  	<div class="mb-3">
    	<label for="dok/per" class="form-label">Dokter/Perawat</label>
    	<input type="dok/per" class="form-control" id="dok/per" placeholder="Dokter/Perawat" name="dok/per">
  	</div>

  	<!--INPUT OBAT-->

  	<div class="mb-3">
    	<label for="obat" class="form-label">Obat</label>
    	<input type="obat" class="form-control" id="obat" placeholder="Obat" name="obat">
  	</div>


</form>
</div>
 <div class="col">
  	<h1 class="text-center">DATA PASIEN</h1>
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