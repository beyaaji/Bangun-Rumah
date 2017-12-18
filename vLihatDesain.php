<?php include 'sidebar_desain.php';?>

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
      <table id="view-desain" class="table table-striped table-bordered table-hover" border="1" >
        <thead>
          <tr>

            <th>ID Desain</th>
            <th>Nama Bangunan</th>
            <th>Tipe luas Lahan</th>
            <th>File Upload</th>
            <th>Aksi</th>
          </tr>

            <?php while($row = mysql_fetch_array($data)){
               
                echo
              "
              <tr>
                <td>$row[0]</td>
                <td>$row[1]</td>
                <td>$row[2]</td>
                <td>
                  <a href=\"".$row[3]."\" target='_blank'><img width='40%' src=\"".$row[3]."\"></a>
                </td>

                <td>
                  <a href='index.php?editdesain=$row[idDesain]' class='btn btn-success' >UBAH
                  </div>
                </a>
              </td>


            </tr>
            ";
          }
          ?>

      </table>
    </div>
  </body>