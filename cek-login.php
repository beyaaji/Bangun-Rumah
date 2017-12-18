
<?php

include('koneksi.php');
@session_start();
if (isset($_POST['login'])) {


//ambil data dari form login
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $_SESSION['user'] = $_POST['user'];
//cek data yang dikirim, apakah kosong atau tidak
  if (empty($user) && empty($pass)) {
        //kalau username dan password kosong
    include "vLogin.php";
    break;
  } else if (empty($user)) {
        //kalau username saja yang kosong
    include "vLogin.php";
    break;
  } else if (empty($pass)) {
        //kalau password saja yang kosong
    include "vLogin.php";
    break;
  }

  $q = mysql_query("select * from user where user='$user' and pass='$pass'");

  if (mysql_num_rows($q) == 1) {
    while ($data = mysql_fetch_array($q)) {
     $_SESSION['iduser'] = $data ['iduser'];
      $_SESSION['user'] = $data ['user'];
      $_SESSION['pass'] = $data ['pass'];
      $_SESSION['level'] = $data ['level'];

      if ($_SESSION ['level'] == 1) {

       header('location:vAdminHome.php');

     } else if  ($_SESSION ['level'] == 2) {
      header('location:vDesainHome.php');


    } else if  ($_SESSION ['level'] == 3) {
      header('location:vUserHome.php');
    }  else {

        include "vLogin.php";
      }
    }
  }
}
?>