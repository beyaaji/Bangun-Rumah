<?php
class model2{
	function __construct(){
		$connect = mysql_connect("localhost","root","");
		$db = mysql_select_db("bangunrumah");
	}
	function execute($query){
		return mysql_query($query);
	}
	function fetch($var){
		return mysql_fetch_array($var);
	}

	function view_desain(){
		$query = "select idDesain, namaBangunan, tipe, gambar from desain";
		return $this->execute($query);
	}
	function createDesain($namaBangunan, $tipe, $gambar){
		$query = "insert into desain values (null, '$namaBangunan', '$tipe', '$gambar')";
		return $this->execute($query);
	}

	function editDesain($idDesain){
		$query = "select * from desain where idDesain = '$idDesain'";
		return $this->execute($query);
	}

	function updateDesain($idDesain, $namaBangunan, $tipe, $gambar){
		
		$query= " update desain set namaBangunan = '".$namaBangunan."', tipe = '".$tipe."', gambar = '".$gambar."' where idDesain ='".$idDesain."' ";
		echo $query;
		return $this->execute($query);
	}
	function daftar($namamember, $alamatmember, $nomortelefon, $user, $pass){
		$query= " insert into member values (null,'$namamember','$alamatmember','$nomortelefon','$user','$pass')";
		$this->execute($query);


		$query1= " insert into user values (null,'$user','$pass',3)";
		$this->execute($query1);

	}
	function view_desain_user(){
		$query = "select idDesain, namaBangunan, tipe, gambar from desain";
		return $this->execute($query);
	}
	function pemesanandesain($id){
		$query = "SELECT m.user ,p.tanggal_pemesanan,d.idDesain, d.namaBangunan,d.tipe, d.gambar, d.pdf FROM desain d join pemesanan p on d.idDesain = p.idDesain join user m on m.iduser = p.iduser = '$id'";
		return $this->execute($query);
	}
	function pemesanandesaindesain(){
		$query = "SELECT m.user,p.tanggal_pemesanan,d.idDesain, d.namaBangunan,d.tipe, d.gambar, p.statusvalidasi FROM desain d join pemesanan p on d.idDesain = p.idDesain join user m on m.iduser = p.iduser where m.level = 3 and p.statusvalidasi = 'VALIDASI'";
		return $this->execute($query);
	}
	function pilih($iduser, $idDesain, $tanggal_pemesanan){
		$tanggal_pemesanan = date ("Y-m-d H:i:s");
		echo $iduser;
		echo $idDesain;
		echo $tanggal_pemesanan;
		$query = "INSERT INTO `pemesanan` values(null, '".$iduser."', '".$idDesain."', '".$tanggal_pemesanan."', 'Tidak Tervalidasi', 'Tidak Lunas')";
		return $this->execute($query);

	}
	function tabeladmin(){
		$query = "SELECT u.user, p.id_pemesanan, p.tanggal_pemesanan,d.namaBangunan,d.tipe,d.gambar, p.statuslunas, 
		p.statusvalidasi FROM pemesanan p JOIN user u on p.iduser=u.iduser join desain d on p.idDesain=d.idDesain WHERE u.level = 3";
		return $this->execute($query);
	}
	function pesanadmin($id_pemesanan){
		$query = " UPDATE `pemesanan` SET statuslunas = 'Lunas' WHERE id_pemesanan = '".$id_pemesanan."' ";
		return $this -> execute($query);
	}
	function validasiadmin($id_pemesanan){
		$query = " UPDATE `pemesanan` SET statusvalidasi = 'Validasi' WHERE id_pemesanan = '".$id_pemesanan."' ";
		return $this -> execute($query);
	}
	function deleteadmin($id_pemesanan){
		$query = "DELETE FROM pemesanan WHERE id_pemesanan = '".$id_pemesanan."'";
		return $this -> execute($query);
	}

	function lihatuser(){
		$query = "select * from member";
		return $this->execute($query);
	}
	function editData($idDesain){
		$query = "select * from desain where idDesain = '$idDesain'";
		return $this->execute($query);
	}
	function kirimpdf($idDesain, $namaBangunan, $tipe, $gambar,$pdf){
		
		$query= " update desain set namaBangunan = '".$namaBangunan."', tipe = '".$tipe."', gambar = '".$gambar."' ,pdf = '".$pdf."' where idDesain ='".$idDesain."' ";
		echo $query;
		return $this->execute($query);
	}
	// function editmember($idmember){
	// 	$query = "select * from member where idmember = '$idmember'";
	// 	return $this->execute($query);
	// }

	// function updatemember($idmember, $namamember, $alamatmember, $nomortelefon, $user, $pass, $iduser){
		
	// 	$query= " update member set namamember = '".$namamember."', alamatmember = '".$alamatmember."', nomortelefon = '".$nomortelefon."',user= '".$user."', pass = '".$pass."' where idmember ='".$idmember."' ";
	// 	echo $query;
	// 	$this->execute($query);

	// 	$query2 = "update user set user= '".$user."', pass = '".$pass."', level = 3 where iduser =14";
	// 	echo $query;
	// 	$this->execute($query2);
	// }

}
?>