<?php

include 'fungsig.php';

if(isset($_POST['aksi'])){
	if($_POST['aksi'] =="add"){

		$berhasil =tambah_data($_POST);
		
		if($berhasil){
			header("location: gudang.php");
		} else {
			echo $berhasil;
		}

		
	} else if ($_POST['aksi'] =="edit") {

		$berhasil =ubah_data($_POST);

		if($berhasil){
			header("location: gudang.php");
		} else {
			echo $berhasil;
		}
	}

}
if(isset($_GET['hapus'])){
	
	$berhasil= hapus_data($_GET);
	if($berhasil){
			header("location: gudang.php");

		} else {
			echo $berhasil;
		}
}
?>