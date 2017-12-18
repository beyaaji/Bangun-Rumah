<?php
class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
	function __construct(){
		$connect = mysql_connect("localhost", "root", "");
		$db = mysql_select_db("sidonar");
	}
	function execute($query){
		return mysql_query($query);
	}

	function createDesain($namaBangunan, $tipe, $gambar){
		$query = "insert into desain values (null, '$namaBangunan',' $tipe', '$gambar')";
		return $this->execute($query);
	}

	function viewDesain(){
		$query="select idDesain, namaBangunan, tipe, gambar from desain";
		return $this->execute($query);
	}
}
?>