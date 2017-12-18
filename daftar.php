<!--<![endif]-->
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
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="home.php">Bangun Rumah</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="home.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="kontak.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="vLogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </nav>



<title>Register Member</title>
<div class="container">
	<div class="row main">
		<div class="panel-heading">
			<div class="panel-title text-center">

				<h1 class="title"><b>Register Member</b></h1>

			</div>
		</div> 
		<hr>
		<div class="col-sm-offset-4 col-sm-4">
			<div class="main-login main-center">
				<form role="form-horizontal" method="post" action="index.php">
				<input type="hidden" class="form-control" name="idmember" value="1"/>
					<div class="form-group">
						<label for="name" class="cols-sm-2 control-label">Nama Lengkap</label>
						<div class="cols-sm-2">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="namamember" id="name"  placeholder="Masukkan Nama Anda" required/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="alamat" class="cols-sm-2 control-label">Alamat Lengkap</label>
						<div class="cols-sm-2">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="alamatmember" id="name"  placeholder="Masukkan Alamat Anda" required />
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="nohp" class="cols-sm-2 control-label">Nomer Telefon</label>
						<div class="cols-sm-2">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="nomortelefon" id="name"  placeholder="Masukkan Nomer Telefon Anda" required />
							</div>
						</div>
					</div>


					<div class="form-group">
						<label for="username" class="cols-sm-2 control-label">Username</label>
						<div class="cols-sm-2">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="username" id="username"  placeholder="Masukkan Username" required />
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="cols-sm-2 control-label">Password</label>
						<div class="cols-sm-2">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="password" id="password"  placeholder="Masukkan Password" required />
							</div>
						</div>
					</div>

					<div class="form-group ">
						<button type="submit" class="btn btn-block btn-primary" id="myBtn1">Register</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
</body>