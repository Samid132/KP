<?php 

// connect to database
include_once("./../views/config.php");

$errors   = array();
$success   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['Submit'])) {
    Submit();
}

// REGISTER USER
function Submit(){
    global $conn, $errors;
    global $conn, $success;
    // receive all input values from the form
    $id_user    =  e($_POST['id_user']);
    $id_jadwal    =  e($_POST['id_jadwal']);
    $jam_masuk    =  e($_POST['jam_masuk']);
    $status    =  e($_POST['status']);
    $tanggal    =  e($_POST['tanggal']);
    $ket_masuk    =  e($_POST['ket_masuk']);

    if(empty($id_user) ||
     empty($id_jadwal) || 
     empty($jam_masuk) ||
     empty($status) ||
     empty($tanggal) ||
     empty($ket_masuk)) {
				
      echo '<script>
   swal({
    title: "Maaf!",
    text: "Akun Anda Belum Di Input Jadwal",
    icon: "error",
    button: "oke!",
  }).then(function() {
    window.location = "./absen";
  });
            </script>';
    } else {
      
          $hari_ini = date("Y-m-d");
          $cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM absen WHERE  id_user= '$id_user' AND tanggal = '$hari_ini'  "));
          if ($cek > 0){
              echo '<script>
              swal({
              title: "Toneng!!",
              text: "Anda Sudah Absen.",
              icon: "error",
              button: "oke!",
              }).then(function() {
              window.location = "";
              });
                     </script>';
        
          }else{

    // register user if there are no errors in the form
    if (count($errors) == 0) {

        if (isset($_POST['id_user'])) {
            $id_user = e($_POST['id_user']);
            $query = "INSERT INTO absen (id_user, 
            id_jadwal, 
            jam_masuk,
            status,
            tanggal,
            ket_masuk) 
                      VALUES('$id_user', 
                      '$id_jadwal', 
                      '$jam_masuk',  
                      '$status',  
                      '$tanggal', 
                      '$ket_masuk')";
            mysqli_query($conn, $query);
            echo '<script>
  swal({
   title: "Good job!",
   text: "Absen Masuk, Berhasil ",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "absen";
 });
           </script>';
            
            
        }
      }
    }
  }
}

// return user array from their id
function getUserById($id){
    global $conn;

}
// LOGIN USER

// escape string
function e($val){
    global $conn;
    return mysqli_real_escape_string($conn, trim($val));
}

?>