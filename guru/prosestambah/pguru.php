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
    $nama    =  e($_POST['nama']);
    $username    =  e($_POST['username']);
    $password    =  e($_POST['password']);
    $hak_akses    =  e($_POST['hak_akses']);
    $id_mapel    =  e($_POST['id_mapel']);

    if(empty($nama) ||
     empty($username) || 
     empty($password) ||
     empty($hak_akses)|| 
     empty($id_mapel)) {
				
      echo '<script>
   swal({
    title: "Maaf!",
    text: "Data Yang Di Input  Tidak Lengkap",
    icon: "error",
    button: "oke!",
  }).then(function() {
    window.location = "guru";
  });
            </script>';
    } else {
        

    // register user if there are no errors in the form
    if (count($errors) == 0) {

        if (isset($_POST['nama'])) {
            $nama = e($_POST['nama']);
            $query = "INSERT INTO table_users (nama, 
            username, 
            password,
            hak_akses,
            id_mapel) 
                      VALUES('$nama', 
                      '$username', 
                      '$password',  
                      '$hak_akses', 
                       '$id_mapel')";
            mysqli_query($conn, $query);
            echo '<script>
  swal({
   title: "Good job!",
   text: "guru, Berhasil Di Tambah ",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "guru";
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