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
        $id_user = $_POST['id_user']; 
        $id_jadwal = $_POST['id_jadwal'];
      
        
     

	// checking empty fields
    if(empty($id_jadwal)) 
    {

        echo '<script>
   swal({
    title: "Maaf!",
    text: "Data Yang Di Input  Tidak Lengkap",
    icon: "error",
    button: "oke!",
  }).then(function() {
    window.location = "./../../guru/user";
  });
            </script>';
        
    } 
    else 
    {	
		//updating the table
	    $result = mysqli_query($mysqli, "UPDATE table_user SET id_jadwal='$id_jadwal' WHERE id_user=$id_user");
        
        echo '<script>
  swal({
   title: "Good job!",
   text: "Jadwal user, Berhasil Di Ubah. ",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "./../../guru/user";
 });
           </script>';
	}
}
?>
</body>
</html>