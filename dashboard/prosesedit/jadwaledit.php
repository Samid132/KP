<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>AdminLTE 3  </title>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<?php
// including the database koneksi file
include_once("./../../views/config.php");

if(isset($_POST['update']))
{	
        $id_jadwal = $_POST['id_jadwal']; 
        $code = $_POST['code'];
        $nama_jadwal = $_POST['nama_jadwal'];
        $jam_masuk = $_POST['jam_masuk'];
        $jam_pulang = $_POST['jam_pulang'];
        $jam_lembur = $_POST['jam_lembur'];
        
     

	// checking empty fields
    if(empty($code) ||
    empty($nama_jadwal) ||
    empty($jam_masuk) ||
    empty($jam_pulang) ||
    empty($jam_lembur)) 
    {

        echo '<script>
   swal({
    title: "Maaf!",
    text: "Data Yang Di Input  Tidak Lengkap",
    icon: "error",
    button: "oke!",
  }).then(function() {
    window.location = "./../../dashboard/jadwal";
  });
            </script>';
        
    } 
    else 
    {	
		//updating the table
	    $result = mysqli_query($mysqli, "UPDATE jadwal SET code='$code', 
        nama_jadwal='$nama_jadwal', jam_masuk='$jam_masuk', jam_pulang='$jam_pulang', jam_lembur='$jam_lembur' WHERE id_jadwal=$id_jadwal");
        
        echo '<script>
  swal({
   title: "Good job!",
   text: "Jadwal, Berhasil Di Ubah. ",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "./../../dashboard/jadwal";
 });
           </script>';
	}
}
?>
</body>
</html>