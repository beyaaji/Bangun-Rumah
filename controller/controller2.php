<?php
include "model/model2.php";
class controller2{
	public $model2;

	function __construct(){
		$this->model = new model2();
		$iduser = $_SESSION['iduser'];
	}

	function view_desain(){
		$id = $_SESSION['user'];
		$query = "select idDesain, namaBangunan, tipe, gambar from desain";
		$data = mysql_query($query);
		include "vLihatDesain.php";

	}

	function create_desain(){
		$namaBangunan = $_POST['namaBangunan'];
		$tipe = $_POST['tipe'];

		$gambar = $_FILES['gambar'];

		$filename1 = "gambar".date('YmdHis');


		$destination1 = 'gambar/' .$filename1.'.jpg';
		move_uploaded_file($gambar['tmp_name'], $destination1);

		$result = mysql_query ("insert into desain (idDesain, namaBangunan, tipe, gambar)
			values (null,'$namaBangunan','$tipe','$destination1')");


		header('location:index.php?lihatdesain');
	}

	function editDesain($idDesain){
		$result = $this->model->editDesain($idDesain);
		while ($row = mysql_fetch_array($result)) {
			include "edit_desain.php";
		};
	}

	function updateDesain (){
		$idDesain = $_POST['idDesain'];
		$namaBangunan = $_POST['namaBangunan'];
		$tipe = $_POST['tipe'];


		$destination1 = $_POST['gambar2'];

		if (!$_FILES['gambar']['error'] > 0) { //dibuat seperti itu ya. siap
			// echo "Oke lah";
			$img_semester = $_FILES['gambar'];
			$filename1 = "gambar".date('YmdHis');
			$destination1 = 'gambar/' .$filename1.'.jpg';
			move_uploaded_file($img_semester['tmp_name'], $destination1);
		}

		$update = $this->model->updateDesain($idDesain, $namaBangunan, $tipe, $destination1);

		header("location:index.php?lihatdesain");
	}
	function daftar(){
		$namamember = $_POST['namamember'];
		$alamatmember = $_POST['alamatmember'];
		$nomortelefon = $_POST['nomortelefon'];
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$this->model->daftar($namamember, $alamatmember, $nomortelefon, $user, $pass);

		header('location:home.php');
	}

	function view_desain_user(){
		$id = $_SESSION['user'];
		$query = "select idDesain, namaBangunan, tipe, gambar from desain ";
		$data = mysql_query($query);
		include "vLihatDesainUser.php";
	}
	function pemesanandesain($id){
		$id=$_SESSION['iduser'];
		$query = "SELECT m.user,p.tanggal_pemesanan,d.idDesain, d.namaBangunan,d.gambar, d.pdf FROM desain d join pemesanan p on d.idDesain = p.idDesain join user m on m.iduser = p.iduser where m.iduser = '$id'";
		$data = mysql_query($query);
		include "vPemesananDesainUser.php";
	}
	function pemesanandesaindesain(){

		$query = "SELECT m.user,p.tanggal_pemesanan,d.idDesain, d.namaBangunan,d.tipe, d.gambar,p.statusvalidasi FROM desain d join pemesanan p on d.idDesain = p.idDesain join user m on m.iduser = p.iduser where m.level = 3 and p.statusvalidasi = 'VALIDASI'";
		$data = mysql_query($query);
		include "vPemesananDesain.php";
	}
	function Pemesanan($iduser, $idDesain, $tanggal_pemesanan){
		$iduser=$_SESSION['iduser'];
		if($this->model->pilih($iduser, $idDesain, $tanggal_pemesanan)){
			echo "oke";
		}else{
			echo "gagal";
		}
		header("location:index.php?lihatdesainuser");
	}
	function tabeladmin(){
		$query = "SELECT u.user, p.id_pemesanan, p.tanggal_pemesanan,d.namaBangunan,d.tipe,d.gambar, p.statuslunas, 
		p.statusvalidasi FROM pemesanan p JOIN user u on p.iduser=u.iduser join desain d on p.idDesain=d.idDesain WHERE u.level = 3";
		$data = mysql_query($query);
		include "vPesanAdmin.php";

	}
	function pesanadmin($id_pemesanan){
		if ($update = $this->model->pesanadmin($id_pemesanan)){
			echo "oke";
		}else{
			echo "gagal";
		}
		header("location:index.php?tabeladmin");
	}
	function validasiadmin($id_pemesanan){
		if ($update = $this->model->validasiadmin($id_pemesanan)){
			echo "oke";
		}else{
			echo "gagal";
		}
		header("location:index.php?tabeladmin");
	}
	function deleteadmin($id_pemesanan){
		if ($update = $this->model->deleteadmin($id_pemesanan)){
			echo "oke";
		}else{
			echo "gagal";
		}
		header("location:index.php?tabeladmin");

	}
	function lihatuser(){
		$query = "select * from member";
		$data = mysql_query($query);
		include "vUser.php";
	}

	function kirimpdf($idDesain){
		$result = $this->model->editData($idDesain);
		while ($row = mysql_fetch_array($result)) {
			include "vkirimpdf.php";
		};
	}
	function kirimpdf3 (){
		$idDesain = $_POST['idDesain'];
		$namaBangunan = $_POST['namaBangunan'];
		$tipe = $_POST['tipe'];
		$pdf	= "pdf/".$idDesain.".".pathinfo(basename($_FILES["pdf"]["name"]), PATHINFO_EXTENSION);


		$destination1 = $_POST['gambar2'];

		if (!$_FILES['gambar']['error'] > 0) { //dibuat seperti itu ya. siap
			// echo "Oke lah";
			$img_semester = $_FILES['gambar'];
			$filename1 = "gambar".date('YmdHis');
			$destination1 = 'gambar/' .$filename1.'.jpg';
			move_uploaded_file($img_semester['tmp_name'], $destination1);
		}
		$sql= "update desain set namaBangunan = '".$namaBangunan."', tipe = '".$tipe."', gambar = '".$destination1."' ,pdf = '".$pdf."' where idDesain ='".$idDesain."' ";
		if (!empty($_FILES['pdf']['name'])){
			$sql		= $sql.'",pdf="'.$pdf;
			move_uploaded_file($_FILES["pdf"]["tmp_name"], $pdf);
			/*move_uploaded_file($_FILES["pdf"]["tmp_name"], $sql);*/
		} 
		$sql	= $sql.'" where idDesain="'.$idDesain.'"';
		/*$query	= mysqli_query($,$sql);*/



$update = $this->model->kirimpdf($idDesain, $namaBangunan, $tipe, $destination1, $pdf);

header("location:index.php?pemesanandesaindesain");
}

	// function editmember($idmember){
	// 	$result = $this->model->editmember($idmember);
	// 	while ($row = mysql_fetch_array($result)) {
	// 		include "edit_user.php";
	// 	};
	// }

	// function updatemember (){
	// 	$idmember = $_POST['idmember'];
	// 	$namamember = $_POST['namamember'];
	// 	$alamatmember = $_POST['alamatmember'];
	// 	$nomortelefon = $_POST['nomortelefon'];
	// 	$user = $_POST['user'];
	// 	$pass = $_POST['pass'];
	// 	$iduser = $_POST['iduser'];

	// 	$update = $this->model->updatemember($idmember, $namamember, $alamatmember, $nomortelefon, $user, $pass, $iduser);

	// 	header("location:index.php?lihat-user");
	// }


}

?>