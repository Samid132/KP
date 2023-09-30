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
        $id_absen = $_POST['id_absen']; 
        $jam_pulang = $_POST['jam_pulang'];
        $status = $_POST['status'];
        $ket_pulang = $_POST['ket_pulang'];
        
     

	// checking empty fields
    if(empty($jam_pulang) ||
    empty($status) ||
    empty($ket_pulang)) 
    {

        
        echo '<script>
   swal({
    title: "Maaf!",
    text: "Data Yang Di Input  Tidak Lengkap",
    icon: "error",
    button: "oke!",
  }).then(function() {
    window.location = "./../../user/absen";
  });
            </script>';
        
    } 
    else 
    {	
		//updating the table
	    $result = mysqli_query($mysqli, "UPDATE absen SET jam_pulang='$jam_pulang', 
        status='$status', ket_pulang='$ket_pulang' WHERE id_absen=$id_absen");
        
        echo '<script>
        swal({
         title: "Good job!",
         text: "Berhasil Absen Pulang. ",
         icon: "success",
         button: "oke!",
       }).then(function() {
         window.location = "./../../user/absen";
       });
                 </script>';
	}
}
?>
</body>
</html>