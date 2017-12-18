
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <title>Welcome</title>
        <!-- BOOTSTRAP CORE STYLE CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONT AWESOME CSS -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLE CSS -->
        <!-- <link href="assets/css/style.css" rel="stylesheet" /> -->
        <link href="assets/css/style2.css" rel="stylesheet" />
        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Nova+Flat' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
    <div class="section">
      <div class="container">
        
        <div class="row profile">
          <div class="col-md-2">
      <div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        
          <div class="col-sm-12 col-sm-offset-2 col">
          <img src="assets/img/admin2.png" class="img-responsive" alt="">
          </div>
        
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
            PUTRA BELVA AMEERA
          </div>
          <div class="profile-usertitle-name">
            ADMIN
          </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <!-- <div class="profile-userbuttons">
          <button type="button" class="btn btn-success btn-sm">Follow</button>
          <button type="button" class="btn btn-danger btn-sm">Message</button>
        </div> -->
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu">
          <ul class="nav">
            <li>
              <a href="index.php?tabeladmin">
              <i class="fa fa-table fa"></i>
              PEMESANAN </a>
            </li>
            <li>
              <a href="index.php?lihat-user">
              <i class="fa  fa-pencil-square fa"></i>
              LIHAT KOSTUMER </a>
            </li>
          <!--   <li>
              <a href="index.php?editPendonor=<?php echo $_SESSION['id_pendonor']; ?>">
              <i class="glyphicon glyphicon-ok"></i>
              Tambah Pendonor </a>
            </li> -->
            
            <li>
              <a href="logout.php?logout=true">
              <i class="fa fa-cog fa"></i>
              LOGOUT </a>
            </li>
          </ul>
        </div>
        <!-- END MENU -->
      </div>
    </div>
      <div class="col-md-10">
        <div class="profile-content">

            <div class="table-responsive">
             <table class="col-md-8" class="table table-striped table-bordered table-hover" border="1">
              <thead>
                <tr>

                  <th>Nama Pemesan</th>
                  <th>ID PEMESANAN</th>
                  <th>Tanggal Pemesanan</th>
                  <th>Nama Bangunan</th>
                  <th>Tipe luas Lahan</th>
                  <th>File Upload</th>
                  <th>Status Pembayaran</th>
                  <th>Status Validasi</th>
                  <th></th>
                  <th></th>
                  <th></th>
          
                  <?php while($row = mysql_fetch_array($data)){

          echo
          "
          <tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>
              <a href=\"".$row[5]."\" target='_blank'><img width='40%' src=\"".$row[5]."\"></a>
            </td>
            <td>$row[6]</td>
            <td>$row[7]</td>
            <td>
            <a href='index.php?pesanadmin=$row[id_pemesanan]'  class = 'btn btn-success'>LUNAS</a></td>
            <td>
            <a href='index.php?deleteadmin=$row[id_pemesanan]' class = 'btn btn-success'>delete</a></td>
            <td>
            <a href='index.php?validasiadmin=$row[id_pemesanan]'  class = 'btn btn-success'>VALIDASI</a></td>
          </tr>
          ";
        }
        ?>
                </tr>
              </thead>
            </table>
          </div>
        </body>