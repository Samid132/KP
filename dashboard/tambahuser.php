<?php
session_start();

if( !isset($_SESSION['saya_admin']) )
{
	header('location:./../'.$_SESSION['akses']);
	exit();
}

$id = ( isset($_SESSION['id']) ) ? $_SESSION['id'] : '';
$nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';
$email = ( isset($_SESSION['email']) ) ? $_SESSION['email'] : '';
$userfile_user = ( isset($_SESSION['userfile_user']) ) ? $_SESSION['userfile_user'] : '';
$no = ( isset($_SESSION['no']) ) ? $_SESSION['no'] : '';
$alamat = ( isset($_SESSION['alamat']) ) ? $_SESSION['alamat'] : '';
$keterangan = ( isset($_SESSION['keterangan']) ) ? $_SESSION['keterangan'] : '';
$hak_akses = ( isset($_SESSION['hak_akses']) ) ? $_SESSION['hak_akses'] : '';
$username = ( isset($_SESSION['username']) ) ? $_SESSION['username'] : '';
$nama2 = ( isset($_SESSION['nama']) ) ? $_SESSION['nama'] : '';
?>
<?php
include "./../views/config.php"
?>
<!doctype html>
<html lang="en">
<?php
include "header/atas.php"
?>

<body>

    <!-- Page Container -->
    <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
    <div id="page-container"
        class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-modern main-content-boxed">
        <!-- Side Overlay-->


        <!-- Sidebar -->
        <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
        <nav id="sidebar">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow px-15">
                    <!-- Mini Mode -->
                    <div class="content-header-section sidebar-mini-visible-b">
                        <!-- Logo -->
                        <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                            <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                        </span>
                        <!-- END Logo -->
                    </div>
                    <!-- END Mini Mode -->

                    <!-- Normal Mode -->
                    <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r"
                            data-toggle="layout" data-action="sidebar_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Sidebar -->

                        <!-- Logo -->
                        <div class="content-header-item">
                            <a class="link-effect font-w700" href="index.html">
                                <i class="si si-fire text-primary"></i>
                                <span class="font-size-12 text-dual-primary-dark">SMPN 38</span><span
                                    class="font-size-12 text-primary"> KOTA BEKASI</span>
                        </div>
                        <!-- END Logo -->
                    </div>
                    <!-- END Normal Mode -->
                </div>
                <!-- END Side Header -->

                <!-- Sidebar Scrolling -->
                <div class="js-sidebar-scroll">
                    <!-- Side User -->
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <!-- Visible only in mini mode -->
                        <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="../assets/media/avatars/avatar15.jpg" alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="./">
                                <img class="img-avatar" src="<?php echo $userfile_user; ?>"
                                    style="width:200px;height:80px;" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase"
                                        href="#"><?php echo $nama2; ?></a>
                                </li>

                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark" href="logout">
                                        <i class="si si-logout"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Visible only in normal mode -->
                    </div>
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <?php
include "header/header.php"
?>
                    <!-- END Side Navigation -->
                </div>
                <!-- END Sidebar Scrolling -->
            </div>
            <!-- Sidebar Content -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="content-header-section">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fa fa-navicon"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Open Search Section -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <!-- PERBATASAN -->
                    <!-- END Layout Options -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="content-header-section">
                    <!-- User Dropdown -->
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user d-sm-none"></i>
                            <span class="d-none d-sm-inline-block"><?php echo $nama2; ?></span>
                            <i class="fa fa-angle-down ml-5"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right min-width-200"
                            aria-labelledby="page-header-user-dropdown">
                            <!--        <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                                <a class="dropdown-item" href="./">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>    -->

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout">
                                <i class="si si-logout mr-5"></i> Sign Out
                            </a>
                        </div>
                    </div>
                    <!-- END User Dropdown -->


                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->
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
    $idsr_nama    =  e($_POST['idsr_nama']);
    $idsr_nis    =  e($_POST['idsr_nis']);
    $idsr_jeniskelamin    =  e($_POST['idsr_jeniskelamin']);
    $idsr_tempatlahir    =  e($_POST['idsr_tempatlahir']);
    $idsr_tanggallahir    =  e($_POST['idsr_tanggallahir']);
    $idsr_statuskeaktifan    =  e($_POST['idsr_statuskeaktifan']);
    $idsr_provinsi    =  e($_POST['idsr_provinsi']);
    $idsr_kota    =  e($_POST['idsr_kota']);
    $idsr_alamat    =  e($_POST['idsr_alamat']);
  
    $tanggal_create    =  e($_POST['tanggal_create']);
    $username    =  e($_POST['username']);
    $password    =  e($_POST['password']);
    $role    =  e($_POST['role']);
    $hak_akses    =  e($_POST['hak_akses']);

    // foto
    $foto = $_FILES['foto']['name'];    
    $tmp = $_FILES['foto']['tmp_name']; 
    // $direktori   = "foto/".$_FILES['foto']['name'];
    $acak           = mt_rand(1,999999);
     $idsr_foto = "foto_user/".$acak.$foto;
     $direktori   = "../foto_user/".$idsr_foto;
  
    move_uploaded_file($_FILES['foto']['tmp_name'], "../foto_user/".$acak.$_FILES['foto']['name']);

    if(empty($idsr_nama) ||
     empty($idsr_nis) || 
     empty($idsr_jeniskelamin) || 
     empty($idsr_tempatlahir) ||
     empty($idsr_tanggallahir) ||
     empty($idsr_statuskeaktifan) ||
     empty($idsr_provinsi) ||
     empty($idsr_kota) ||
     empty($idsr_alamat) ||
     empty($tanggal_create) || 
     empty($username) || 
     empty($password) || 
     empty($idsr_foto) || 
     empty($role) ||
     empty($hak_akses)) {
				
      echo '<script>
   swal({
    title: "Maaf!",
    text: "Data Yang Di Input  Tidak Lengkap",
    icon: "error",
    button: "oke!",
  }).then(function() {
    window.location = "";
  });
            </script>';
    } else {	

    // register user if there are no errors in the form
    if (count($errors) == 0) {

        if (isset($_POST['idsr_nama'])) {
            $idsr_nama = e($_POST['idsr_nama']);
            $query = "INSERT INTO table_user (idsr_nama, 
            idsr_nis, 
            idsr_jeniskelamin, 
            idsr_tempatlahir,
            idsr_tanggallahir,
            idsr_statuskeaktifan,
            idsr_provinsi,
            idsr_kota,
            idsr_alamat,
            tanggal_create,
            username,
            idsr_foto,
            password,
            role,
            hak_akses) 
                      VALUES('$idsr_nama', 
                      '$idsr_nis', 
                      '$idsr_jeniskelamin', 
                      '$idsr_tempatlahir', 
                      '$idsr_tanggallahir',
                      '$idsr_statuskeaktifan',
                      '$idsr_provinsi',
                      '$idsr_kota',
                      '$idsr_alamat',
                      '$tanggal_create',
                      '$username',
                      '$idsr_foto',
                      '$password',
                      '$role',
                      '$hak_akses')";
            mysqli_query($conn, $query);
            echo '<script>
  swal({
   title: "Good job!",
   text: "Data user, Berhasil DI Tambah",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "./user";
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
            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header">
                <div class="content-header content-header-fullrow">
                    <form action="be_pages_generic_search.html" method="POST" enctype='multipart/form-data'>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- Close Search Section -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-secondary" data-toggle="layout"
                                    data-action="header_search_off">
                                    <i class="fa fa-times"></i>
                                </button>
                                <!-- END Close Search Section -->
                            </div>
                            <input type="text" class="form-control" placeholder="Search or hit ESC.."
                                id="page-header-search-input" name="page-header-search-input">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-primary">
                <div class="content-header content-header-fullrow text-center">
                    <div class="content-header-item">
                        <i class="fa fa-sun-o fa-spin text-white"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="content">
                <!-- Bootstrap Forms Validation -->
                <h2 class="content-heading bg-body-dark text-center">Tambah Data user</h2>
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Validasi</h3>
                        <div class="block-options">
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="row justify-content-center py-20">
                            <div class="col-md-6">
                                <!-- Validation Wizard Material -->
                                <div class="js-wizard-validation-material block">
                                    <!-- Step Tabs -->
                                    <ul class="nav nav-tabs nav-tabs-alt nav-fill" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#wizard-validation-material-step1">1.
                                                Informasi Data</a>
                                        </li>

                                    </ul>
                                    <!-- END Step Tabs -->

                                    <!-- Form -->
                                    <form class="js-wizard-validation-material-form" action="tambahk" method="post"
                                        enctype="multipart/form-data">
                                        <!-- Steps Content -->
                                        <div class="block-content block-content-full tab-content"
                                            style="min-height: 267px;">
                                            <!-- Step 1 -->
                                            <div class="tab-pane active" id="wizard-validation-material-step1"
                                                role="tabpanel">
                                                <div class="form-group">
                                                    <div class="form-material floating">
                                                        <input class="form-control" type="text"
                                                            id="wizard-validation-material-firstname" name="idsr_nama">
                                                        <label for="wizard-validation-material-firstname">Nama
                                                            Lengkap</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material floating">
                                                        <input class="form-control" type="text"
                                                            id="wizard-validation-material-firstname" name="idsr_nis">
                                                        <label for="wizard-validation-material-firstname">No NIS
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-material floating">
                                                        <select class="form-control"
                                                            id="wizard-validation-material-skills"
                                                            name="idsr_jeniskelamin" size="1">
                                                            <option></option>
                                                            <!-- Empty value for demostrating material select box -->
                                                            <option value="Laki-Laki">Laki-Laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                        <label for="wizard-validation-material-skills">Jenis
                                                            Kelamin</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material floating">
                                                        <!-- <input class="form-control" type="text"
                                                            id="wizard-validation-material-firstname"
                                                            name="idsr_tempatlahir"> -->

                                                            <select class="js-select2 form-control" id="5"
                                                            style="width: 100%;" name="idsr_tempatlahir">
                                                            <option></option>
                                                            <?php
                                                        //selecting data associated with this particular id
                                                    $result = mysqli_query($mysqli, "SELECT * FROM table_provinsi");
                                                    while($res = mysqli_fetch_array($result))
                                                {
                                                    ?>
                                                            <option value="<?php echo $res['provinsi_nama']?>">
                                                                <?php echo $res['provinsi_nama'] ?></option>
                                                            <?php
                                                 }
                                                ?>
                                                        </select>
                                                        <label for="wizard-validation-material-firstname">Tempat Lahir
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material floating">
                                                        <input type="text" class="js-flatpickr form-control"
                                                            id="example-material-flatpickr-custom"
                                                            name="idsr_tanggallahir" data-allow-input="true"
                                                            data-date-format="d-m-Y">
                                                        <label for="wizard-validation-material-firstname">Tanggal Lahir
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material floating">
                                                        <select class="form-control"
                                                            id="wizard-validation-material-skills"
                                                            name="idsr_statuskeaktifan" size="1">
                                                            <option></option>
                                                            <!-- Empty value for demostrating material select box -->
                                                            <option value="Masih Aktif Di Sekolah">Masih Aktif Di
                                                                Sekolah</option>
                                                            <option value="Sudah Tidak Aktif Di Sekolah">Sudah Tidak
                                                                Aktif Di Sekolah</option>
                                                        </select>
                                                        <label for="wizard-validation-material-skills">Status
                                                            KeAktifan</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-material floating">
                                                        <select class="js-select2 form-control" id="3"
                                                            style="width: 100%;" name="idsr_provinsi">
                                                            <option></option>
                                                            <?php
                                                        //selecting data associated with this particular id
                                                    $result = mysqli_query($mysqli, "SELECT * FROM table_provinsi");
                                                    while($res = mysqli_fetch_array($result))
                                                {
                                                    ?>
                                                            <option value="<?php echo $res['provinsi_nama']?>">
                                                                <?php echo $res['provinsi_nama'] ?></option>
                                                            <?php
                                                 }
                                                ?>
                                                        </select>
                                                        <label for="wizard-validation-material-firstname">Provinsi
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material floating">
                                                        <select class="js-select2 form-control" id="4"
                                                            style="width: 100%;" name="idsr_kota">
                                                            <option></option>
                                                            <?php
                                                        //selecting data associated with this particular id
                  $kota = mysqli_query($koneksi, "SELECT * FROM table_kota WHERE kota_id ;");
                  while ($k = mysqli_fetch_array($kota)) {
                    $provinsi_id = $k['provinsi_id'];
                    $provinsi = mysqli_query($koneksi, "SELECT provinsi_nama FROM table_provinsi WHERE provinsi_id = $provinsi_id");
                    $p = mysqli_fetch_assoc($provinsi); 

                                                   
                                            ?>
                                                            <option value="<?php echo $k['kota_nama']?>">
                                                                <?php echo $p['provinsi_nama'] ?>,<?php echo $k['kota_nama'] ?>
                                                            </option>
                                                            <?php

                                                }
                                            ?>
                                                        </select>
                                                        <label for="wizard-validation-material-firstname">Kota </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material floating">
                                                        <textarea class="form-control"
                                                            id="wizard-validation-material-bio" name="idsr_alamat"
                                                            rows="3"></textarea>
                                                        <label for="wizard-validation-material-firstname">Alamat
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material floating">
                                                        <div class="custom-file">
                                                            <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                                            <input type="file" class="custom-file-input" id="foto"
                                                                name="foto" data-toggle="custom-file-input">
                                                            <label class="custom-file-label"
                                                                for="profile-settings-avatar">Tambah Foto</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material floating">
                                                        <input class="form-control" type="text"
                                                            id="wizard-validation-material-firstname" name="username">
                                                        <label for="wizard-validation-material-firstname"> Username
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material floating">
                                                        <input class="form-control" type="text"
                                                            id="wizard-validation-material-firstname" name="password">
                                                        <label for="wizard-validation-material-firstname">Password
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material floating">
                                                        <input class="form-control" type="hidden"
                                                            id="wizard-validation-material-firstname" name="hak_akses"
                                                            value="user">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material floating">
                                                        <select class="form-control"
                                                            id="wizard-validation-material-skills" name="role" size="1">
                                                            <option></option>
                                                            <!-- Empty value for demostrating material select box -->
                                                            <option value="Guru">Guru</option>
                                                            <option value="Siswa">Siswa</option>
                                                        </select>
                                                        <label for="wizard-validation-material-skills">Role</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material floating">
                                                        <input class="form-control" type="text"
                                                            id="wizard-validation-material-firstname"
                                                            name="tanggal_create" readonly
                                                            value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(' Y-m-d : H:i:s');?>">
                                                        <label for="wizard-validation-material-firstname">Tanggal
                                                            created </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="css-control css-control-primary css-switch"
                                                        for="wizard-validation-material-terms">
                                                        <input type="checkbox" class="css-control-input"
                                                            id="wizard-validation-material-terms"
                                                            name="wizard-validation-material-terms">
                                                        <span class="css-control-indicator"></span> Agree with the terms
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- END Step 1 -->


                                            <!-- Steps Navigation -->
                                            <div class="block-content block-content-sm block-content-full">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <button class="btn ">

                                                        </button>
                                                    </div>
                                                    <div class="col-6 text-right">

                                                        <button type="submit" class="btn btn-alt-primary d-none"
                                                            data-wizard="finish" name="Submit" value="add">
                                                            <i class="fa fa-check mr-5"></i> Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Steps Navigation -->
                                        </div>
                                        <!-- END Step 3 -->
                                </div>
                                <!-- END Steps Content -->


                                </form>
                                <!-- END Form -->
                            </div>
                            <!-- END Validation Wizard 2 -->
                        </div>
                    </div>

                </div>
            </div>
            <!-- Bootstrap Forms Validation -->


    </div>
    <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <?php
include "footer/footer.php"
?>
    <!-- END Footer -->
    </div>
    <!-- END Page Container -->
    <!-- Terms Modal -->
    <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popin">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Terms &amp; Conditions</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <h4 class="mb-10">1. General</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel
                            imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris
                            tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        <h4 class="mb-10">2. Account</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel
                            imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris
                            tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        <h4 class="mb-10">3. Service</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel
                            imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris
                            tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        <h4 class="mb-10">4. Payments</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel
                            imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris
                            tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-alt-primary" data-dismiss="modal">
                        <i class="fa fa-check"></i> Ok
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Terms Modal -->
    <!-- Onboarding Modal functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
    <!-- <div class="modal fade" id="modal-onboarding" tabindex="-1" role="dialog" aria-labelledby="modal-onboarding" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-popout" role="document">
                <div class="modal-content rounded">
                    <div class="block block-rounded block-transparent mb-0 bg-pattern" style="background-image: url('assets/media/various/bg-pattern-inverse.png');">
                        <div class="block-header justify-content-end">
                            <div class="block-options">
                                <a class="font-w600 text-danger" href="#" data-dismiss="modal" aria-label="Close">
                                    Skip Intro
                                </a>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="js-slider slick-dotted-inner" data-dots="true" data-arrows="false" data-infinite="false">
                                <div class="pb-50">
                                    <div class="row justify-content-center text-center">
                                        <div class="col-md-10 col-lg-8">
                                            <i class="si si-fire fa-4x text-primary"></i>
                                            <h3 class="font-size-h2 font-w300 mt-20">Welcome to Codebase!</h3>
                                            <p class="text-muted">
                                                This is a modal you can show to your users when they first sign in to their dashboard. It is a great place to welcome and introduce them to your application and its functionality.
                                            </p>
                                            <button type="button" class="btn btn-sm btn-hero btn-noborder btn-primary mb-10 mx-5" onclick="jQuery('.js-slider').slick('slickGoTo', 1);">
                                                Key features <i class="fa fa-arrow-right ml-5"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide pb-50">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 col-lg-8">
                                            <h3 class="font-size-h2 font-w300 mb-5">Backup</h3>
                                            <p class="text-muted">
                                                Backups are taken with every new change to ensure complete piece of mind. They are kept safe for immediate restores.
                                            </p>
                                            <h3 class="font-size-h2 font-w300 mb-5">Invoices</h3>
                                            <p class="text-muted">
                                                They are sent automatically to your clients with the completion of every project, so you don't have to worry about getting paid.
                                            </p>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-sm btn-hero btn-noborder btn-primary mb-10 mx-5" onclick="jQuery('.js-slider').slick('slickGoTo', 2);">
                                                    Complete Profile <i class="fa fa-arrow-right ml-5"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide pb-50">
                                    <div class="row justify-content-center text-center">
                                        <div class="col-md-10 col-lg-8">
                                            <i class="si si-note fa-4x text-primary"></i>
                                            <h3 class="font-size-h2 font-w300 mt-20">Finally, let us know your name</h3>
                                            <form class="push">
                                                <input type="text" class="form-control form-control-lg py-20 border-2x" id="onboard-first-name" name="onboard-first-name" placeholder="Enter your first name..">
                                            </form>
                                            <button type="button" class="btn btn-sm btn-hero btn-noborder btn-success mb-10 mx-5" data-dismiss="modal" aria-label="Close">
                                                Get Started <i class="fa fa-check ml-5"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- END Onboarding Modal -->


    <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_js/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
    <?php
include "header/bawah.php"
?>
</body>

</html>