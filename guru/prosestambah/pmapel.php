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
    $nama_mapel    =  e($_POST['nama_mapel']);
    

    if(empty($nama_mapel)) {
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

        if (isset($_POST['nama_mapel'])) {
            $nama_mapel = e($_POST['nama_mapel']);
            $query = "INSERT INTO mapel (nama_mapel)
            -- jam_lembur) 
                      VALUES('$nama_mapel')";  
                      // '$jam_lembur')";
            mysqli_query($conn, $query);
            echo '<script>
  swal({
   title: "Good job!",
   text: "mapel, Berhasil Di Tambah ",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "mapel";
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