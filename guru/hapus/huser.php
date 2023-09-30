<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>AdminLTE 3 | Hapus User/Siswa </title>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<?php
//including the database koneksi file
include_once("./../../views/config.php");

//getting id of the data from url
$id_user = $_GET['id_user'];

//deleting the row from table
$result=mysqli_query($mysqli, "DELETE FROM table_user WHERE id_user=$id_user");
$result2=mysqli_query($mysqli, "DELETE FROM izin WHERE id_user=$id_user");
$result3=mysqli_query($mysqli, "DELETE FROM absen WHERE id_user=$id_user");

//redirecting to the display page (view.php in our case)
echo '<script>
  swal({
   title: "Good job!",
   text: "Siswa Berhasil DI Hapus",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "./../user";
 });
           </script>';
?>
</body>
</html>