
<?php 

if(isset($_POST['update'])) {
    $nik =  $_POST['nik'];
    $nama =  $_POST['nama']; 
    $tempat_tanggal_lahir =  $_POST['tempat_tanggal_lahir'];
    $jenis_kelamin =  $_POST['jenis_kelamin'];
    $jenis_disabilitas =  $_POST['jenis_disabilitas'];
    $gambaran_disabilitas =  $_POST['gambaran_disabilitas'];
    $sejak_kapan =  $_POST['sejak_kapan'];
    $penyebab_disabilitas =  $_POST['penyebab_disabilitas'];
    $agama =  $_POST['agama'];
    $pendidikan =  $_POST['pendidikan'];
    $status =  $_POST['status'];
    $alamat =  $_POST['alamat'];
    $program_pemerintah =  $_POST['program_pemerintah'];
    $no_hp =  $_POST['no_hp'];
    $pekerjaan_disabilitas =  $_POST['pekerjaan_disabilitas'];
    $pekerjaan_ayah =  $_POST['pekerjaan_ayah'];
    $pekerjaan_ibu =  $_POST['pekerjaan_ibu'];
    $penghasilan_disabilitas =  $_POST['penghasilan_disabilitas'];
    $penghasilan_orangtua =  $_POST['penghasilan_orangtua'];
    $wali =  $_POST['wali'];
    $pekerjaan_wali =  $_POST['pekerjaan_wali'];
    $bantuan_ygdibutuhkan =  $_POST['bantuan_ygdibutuhkan'];
    $ppks_tinggal_bersama =  $_POST['ppks_tinggal_bersama'];
    
    
    $result = mysqli_query($connect, "update data_disabilitas set nik = '$nik', nama = '$nama' , tempat_tanggal_lahir = '$tempat_tanggal_lahir', jenis_kelamin = '$jenis_kelamin', jenis_disabilitas = '$jenis_disabilitas', gambaran_disabilitas = '$gambaran_disabilitas', sejak_kapan = '$sejak_kapan', penyebab_disabilitas = '$penyebab_disabilitas', agama = '$agama', pendidikan = '$pendidikan', status = '$status', alamat = '$alamat', program_pemerintah = '$program_pemerintah', no_hp = '$no_hp', pekerjaan_disabilitas = '$pekerjaan_disabilitas', pekerjaan_ayah = '$pekerjaan_ayah', pekerjaan_ibu = '$pekerjaan_ibu', penghasilan_disabilitas = '$penghasilan_disabilitas', penghasilan_orangtua = '$penghasilan_orangtua', wali = '$wali', pekerjaan_wali = '$pekerjaan_wali', bantuan_ygdibutuhkan = '$bantuan_ygdibutuhkan', ppks_tinggal_bersama = '$ppks_tinggal_bersama' where nik = '$nik' ");


  if ($result) {
    $log = mysqli_query($connect, "insert into log(log) values('Admin mengedit data mata kuliah dengan nik ".$nik."')");
    echo "<script>
    window.alert('berhasil mengedit data');
    window.location = 'basic-table.php';
    </script>";
  
  }else{
    echo '<script>
    window.alert("gagal");
    </script>';
  }
  // echo '<script>window.alert("hao")</script>';
  // echo $nim;
  // redirect(lgo);
} 
elseif (isset($_GET['nik'])) {
  $nik = $_GET['nik'];
  $result = mysqli_query($connect, "select * from data_disabilitas where nik = $nik");
  while($d = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $hasil[] = $d;
  }
}
elseif (isset($_GET['delete_nik'])) {
  $id = $_GET['delete_nik'];
  $result = mysqli_query($connect, "update dosen set deleted = '1' where nik = '$nik'");
  if ($result) {
    $log = mysqli_query($connect, "insert into log(log) values('Admin menghapus data mata kuliah dengan nik ".$nik."')");
  
    echo '<script>
    window.location = "basic-table.php";
    </script>'; 
    
  }else{
    echo '<script>
    window.alert("gagal");
    </script>';
  }
}


