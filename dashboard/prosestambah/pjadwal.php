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
    $code    =  e($_POST['code']);
    $nama_jadwal    =  e($_POST['nama_jadwal']);
    $jam_masuk    =  e($_POST['jam_masuk']);
    $jam_pulang    =  e($_POST['jam_pulang']);
    // $jam_lembur    =  e($_POST['jam_lembur']);

    if(empty($code) ||
     empty($nama_jadwal) || 
     empty($jam_masuk) ||
     empty($jam_pulang)) {
    //  empty($jam_lembur)) {
				
      echo '<script>
   swal({
    title: "Maaf!",
    text: "Data Yang Di Input  Tidak Lengkap",
    icon: "error",
    button: "oke!",
  }).then(function() {
    window.location = "./";
  });
            </script>';
    } else {
        

    // register user if there are no errors in the form
    if (count($errors) == 0) {

        if (isset($_POST['code'])) {
            $code = e($_POST['code']);
            $query = "INSERT INTO jadwal (code, 
            nama_jadwal, 
            jam_masuk,
            jam_pulang)
            -- jam_lembur) 
                      VALUES('$code', 
                      '$nama_jadwal', 
                      '$jam_masuk',  
                      '$jam_pulang')";  
                      // '$jam_lembur')";
            mysqli_query($conn, $query);
            echo '<script>
  swal({
   title: "Good job!",
   text: "Jadwal, Berhasil Di Tambah ",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "jadwal";
 });
           </script>';
            
            
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