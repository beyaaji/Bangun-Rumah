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
    <div class="container">

      <form class="form-horizontal" action="index.php?updatedesain" method="post" enctype="multipart/form-data">


        <input class="hidden" name="updatedesain" type="hidden"></input>
        <input class="hidden" name="idDesain" type="hidden" value="<?php echo $_GET['editdesain']; ?>" required>

        <div class="form-group">
          <label class="align col-sm-2 control-label text-left" for="nama">Nama Bangunan: </label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="namaBangunan" value="<?=$row['namaBangunan']?>" >
          </div>
        </div>

        <div class="form-group">
          <label class="align col-sm-2 control-label text-left" for="nama">Tipe Bangunan: </label>
          <div class="col-sm-5">
             <select name="tipe" value ="<?=$row['tipe']?>" >
            <option><?=$row['tipe']?></option>
            <?php
            mysql_connect("localhost", "root", "");
            mysql_select_db("bangunrumah");
            $sql = mysql_query("SELECT distinct tipe FROM desain ORDER BY tipe ASC");
            if(mysql_num_rows($sql) != 0){
              while($data = mysql_fetch_assoc($sql)){
                echo '<option>'.$data['tipe'].'</option>';
              }
            }
            ?>
          </select>
          </div>
        </div>


        <div class="form-group">
          <label class="control-label col-sm-2">Upload Desain</label>
          <div class="col-sm-5">
             <a href="<?php echo $row['gambar']?>" target='_blank'><img width='40%' src="<?php echo $row['gambar']?>"></a>
             <br>
            Upload file Desain
            <input type="file" name="gambar">
          </div>
        </div>


        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-2">
            <button type="submit" class="btn btn-block btn-primary" name="upload">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</body>