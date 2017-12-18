<?php

include "controller/controller.php";
include "controller/controller2.php";
session_start();

if(isset($_GET['view-desain'])){
	$main->viewDesain();
}
else if (isset($_GET['lihatdesain'])) {
	$main2 = new controller2();
	$main2->view_desain();
}
else if(isset($_GET['createdesain'])){
	$main = new controller2();
	$main->create_desain();
}
else if(isset($_GET['editdesain'])){
	$idDesain = $_GET['editdesain'];
	$main = new controller2();
	$main->editdesain($idDesain);
}
elseif (isset($_GET['updatedesain'])){
	$main = new controller2();
	$main->updateDesain();
}
elseif (isset($_POST['idmember'])){
	$main = new controller2();
	$main->daftar();
}
elseif (isset($_GET['lihatdesainuser'])){
	$main = new controller2();
	$main->view_desain_user();
}
elseif (isset($_GET['pemesanandesain'])){
	$id = $_GET['pemesanandesain'];
	$main = new controller2();
	$main ->pemesanandesain($id);
}
elseif (isset($_GET['pemesanandesaindesain'])){
	$main = new controller2();
	$main ->pemesanandesaindesain();

}elseif (isset($_GET['pilih'])) {
	$iduser = $_GET['iduser'];
	$idDesain = $_GET['idDesain'];
	$tanggal_pemesanan = $_GET['tanggal_pemesanan'];
	$main = new controller2();
	$main->Pemesanan($iduser, $idDesain, $tanggal_pemesanan);
	
}
elseif (isset($_GET['pesanadmin'])) {
	$id_pemesanan = $_GET ['pesanadmin'];
	$main = new controller2();
	$main->pesanadmin($id_pemesanan);
}
elseif (isset($_GET['tabeladmin'])){
	$main = new controller2();
	$main ->tabeladmin();

}
elseif (isset($_GET['validasiadmin'])) {
	$id_pemesanan = $_GET ['validasiadmin'];
	$main = new controller2();
	$main->validasiadmin($id_pemesanan);
}
elseif (isset($_GET['deleteadmin'])) {
	$id_pemesanan = $_GET ['deleteadmin'];
	$main = new controller2();
	$main->deleteadmin($id_pemesanan);
}
elseif(isset($_GET['lihat-user'])){
	$main = new controller2();
	$main->lihatuser();
}
else if(isset($_GET['kirimpdf'])){
	$idDesain = $_GET['kirimpdf'];
	$main = new controller2();
	$main->kirimpdf($idDesain);
}
elseif (isset($_GET['updatepdf'])){
	$main = new controller2();
	$main->kirimpdf3();
}
// elseif(isset($_GET['edituser'])){
// 	$idmember = $_GET['edituser'];
// 	$iduser = $_GET['edituser'];
// 	$main = new controller2();
// 	$main->editmember($idmember);
// }
// elseif (isset($_GET['updatemember'])){
// 	$main = new controller2();
// 	$main->updatemember();
// }
else{
	include "home.php";
}

?>