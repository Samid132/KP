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
        $jam_lembur = $_POST['jam_lembur'];
        $status = $_POST['status'];
        $ket_lembur = $_POST['ket_lembur'];
        
     

	// checking empty fields
    if(empty($jam_lembur) ||
    empty($status) ||
    empty($ket_lembur)) 
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
	    $result = mysqli_query($mysqli, "UPDATE absen SET jam_lembur='$jam_lembur', 
        status='$status', ket_lembur='$ket_lembur' WHERE id_absen=$id_absen");
        
        echo '<script>
        swal({
         title: "Good job!",
         text: "Berhasil Absen Lembur. ",
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