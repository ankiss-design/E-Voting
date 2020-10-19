<?php
session_start();
if ( !isset($_SESSION["login"]) ) {
  header("location:../index.php");
  exit;
}
include'../koneksi.php';

if(isset($_POST['akses'])) {
  $nis = $_POST['nis'];
function acak($panjang)
{
    $kode_akses = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
  $pos = rand(0, strlen($kode_akses)-1);
  $string .= $kode_akses{$pos};
    }
    return $string;
}
//cara memanggilnya
$hasil= acak(6);
}

error_reporting(0);

if(isset($_POST['simpan'])) {
$nis = mysqli_real_escape_string($koneksi, $_POST['nis']);
$kode_akses= mysqli_real_escape_string($koneksi, $_POST['kode_akses']);


    $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tbl_akses WHERE nis='$nis'"));
    if ($cek > 0){
    echo "<script>window.alert('Maaf Anda sdh terdaftar sebelumnya')
    window.location='buat_akses.php'</script>";
    }else {
    mysqli_query($koneksi,"INSERT INTO tbl_akses(nis,kode_akses)
    VALUES ('$nis','$kode_akses')");
 
    echo "<script>window.alert('Kode Akses Telah Aktif')
    window.location='buat_akses.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Voting SMA N 1 Sumberejo</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <style type="text/css">
     img{
      width: 100%;
      height: 500px;
      text-align: center;
     }
     img{
      border-radius: 10px;
     }
   </style>
</head>
<body>
                
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                      <!--  <img src="assets/img/logo.png" /> -->
                      <h4 style="color: white;">Sistem E-Smanis</h4>
                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  <a href="../logout.php" style="color:#fff;"><i class="fa fa-circle-o-notch"> Logout</i></a>  
                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <div class="menu">
                  <ul class="nav" id="main-menu">
                   
                      <li>
                          <a href="index.php"><i class="fa fa-desktop"></i>Beranda</a>
                      </li>
                      <?php
                          $level = $_SESSION['level'] == 'admin';
                          if($level){
                      ?>

                      <li>
                          <a href="input_data_paslon.php"><i class="fa fa-user "></i>Input Data Calon Ketua</a>
                      </li>

                      <li>
                          <a href="upload_dpt.php"><i class="fa fa-file"></i> Upload DPT</a>
                      </li>

                      <li>
                          <a href="buat_akses.php"><i class="fa fa-lightbulb-o "></i>Buat Akses </a>
                      </li>

                      <li>
                          <a href="hasil_suara.php"><i class=""></i>Hasil Suara </a>
                      </li>

                      <?php } ?>
                      <li>
                          <a href="../logout.php"><i class="fa fa-circle-o-notch "></i>Logout</a>
                      </li>
                      
                  </ul>
                </div>
             </div>

        </nav>
        <!-- /. NAV SIDE  -->
          

          <div id="page-wrapper" >
            <div id="page-inner">
              <div class="row">
                <div class="col-lg-12">
                  <h2><i class="fa fa-lightbulb-o"> Buat Akses</i></h2>   
                </div>
              </div>              

                <div class="row">
                  <div class="col-lg-6">
                    <form action="" method="post">
                      <div class="form-group">
                        <label>NIS</label>
                        <input type="text" name="nis" required="required" placeholder="Masukan NIS..." class="form-control" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="akses" value="Filter" class="form-control">
                      </div>                        
                    </form>

                    <form action="" method="post">
                       <div class="form-group">
                        <input type="text" style="background-color:rgba(238, 24, 21, 0.53); font-size: 22px;" name="nis" placeholder="NIS" required="required" class="form-control" value="<?php echo $nis; ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" style="background:rgba(238, 24, 21, 0.53); font-size: 22px;" name="kode_akses" required="required" placeholder="KODE AKSES" class="form-control" autocomplete="off" value="<?php echo $hasil; ?>">
                      </div>
                      <div class="form-group">
                        <input type="submit" class="btn btn-success" name="Simpan" value="Aktifkan" class="form-control">
                      </div>                        
                    </form>
                  </div>
                </div>
                 
                  <!-- /. ROW  --> 
              </div>
             <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
          </div>


          <div class="footer">
            <div class="row">
              <div class="col-lg-12" >
                &copy; Copyright Agus Kurniawan <?php echo date('Y') ?> <a href="http://binarytheme.com" style="color:#fff;" target="_blank"></a>
              </div>
            </div>
          </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


    
   
</body>
</html>