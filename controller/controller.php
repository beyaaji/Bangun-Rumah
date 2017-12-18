<?php
//include class model
include "model/model.php";

class controller{
	//variabel public
	public $model;
	
	//inisialisasi awal untuk class
	function __construct(){
		$this->model = new model(); //variabel model merupakan objek baru yang dibuat dari class model
	}

	function createDesain(){
		$directory_gambar = "../bangunrumah/gambar/";
		$target_file = $directory_gambar . basename($_FILES["gambar"]["name"]);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		// if($_POST['alamat_event'] != 'Jember'){
		// 	die("Maaf Anda Harus Memasukkan Alamat Event di Jember");
		// }else 

		if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
			$_SESSION["pesan"] = "File ". basename( $_FILES["gambar"]["name"]). " berhasil diupload";
			$nama_gambar = $_FILES["gambar"]["name"];
			$namaBangunan = $_POST['namaBangunan'];
			$tipe = $_POST['tipe'];
			$this->model->createDesain($namaBangunan, $tipe, $nama_gambar);
			header("location:vLihatDesain.php");
		}
		else {
			$_SESSION["pesan"] = "Terjadi kesalahan saat mengupload file";
		}
	}

	function viewDesain(){

		$tika = $this->model->viewDesain();/*
		$query="select idDesain, namaBangunan, tipe, gambar from desain";
		$data = mysql_query($query);*/

		include "vLihatDesain.php";
	}
}

?>