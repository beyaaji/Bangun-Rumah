<?php include 'navbar.php';?>

      <?php include 'sidebar_desain.php';?>

      <div class="col-md-8">
        <div class="profile-content">
          <div class="container">
            <form class="form-horizontal">
              <div class="form-group">
                <label class="align col-sm-2 control-label text-left" for="nama">Nama Bangunan: </label>
                <div class="col-sm-5">
                  <input type="email" class="form-control" id="email" placeholder="Minimalis">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="tipe">Tipe</label>
                <div class="col-sm-5">
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Tipe 36x36
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li>Tipe 36</li>
                      <li>Tipe 40</li>
                      <li>Tipe 76</li>
                    </ul>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="upload">Upload Desain</label>
                  <div class="col-sm-5">
                  Upload file Desain
                    <input type="file">
                  </div>
                </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-2">
                   <a class="btn btn-block btn-primary" id="myBtn" href="vLihatDesain.php">Submit</a>
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