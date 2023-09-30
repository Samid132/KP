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
        $id_mapel = $_POST['id_mapel']; 
        $nama_mapel = $_POST['nama_mapel'];
       
        
     

	// checking empty fields
    if(empty($nama_mapel)) 
    {

        echo '<script>
   swal({
    title: "Maaf!",
    text: "Data Yang Di Input  Tidak Lengkap",
    icon: "error",
    button: "oke!",
  }).then(function() {
    window.location = "./../../guru/mapel";
  });
            </script>';
        
    } 
    else 
    {	
		//updating the table
	    $result = mysqli_query($mysqli, "UPDATE mapel SET  
        nama_mapel='$nama_mapel'WHERE id_mapel=$id_mapel");
        
        echo '<script>
  swal({
   title: "Good job!",
   text: "mapel, Berhasil Di Ubah. ",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "./../../guru/mapel";
 });
           </script>';
	}
}
?>
</body>
</html>