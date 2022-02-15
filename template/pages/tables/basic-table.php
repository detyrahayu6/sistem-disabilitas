<?php
    include ("../../koneksi.php");
    $result = mysqli_query($connect, "SELECT * FROM data_disabilitas");

    // if (mysqli_num_rows($result) > 0) {
    //     while($row = mysqli_fetch_assoc($result)) {
    //         echo "Nama : " . $row["nik"] . "<br>";
    //     }
    // } else {
    //     echo "gagal";
    // }


?> 

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
                    <span class="nav-link">Navigation</span>
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

                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/forms/basic_elements.php">
                        <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
            </span>
                        <span class="menu-title">Form Pengajuan</span>
                    </a>
                </li>
                <li class="nav-item menu-items active">
                    <a class="nav-link" href="../../pages/tables/basic-table.php">
                        <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
            </span>
                        <span class="menu-title">Data Disabilitas</span>
                    </a>
                </li>
                <li class="nav-item menu-items">

                </li>
                <li class="nav-item menu-items">

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
                                <input type="text" class="form-control" placeholder="Search products">
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
                        <h3 class="page-title"> Daftar Data Disabilitas </h3>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Table Data</h4>
                                    <a class="btn btn-primary mr-3" href="../../pages/forms/basic_elements.php">Tambah Data</a>
                                    <p class="card-description">  <code></code>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-dark">
                                            <thead>
                                                <tr>
                                                    <th> Nama </th>
                                                    <th> Tempat/ Tanggal Lahir </th>
                                                    <th> NIK </th>
                                                    <th> Jenis Kelamin </th>
                                                    <th> Jenis Disabilitas </th>
                                                    <th> Gambaran Disabilitas </th>
                                                    <th> Sejak Kapan </th>
                                                    <th> Penyebab Disabilitas </th>
                                                    <th> Agama </th>
                                                    <th> Pendidikan </th>
                                                    <th> Status </th>
                                                    <th> Alamat </th>
                                                    <th> Program Pemerintah </th>
                                                    <th> No.HP </th>
                                                    <th> Pekerjaan Disabilitas </th>
                                                    <th> Pekerjaan Ayah </th>
                                                    <th> Pekerjaan Ibu </th>
                                                    <th> Penghasilan Disabilitas </th>
                                                    <th> Penghasilan Orang Tua </th>
                                                    <th> Wali </th>
                                                    <th> Pekerjaan Wali </th>
                                                    <th> Bantuan yg Dibutuhkan </th>
                                                    <th> PPKS Tinggal bersama</th>
                                                    <th> Aksi </th>
                                                </tr>
                                                <?php if (mysqli_num_rows($result) > 0) {
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['nama']; ?></td>
                                                    <td><?php echo $row['tempat_tanggal_lahir']; ?></td>
                                                    <td><?php echo $row['nik']; ?></td>
                                                    <td><?php echo $row['jenis_kelamin']; ?></td>
                                                    <td><?php echo $row['jenis_disabilitas']; ?></td>
                                                    <td><?php echo $row['gambaran_disabilitas']; ?></td>
                                                    <td><?php echo $row['sejak_kapan']; ?></td>
                                                    <td><?php echo $row['penyebab_disabilitas']; ?></td>
                                                    <td><?php echo $row['agama']; ?></td>
                                                    <td><?php echo $row['pendidikan']; ?></td>
                                                    <td><?php echo $row['status']; ?></td>
                                                    <td><?php echo $row['alamat']; ?></td>
                                                    <td><?php echo $row['program_pemerintah']; ?></td>
                                                    <td><?php echo $row['no_hp']; ?></td>
                                                    <td><?php echo $row['pekerjaan_disabilitas']; ?></td>
                                                    <td><?php echo $row['pekerjaan_ayah']; ?></td>
                                                    <td><?php echo $row['pekerjaan_ibu']; ?></td>
                                                    <td><?php echo $row['penghasilan_disabilitas']; ?></td>
                                                    <td><?php echo $row['penghasilan_orangtua']; ?></td>
                                                    <td><?php echo $row['wali']; ?></td>
                                                    <td><?php echo $row['pekerjaan_wali']; ?></td>
                                                    <td><?php echo $row['bantuan_ygdibutuhkan']; ?></td>
                                                    <td><?php echo $row['ppks_tinggal_bersama']; ?></td>
                                                    <td style="text-align: center;">
                                                <a class='btn btn-info btn-xs' href="../../pages/tables/edit-table.php<?php echo $row['nik'] ?>" class=""> <i class="mdi mdi-table-edit icon-sm"></i></a>
                                                


                                                <a href="#modalDelete" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action', '?hal=edit_dosen&&delete_id=<?php echo $row['nik'] ?>')" class='btn btn-danger btn-xs'> 
                                                    <i class="mdi mdi-delete icon-sm"></i>
                                                </a>
                                                </td>
                                                </tr>
                                                <?php
                                                }
                                            } else {
                                                echo "Maaf Database error, silahkan hubungi pihak Dinas Sosial";
                                            } ?>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->

</body>

</html>