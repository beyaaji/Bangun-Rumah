<?
@session_start();
include "koneksi.php";

?>
<?php include 'navbar.php';?>
<section >
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="assets/image/boy.png" class="img-responsive" />
                <h4>Desain Rumah</h4>
                <p>
                    Merupakan sebuah sistem yang di bangun untuk mempermudah User dalam membantu pembangunan rumah.
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="assets/image/tampilandepan.jpg" class="img-responsive img-max-width" />

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <h3>Login Now !</h3>
                <form action="cek-login.php" method="post">
                    <div class="form-group">
                        <input type="text" name="user" class="form-control" required="required" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" required="required" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="login" class="btn btn-success" > LOGIN </button>
                    </div>


                </form>
            </div>
        </div>

    </div>

</section>

<div id="footer">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <h3>Location</h3>
                <p>
                    <i>Alamat :</i> Jl. Kalimantan 37 Jember, Jawa Timur
                    <br />
                    &copy; 2017 desainrumah.com | by <a href="http://www.binarytheme.com/" style="color:#fff;" target="_blank">PSSI</a>

                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <h3>Quick Help</h3>
                <h4><span>Call: </span>082330237890</h4>
                <h4><span>E-mail: </span>desainrumah@gmail.com</h4>
                <h4><span>Facebook:</span>Desain Rumah</h4>
            </div>


        </div>

    </div>

</div>
<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/js/bootstrap.js"></script>

</body>
</html>
