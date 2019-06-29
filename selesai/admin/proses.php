<?php 
$namabarang=$_POST["name"];
$id=$_POST["id"];
$price=$_POST["price"];

include '../config.php';

$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, '../images/'.$nama);
					$query = mysqli_query($dbconnect, "INSERT INTO tbl_pesan VALUES('$id','$namabarang','$nama','$price')");
					if($query){
						header("location:index.php");
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}

 ?>