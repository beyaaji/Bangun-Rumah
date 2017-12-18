<?php include 'navbar.php';?>
<?php include 'sidebar-admin.php';?>

<div class="col-md-8">
  <div class="profile-content">
    <div class="container">

      <form class="form-horizontal" action="index.php?updatemember" method="post">


        <input class="hidden" name="updatemember" type="hidden"></input>
        <input class="hidden" name="idmember" value="<?php echo $_GET['edituser']; ?>" required>

        <div class="form-group">
          <label class="align col-sm-2 control-label text-left" for="nama">Nama Member: </label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="namamember" value="<?=$row['namamember']?>" >
          </div>
        </div>

        <div class="form-group">
          <label class="align col-sm-2 control-label text-left" for="alamat">Alamat Member </label>
          <div class="col-sm-5">
           <input type="text" class="form-control" name="alamatmember" value="<?=$row['alamatmember']?>" >
         </div>
       </div>


       <div class="form-group">
        <label class="align col-sm-2 control-label text-left" for="notelf">Nomor Telefon</label>
        <div class="col-sm-5">
         <input type="text" class="form-control" name="nomortelefon" value="<?=$row['nomortelefon']?>" >
       </div>
     </div>

     <div class="form-group">
       <label class="align col-sm-2 control-label text-left" for="notelf">Username</label>
       <div class="col-sm-5">
         <input type="text" class="form-control" name="user" value="<?=$row['user']?>" >
       </div>
     </div>

     <div class="form-group">
      <label class="align col-sm-2 control-label text-left" for="notelf">Password</label>
      <div class="col-sm-5">
       <input type="text" class="form-control" name="pass" value="<?=$row['pass']?>" >
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