<?php
    # LOAD TEMPLATE UTAMA


# INI ADALAH FILE UNTUK KONFERSI HALAMAN YANG AKAN TAMPIL
$hlm='';
if (isset($_GET['hal'])) {
	$hlm=$_GET['hal'];
}
$current_pages=$hlm;
require '../../koneksi.php';

switch ($hlm) {
	case 'forms':
	$hlm="include 'pages/forms/basic_elements.php';";
	break;

	break;
	case 'jadwal':
	$hlm="include 'page/user/jadwal.php';";
	break;
	
	break;
	case 'frontend':
	$hlm="include 'page/user/frontend.php';";
	break;

	break;
	case 'presensi':
	$hlm="include 'page/user/presensi.php';";
	break;

	


}

$content=$hlm;
require './koneksi.php';
// require_once 'templates/page.php';
require_once 'templates/user_tem.php';



// echo "USER";
// // session_start();
// echo $_SESSION['id'];
// echo $_SESSION['kelas'];
//     // require_once 'template/partial'

?>