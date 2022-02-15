<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "disabilitas";

$connect = mysqli_connect($host, $user, $pass, $db);

if ($connect) {
	// echo "Terhubung";
	return $connect;
}else{
	echo "Gagal";
}

// if ($connect) {
// 	$buka = mysqli_select_db($connect,$db);
// 	echo "Database dapat terhubung";
// 	if (!$buka) {
// 		echo "Database tidak dapat terhubung";
// 	}
// }else{
// 	echo "Mysql tidak terhubung";
// }

?>
