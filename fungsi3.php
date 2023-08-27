<?php
	include 'koneksi.php';

	function tambah_data($data){



		$Kamar =$data['Kamar'];
		$Loker =$data['Loker'];
		$Gantungan_baju =$data['Gantungan_baju'];
		$Gantungan_tas =$data['Gantungan_tas'];
		$Stopkontak =$data['Stopkontak'];
		$Gorden =$data['Gorden'];
		$Cermin =$data['Cermin'];
		$Lampu_putih =$data['Lampu_putih'];
		$Lampu_kuning =$data['Lampu_kuning'];

		$query ="INSERT INTO barang_lt3 VALUES(null,'$Kamar','$Loker','$Gantungan_baju','$Gantungan_tas','$Stopkontak','$Gorden','$Cermin','$Lampu_putih','$Lampu_kuning')";
		$sql = mysqli_query($GLOBALS['conn'], $query);

		return true;
	}

	function ubah_data($data){
		$id =$data['id'];
		$Kamar =$data['Kamar'];
		$Loker = $data['Loker'];
		$Gantungan_baju = $data['Gantungan_baju'];
		$Gantungan_tas =$data['Gantungan_tas'];
		$Stopkontak =$data['Stopkontak'];
		$Gorden =$data['Gorden'];
		$Cermin =$data['Cermin'];
		$Lampu_putih =$data['Lampu_putih'];
		$Lampu_kuning =$data['Lampu_kuning'];



		$query ="UPDATE barang_lt3 SET id='$id', Kamar= '$Kamar', Loker='$Loker', Gantungan_baju='$Gantungan_baju', Gantungan_tas='$Gantungan_tas', Stopkontak='$Stopkontak', Gorden='$Gorden', Cermin='$Cermin', Lampu_putih='$Lampu_putih', Lampu_kuning='$Lampu_kuning' WHERE id='$id';";
		$sql =mysqli_query($GLOBALS['conn'], $query);

		return true;

	}

	function hapus_data($data){

		$id = $data['hapus'];
		$query = "DELETE FROM barang_lt3 WHERE id ='$id';";
		$sql= mysqli_query($GLOBALS['conn'], $query);

		return true;


	}

?>
