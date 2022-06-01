<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>Menu Data Puskesmas</title>

</head>
<body>
	<!--NAV BAR-->
	<nav class="navbar navbar-expand-sm bg-success navbar-light">
		<div class="container-fluid">
		    <ul class="navbar-nav">

		    	<!-- LINK DOKTER -->

		      	<li class="nav-item">
		        	<a class="nav-link" href="Dokter.php" >Dokter</a>
		      	</li>

		      	<!-- LINK PASIEN -->

		     	<li class="nav-item">
		        	<a class="nav-link" href="Pasien.php" >Pasien</a>
		      	</li>
		      	
		      	<!-- LINK OBAT -->

		      	<li class="nav-item">
		        	<a id="obat" class="nav-link" onclick="loadObat()">Obat</a>
		      	</li>
		      	
		      	<!-- LINK RUANGAN -->

		      	<li class="nav-item">
		        	<a id="ruangan" class="nav-link" onclick="loadRuangan()">Ruangan</a>
		      	</li>
		    </ul>
		</div>
	</nav>
<p></p>
<p id="menu"></p>

<!--JAVASCRIPT--> 

<script type="text/javascript">
/*
	//BUKA HALAMAN DOKTER

	function loadDokter(){
		const xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			document.getElementById("menu").innerHTML = this.responseText;
		}
		xhttp.open("POST", "Dokter.esp");
 		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  		xhttp.send("fname=Henry&lname=Ford");
	}

	//BUKA HALAMAN PASIEN

	function loadPasien(){
		const xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			document.getElementById("menu").innerHTML = this.responseText;
		}
		xhttp.open("POST", "Pasien.php");
 		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  		xhttp.send("fname=Henry&lname=Ford");
	}

	//BUKA HALAMAN OBAT

	function loadObat(){
		const xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			document.getElementById("menu").innerHTML = this.responseText;
		}
		xhttp.open("POST", "Obat.php");
 		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  		xhttp.send("fname=Henry&lname=Ford");
	}

	//BUKA HALAMAN RUANGAN

	function loadRuangan(){
		const xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			document.getElementById("menu").innerHTML = this.responseText;
		}
		xhttp.open("POST", "Ruangan.php");
 		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  		xhttp.send("fname=Henry&lname=Ford");
	}

</script>
<nav class="navbar navbar-expand-sm bg-success navbar-success fixed-bottom">
<p></p>
</nav>
</body>
</html>