?>

<!-- Main content -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Disabilitas</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/logotnj.png">
    
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="../../index.html"><img src="../../assets/images/" alt="logo"></a>
                <a class="sidebar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo"></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Menu</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../index.html">
                        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
                        <span class="menu-title">Beranda</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                </li>
                <li class="nav-item menu-items active">
                    <a class="nav-link" href="../../pages/forms/basic_elements.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Form Pengajuan</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/tables/basic-table.php">
                        <span class="menu-icon">
                        <i class="mdi mdi-table-large"></i>
                    </span>
                        <span class="menu-title">Data Disabilitas</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo"></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">

                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">



                        <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <span class="count bg-danger"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                <h6 class="p-3 mb-0">Notifications</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-calendar text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Event today</p>
                                        <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Settings</p>
                                        <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-link-variant text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Launch Admin</p>
                                        <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">See all notifications</p>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle" src="../../assets/images/faces/face15.jpg" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Admin</p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profile</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Settings</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Log out</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">Advanced settings</p>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-format-line-spacing"></span>
      </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Form Pendaftaran </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"></a></li>
                                
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                        </div>
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Form Pendaftaran Masyarakat Disabilitas</h4>
                                    <p class="card-description">Isi data dibawah ini untuk mendaftarkan masyarakat disabilitas</p>
                                    <form action="" method="post" class="forms-sample">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_tanggal_lahir">Tempat/ Tanggal Lahir</label>
                                            <input type="text" class="form-control" id="tempat_tanggal_lahir" placeholder="Tempat,Tanggal Lahir" name="tempat_tanggal_lahir">
                                        </div>
                                        <div class="form-group">
                                            <label for="nik">NIK</label>
                                            <input type="text" class="form-control" id="nik" placeholder="NIK" name="nik">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                            <option>Laki-Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_disabilitas">Jenis Disabilitas</label>
                                            <select class="form-control" id="jenis_disabilitas" name="jenis_disabilitas">
                                            <option>Penyandang Disabilitas Fisik</option>
                                            <option>Penyandang Disabilitas Intelektual</option>
                                            <option>Penyandang Disabilitas Motorik</option>
                                            <option>Penyandang Disabilitas Sensorik</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="gambaran_disabilitas">Gambaran Disabilitas</label>
                                            <input type="text" class="form-control" id="" placeholder="gambaran_disabilitas" name="gambaran_disabilitas">
                                            <!-- <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Foto">
                                                <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                            </span>
                                            </div> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="sejak_kapan">Sejak Kapan</label>
                                            <input type="text" class="form-control" id="sejak_kapan" placeholder="DD/MM/YY" name="sejak_kapan">
                                        </div>
                                        <div class="form-group">
                                            <label for="penyebab_disabilitas">Penyebab Disabilitas</label>
                                            <input type="text" class="form-control" id="penyebab_disabilitas" placeholder="Penyebab" name="penyebab_disabilitas">
                                        </div>
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <input type="text" class="form-control" id="agama" placeholder="Agama" name="agama">
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan">Pendidikan</label>
                                            <input type="text" class="form-control" id="pendidikan" placeholder="Pendidikan" name="pendidikan">
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <input type="text" class="form-control" id="status" placeholder="Status" name="status">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">Alamat</label>
                                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Alamat" name="alamat">
                                        </div>
                                        <div class="form-group">
                                            <label for="program_pemerintah">Program Pemerintah</label>
                                            <input type="text" class="form-control" id="program_pemerintah" placeholder="Program Pemerintah" name="program_pemerintah">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hp">No HP</label>
                                            <input type="text" class="form-control" id="no_hp" placeholder="+62 8**********" name="no_hp">
                                        </div>
                                        <div class="form-group">
                                            <label for="pekerjaan_disabilitas">Pekerjaan Disabilitas</label>
                                            <input type="text" class="form-control" id="pekerjaan_disabilitas" placeholder="Pekerjaan Disabilitas" name="pekerjaan_disabilitas">
                                        </div>
                                        <div class="form-group">
                                            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                            <input type="text" class="form-control" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" name="pekerjaan_ayah">
                                        </div>
                                        <div class="form-group">
                                            <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                            <input type="text" class="form-control" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" name="pekerjaan_ibu">
                                        </div>
                                        <div class="form-group">
                                            <label for="penghasilan_disabilitas">Penghasilan Disabilitas</label>
                                            <input type="text" class="form-control" id="penghasilan_disabilitas" placeholder="RP." name="penghasilan_disabilitas">
                                        </div>
                                        <div class="form-group">
                                            <label for="penghasilan_orangtua">Penghasilan Ortu</label>
                                            <input type="text" class="form-control" id="penghasilan_orangtua" placeholder="RP." name="penghasilan_orangtua">
                                        </div>
                                        <div class="form-group">
                                            <label for="wali">Wali</label>
                                            <input type="text" class="form-control" id="wali" placeholder="Wali" name="wali">
                                        </div>
                                        <div class="form-group">
                                            <label for="pekerjaan_wali">Pekerjaan Wali</label>
                                            <input type="text" class="form-control" id="pekerjaan_wali" placeholder="Pekerjaan Wali" name="pekerjaan_wali">
                                        </div>
                                        <div class="form-group">
                                            <label for="bantuan_ygdibutuhkan">Bantuan yg Dibutuhkan</label>
                                            <input type="text" class="form-control" id="bantuan_ygdibutuhkan" placeholder="Bantuan yg Dibutuhkan" name="bantuan_ygdibutuhkan">
                                        </div>
                                        <div class="form-group">
                                            <label for="ppks_tinggal_bersama">PPKS Tinggal bersama</label>
                                            <input type="text" class="form-control" id="ppks_tinggal_bersama" placeholder="PPKS Tinggal Bersama" name="ppks_tinggal_bersama">
                                        </div>
                                        <button class="btn btn-dark">Cancel</button>
                                        <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 grid-margin stretch-card">

                        </div>


                        <div class="col-12 grid-margin">

                        </div>
                        <div class="col-md-6 grid-margin stretch-card">

                        </div>
                        <div class="col-md-6 grid-margin stretch-card">

                        </div>
                      </div>
                  </div>
                  <!-- content-wrapper ends -->
                  <!-- partial:../../partials/_footer.html -->
                  <footer class="footer">
                  <div class="d-sm-flex justify-content-center justify-content-sm-between">
                  <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © SistemDisabilitas 2022</span>
                  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="" target="_blank"></a> </span>
                  </div>
                  </footer>
                  <!-- partial -->
                  </div>
                  <!-- main-panel ends -->
                  </div>
                  <!-- page-body-wrapper ends -->
                  </div>
                  <!-- container-scroller -->
                  <!-- plugins:js -->
                  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
                  <!-- endinject -->
                  <!-- Plugin js for this page -->
                  <script src="../../assets/vendors/select2/select2.min.js"></script>
                  <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
                  <!-- End plugin js for this page -->
                  <!-- inject:js -->
                  <script src="../../assets/js/off-canvas.js"></script>
                  <script src="../../assets/js/hoverable-collapse.js"></script>
                  <script src="../../assets/js/misc.js"></script>
                  <script src="../../assets/js/settings.js"></script>
                  <script src="../../assets/js/todolist.js"></script>
                  <!-- endinject -->
                  <!-- Custom js for this page -->
                  <script src="../../assets/js/file-upload.js"></script>
                  <script src="../../assets/js/typeahead.js"></script>
                  <script src="../../assets/js/select2.js"></script>
                  <!-- End custom js for this page -->


</body></html>
  <!-- /.box -->

  