      <?php include 'sidebar-user.php';?>
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
                <td>$row[2]
                </td>
                <td>
                  <a href=\"".$row[3]."\" target='_blank'><img width='40%' src=\"".$row[3]."\"></a>
                </td>

                <td>
                  <a id='myBtn' class='btn btn-success' href='index.php?pilih=1&iduser=$_SESSION[iduser]&idDesain=$row[idDesain]&tanggal_pemesanan;'> PILIH
                </a>
              </td>


            </tr>
            ";
          }
          ?>

      </table>
    </div>


           <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" fa>
    <div class="modal-header">
      <span class="close">×</span>
      <h2>Pemesanan Desain</h2>
    </div>
    <div class="modal-body">
      <p>Anda telah memilih desain ini</p>
      <p>Dalam 1x24 jam Admin akan melakukan verifikasi melalui via telefon. jika dalam 1x24 jam tidak menjawab maka transaksi dibatalkan</p>
      <p>Sampai Jumpa</p>
    </div>
  </div>

</div>


<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
        </body>