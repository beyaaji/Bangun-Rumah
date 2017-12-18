<?php include 'sidebar-admin.php';?>

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
<div class="col-md-8">
  <div class="profile-content">

    <div class="table-responsive">
     <table  class="table table-striped table-bordered table-hover" border="1">
      <thead>
        <tr>

          <th>ID User</th>
          <th>Nama User</th>
          <th>Alamat User</th>
          <th>Nomer Telefon</th>
          <th>Username</th>
          <th>Password</th>
          <!-- <th>Aksi</th> -->
        </tr>
        <?php while($row = mysql_fetch_array($data)){

          echo
          "
          <tr>
            <td>$row[idmember]</td>
            <td>$row[namamember]</td>
            <td>$row[alamatmember]</td>
            <td>$row[nomortelefon]</td>
            <td>$row[user]</td>
            <td>$row[pass]</td>
        </tr>
        ";
      }
      ?>
    </tr>
  </thead>
</table>
</div>
</body>