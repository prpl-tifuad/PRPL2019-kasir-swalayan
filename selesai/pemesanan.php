<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
	body{
		background: url("./admin/2.JPG");
		background-size: 100%;
	}
</style>
<?php


session_start();
$connect = mysqli_connect("localhost", "root", "", "tp_suwalayan");
if (isset($_POST["add_to_cart"])) {
	if (isset($_SESSION["shopping_cart"])) {
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if (!in_array($_GET["id"], $item_array_id)) {
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		} else {
			echo '<script>alert("Item Already Added")</script>';
		}
	} else {
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}
if (isset($_GET["action"])) {
	if ($_GET["action"] == "delete") {
		foreach ($_SESSION["shopping_cart"] as $keys => $values) {
			if ($values["item_id"] == $_GET["id"]) {
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="pemesanan.php"</script>';
			}
		}
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>MODUL PEMESANAN</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
	<br />
	<div class="container">
		<br />
		<br />
		<br />
		<h3 align="center">PEMESANAN BARANG </a></h3><br />
		<br /><br />
		<?php
		$query = "SELECT * FROM tbl_pesan ORDER BY id ASC";
		$result = mysqli_query($connect, $query);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_array($result)) {
				?>
				<div class="col-md-4">
					<form method="post" action="pemesanan.php?action=add&id=<?php echo $row["id"]; ?>">
						<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
							<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

							<h4 class="text-info"><?php echo $row["name"]; ?></h4>

							<h4 class="text-danger">Rp.<?php echo $row["price"]; ?></h4>

							<input type="text" name="quantity" value="1" class="form-control" />

							<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

							<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

							<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

						</div>
					</form>
				</div>
			<?php
		}
	}
	?>
		<div style="clear:both"></div>
		<br />
		<h3>Rincian Pemesanan</h3>
		<div class="table-responsive">
			<form action="" method="post">
			<table class="table table-bordered">
				<tr>
					<th width="40%">Nama Barang</th>
					<th width="10%">Jumlah</th>
					<th width="20%">Harga</th>
					<th width="15%">Total</th>
					<th width="5%">Action</th>
				</tr>
				<?php
				if (!empty($_SESSION["shopping_cart"])) {
					$total = 0;
					foreach ($_SESSION["shopping_cart"] as $keys => $values) {
						?>
						<tr>
							<td><?php echo $values["item_name"]; ?></td>
							<td><?php echo $values["item_quantity"]; ?></td>
							<td>Rp.<?php echo $values["item_price"]; ?></td>
							<td>Rp.<?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
							<td><a href="pemesanan.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
						</tr>
						<?php
						$total = $total + ($values["item_quantity"] * $values["item_price"]);
					}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">Rp.<?php echo number_format($total, 2); ?>
							<input type="text" name="angka" id="totalbayar" value="<?php echo $total ?>" hidden>
						</td>
						<td></td>
					</tr>
					<tr>
						<td colspan="3" align="right">Uang</td>
						<td align="right"><input type="number" name="uangkita" id="uang"></td>
						<td><button type="button" onclick="pasti()">Hitung</button></td>
					</tr>
					<tr>
						<td colspan="3" align="right">Kembali</td>
						<td align="right"><input type="number" name="kembalian" id="Tbayar"></td>
						<td></td>
					</tr>
				<?php
			}
			?>

			</table>
			</form>
					<script async='async' type='text/javascript'>
						        	function pasti(){
						            var total=parseInt($('#totalbayar').val());
						            var uang=parseInt($('#uang').val());
						 			console.log(total);
						            var total_bayar=uang-total;
						            $('#Tbayar').val(total_bayar);
						            }
					</script>
		</div>
	</div>
	</div>
	<br />
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<?php

?>