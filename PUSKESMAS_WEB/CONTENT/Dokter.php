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
		        	<a class="nav-link active">Dokter</a>
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
		        	<a id="ruangan" class="nav-link" href="Ruangan.php">Ruangan</a>
		      	</li>
		    </ul>
		</div>
	</nav>
<p></p>
<div class="row bg-light text-dark" style="margin-right: 30px; margin-left: 30px; border: solid 1px lightgreen;">
  	<div class="col" style="border-right: solid 1px lightgreen;">
  		<form action="/action_page.php">

  	<!--INPUT ID DOKTER-->

  	<div class="mb-3 mt-3">
    	<label for="id_dokter" class="form-label">Id_Dokter:</label>
    	<input type="id_dokter" class="form-control" id="id_dokter" placeholder="id_dokter" name="id_dokter">
  	</div>

  	<!--INPUT NAMA DOKTER-->

  	<div class="mb-3">
    	<label for="nama_dokter" class="form-label">Nama_ Dokter</label>
    	<input type="nama_dokter" class="form-control" id="nama_dokter" placeholder="Nama_Dokter" name="nama_dokter">
  	</div>
  	
  	<!--INPUT ALAMAT DOKTER-->

  	<div class="mb-3">
    	<label for="alamat_dokter" class="form-label">Alamat_ Dokter</label>
    	<input type="alamat_dokter" class="form-control" id="alamat_dokter" placeholder="Alamat_Dokter" name="alamat_dokter">
  	</div>
  	
  	<!--INPUT HP DOKTER-->

  	<div class="mb-3">
    	<label for="hp_dokter" class="form-label">Hp_ Dokter</label>
    	<input type="hp_dokter" class="form-control" id="hp_dokter" placeholder="Hp_Dokter" name="hp_dokter">
  	</div>

  	<!--INPUT TANGGAL LAHIR DOKTER-->

  	<div class="mb-3">
    	<label for="tgl_dokter" class="form-label">Tanggal_Lahir_Dokter</label>
    	<input type="date" class="form-control" id="tgl_dokter" placeholder="Tanggal_Lahir_Dokter" name="tgl_dokter">
  	</div>

  	<!--CHECK JENIS KELAMIN DOKTER-->

  	<div class="row" >
  	<label for="kelamin_dokter" class="form-label">Jenis_Kelamin_Dokter</label>
	  	<div class="col">
		  	<div class="form-check">
		  		<input class="form-check-input" type="radio" name="laki" id="laki">
		  		<label class="form-check-label" for="laki">
		    		Laki-laki
		  		</label>
			</div>
		</div>
		<div class="col">
			<div class="form-check">
		  		<input class="form-check-input" type="radio" name="perempuan" id="perempuan" checked>
		  		<label class="form-check-label" for="perempuan">
		    		Perempuan
		  		</label>
			</div>
		</div>
	</div>

	<!--INPUT SPESIALIS DOKTER-->

  	<div class="mb-3">
    	<label for="spesialis_dokter" class="form-label">Spesialis</label>
    	<input type="spesialis_dokter" class="form-control" id="spesialis_dokter" placeholder="Spesialis" name="spesialis_dokter">
  	</div>

  	<!--INPUT JEM KERJA DOKTER-->

  	<div class="mb-3">
    	<label for="jam_dokter" class="form-label">Jam_Kerja_Dokter</label>
    	<select class="form-select" aria-label="Default select example">
  		<option selected>Pilih_Jam_Kerja</option>
  		<option value="1">One</option>
  		<option value="2">Two</option>
  		<option value="3">Three</option>
</select>
  	</div>


</form>
</div>
 <div class="col">
  	<h1 class="text-center">DATA DOKTER</h1>
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