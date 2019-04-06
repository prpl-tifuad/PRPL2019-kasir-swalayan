<?php 
include 'config.php';
?>
<head>

	<style type="text/css">
		table{
			margin: 10px 0px;
		}
		th{
			background: #3498db;
			color: #fff;
		}
	</style>
			<style class="latar">
			body{
  			      color: white;
				background-image: url(w1.jpg);
			}
		</style>
</head>
 

<h3></h3>
 
<form action="index.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
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