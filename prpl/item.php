<?php 
include 'config.php';
?>
<head>
	    <!-- Required meta tags -->
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

	<style type="text/css">
		table{
			margin: 10px 0px;
		}
		th{
			background: #3498db;
			color: #fff;
		}
		tr{
			color: black;
		}
	</style>
			<style class="latar">
			body{
  			      color: white;
				background-image: url("");
			}
		</style>
		<link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">Pamela II</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">About</a>
  

		  </div>
		  <form class="form-inline my-2 my-lg-0" action="item.php" method="get">
      <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
        </div>
    </div>
	</nav>
	<div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Costomer <span>satisfaction</span><br> is our <span>priority</span></h1>
            <a href=""class="btn btn-primary tombol">Our Work</a>
              </div>
		</div>
	<!-- Container -->
	<div class="container">

<!-- Info panel -->
<div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-lg">
              <a href="pemesanan.php"><img src="img/4.png" alt="employee" class="float-left"></a>
              <h4>Cart</h4>
              <p>Belanjalah kebutuhan anda bersama kami</p>
            </div>
            <div class="col-lg">
              <img src="img/5.png" alt="High Res"class="float-left">
              <h4>Cashier Machine</h4>
              <p>Dengan mesin kasir berbasis online memudahkan transaksi</p>
            </div>
            <div class="col-lg">
              <img src="img/6.png" alt="Security"class="float-left">
              <h4>Price</h4>
              <p>Harga murah dengan kualitas terbaik</p>
            </div>
          </div>


  </div>

</div>
<!-- Akhir info panel -->

</body>
 

<h3></h3>
 
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];

}
?>
<div class="container text-center">
	<div class="row text-center">
		<div class="col" style="    text-align: -webkit-center;">
<table border="1" cellpadding="5" cellspacing="0">
	<?php 
	if(isset($_GET['cari'])){
		?>
		<tr>
			<th>No</th>
			<th>KODE BARANG</th>
			<th>NAMA BARANG</th>
			<th>HARGA BARANG</th>
			<th>STOK</th>
		</tr>
		<?php
		$cari = $_GET['cari'];
		$data = mysqli_query($dbconnect, "select * from barang where id_brng like '%".$cari."%' 
			or nm_brng like '%".$cari."%'");
			$no = 1;
			while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_brng']; ?></td>
				<td><?php echo $d['nm_brng']; ?></td>
				<td><?php echo $d['hrg_brng']; ?></td>
				<td><?php echo $d['stok_brng']; ?></td>
			</tr>
			<?php } ?>	
	<?php		
	}else{	
	}
	 ?>	
	
</table>
</div>
</div>
</div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>