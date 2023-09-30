<?php
session_start();

if( !isset($_SESSION['saya_user']) )
{
	header('location:./../'.$_SESSION['akses']);
	exit();
}

$id_user = ( isset($_SESSION['id_user']) ) ? $_SESSION['id_user'] : '';
$idsr_nama = ( isset($_SESSION['idsr_nama']) ) ? $_SESSION['idsr_nama'] : '';
$idsr_foto = ( isset($_SESSION['idsr_foto']) ) ? $_SESSION['idsr_foto'] : '';
$username = ( isset($_SESSION['username']) ) ? $_SESSION['username'] : '';
$hak_akses = ( isset($_SESSION['hak_akses']) ) ? $_SESSION['hak_akses'] : '';
$id_jadwal = ( isset($_SESSION['id_jadwal']) ) ? $_SESSION['id_jadwal'] : '';

?>
<?php
include "./../views/config.php"
?>



<?php
//including the database koneksi file
include_once("./../views/config.php");
//fetching data in descending order (lastest entry first)
$user = mysqli_query($mysqli, "SELECT * FROM table_user  ");
$user = mysqli_num_rows($user);
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
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
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
                            </a>
                        </div>
                        <!-- END Logo -->
                    </div>
                    <!-- END Normal Mode -->
                </div>
                <!-- END Side Header -->

                <!-- Sidebar Scrolling -->
                <div class="js-sidebar-scroll bg-body-dark">
                    <!-- Side User -->
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <!-- Visible only in mini mode -->
                        <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="../<?php echo $idsr_foto; ?>" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase"
                                        href="#"><?php echo $idsr_nama; ?></a>
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
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li>
                                <a href="./"><i class="si si-cup"></i><span
                                        class="sidebar-mini-hide">Dashboard</span></a>
                            </li>

                            <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span
                                    class="sidebar-mini-hidden text-danger">Menu user</span></li>
                            <!-- <li>
                                    <a href="user"><i class="si si-user"></i><span class="sidebar-mini-hide">Data user</span></a>           
                                </li> -->
                            <!--    <li>
                                    <a href="./"><i class="si si-cup"></i><span class="sidebar-mini-hide">Absen</span></a>
                                </li> -->
                            <li>
                                <a href="absen"><i class="si si-cup"></i><span class="sidebar-mini-hide">Absen
                                        user</span></a>
                            </li>
                            <li>
                                <a href="izin"><i class="si si-user"></i><span class="sidebar-mini-hide">Ajukan
                                        Izin</span></a>
                            </li>
                            <li>
                                <a href="lapabsen.php" target="_blank"><i class="si si-user"></i><span class="sidebar-mini-hide">Cetak
                                        Absensi</span></a>
                            </li>
                            <!-- <li class="nav-main-heading"><span class="sidebar-mini-visible">PG</span><span class="sidebar-mini-hidden">Laporan</span></li>
                                <li>
                                    <a href="#"><i class="si si-book-open"></i><span class="sidebar-mini-hide">Laporan</span></a>
                                </li> -->

                        </ul>
                    </div>
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
                    <!-- PEMBATAS -->
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
                            <span class="d-none d-sm-inline-block"><?php echo $idsr_nama; ?></span>
                            <i class="fa fa-angle-down ml-5"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right min-width-200"
                            aria-labelledby="page-header-user-dropdown">
                            <!--        <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                                <a class="dropdown-item" href="be_pages_generic_profile.html">
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

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header">
                <div class="content-header content-header-fullrow">
                    <form action="be_pages_generic_search.html" method="post">
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
    $alasan_izin    =  e($_POST['alasan_izin']);
    $tanggal_input    =  e($_POST['tanggal_input']);
    $ket    =  e($_POST['ket']);
    $status    =  e($_POST['status']);
    // foto
    $foto = $_FILES['foto']['name'];    
    $tmp = $_FILES['foto']['tmp_name']; 
    // $direktori   = "foto/".$_FILES['foto']['name'];
    $acak           = mt_rand(1,999999);
     $foto_izin = "foto_izin/".$acak.$foto;
     $direktori   = "../foto_izin/".$foto_izin;
  
    move_uploaded_file($_FILES['foto']['tmp_name'], "../foto_izin/".$acak.$_FILES['foto']['name']);


    if(empty($id_user) ||
     empty($alasan_izin) || 
     empty($tanggal_input) ||
     empty($ket) ||
     empty($status) ||
     empty($foto_izin)) {
				
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

        if (isset($_POST['id_user'])) {
            $id_user = e($_POST['id_user']);
            $query = "INSERT INTO izin (id_user, 
            alasan_izin, 
            tanggal_input,
            ket,
            status,
            foto_izin) 
                      VALUES('$id_user', 
                      '$alasan_izin', 
                      '$tanggal_input',  
                      '$ket',  
                      '$status', 
                      '$foto_izin')";
            mysqli_query($conn, $query);
            echo '<script>
  swal({
   title: "Good job!",
   text: "Izin Berhasil Di Buat. ",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "izin";
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
        <!-- Main Container -->
        <main id="main-container" class="push">
            <div wire:initial-data="{&quot;id&quot;:&quot;8yjTqKFkV6BmW3mrngQn&quot;,&quot;name&quot;:&quot;permit-page&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:[],&quot;children&quot;:[],&quot;checksum&quot;:&quot;09ae6c240d83efa79b5b269b0615da21c2c830be3e5505fa6e480a73f5785aff&quot;}"
                wire:id="8yjTqKFkV6BmW3mrngQn" class="content">
                <div class="row gutters-tiny invisible" data-toggle="appear">
                    <form class="col-12 js-validation-installation" action="izin" method="post"
                        enctype="multipart/form-data">
                        <div class="block block-rounded block-shadow">
                            <div class="block-content block-content-full">
                                <h2 class="content-heading text-black bg-body-light text-center pt-0">Ajukan Izin</h2>
                                <div class="row items-push">
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-12">Nama</label>
                                            <div class="col-md-9">
                                                <div class="form-control-plaintext"><?php echo $idsr_nama; ?></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-md-9">
                                                <input type="hidden" class=" form-control " id="date" name="id_user"
                                                    value="<?php echo $id_user; ?>">
                                                <input type="hidden" class=" form-control " id="date" name="status"
                                                    value="pending">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reason">Alasan Izin</label>
                                            <select name="alasan_izin" id="reason" class="form-control" required>
                                                <option value="acara">Acara</option>
                                                <option value="sakit">Sakit</option>
                                                <option value="terlambat">Terlambat</option>
                                                <option value="pulang">Pulang Awal</option>
                                                <option value="lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="date">Tanggal</label>
                                            <input type="text" class="js-flatpickr form-control bg-white" id="date"
                                                name="tanggal_input" placeholder="Pilih tanggal dari dan sampai"
                                                data-mode="range" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="photo">Foto</label>
                                            <div class="custom-file push">
                                                <input type="file" accept="image/*" class="custom-file-input" id="photo"
                                                    name="foto" data-toggle="custom-file-input" required>
                                                <label class="custom-file-label" for="photo">Ambil Foto</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="info">Keterangan</label>
                                            <textarea class="form-control" name="ket" rows="3"
                                                placeholder="Harus di isi" required></textarea>
                                        </div>
                                        <div class="form-group row text-center">
                                            <div class="col-lg-12">
                                                <button type="submit" name="Submit" value="add"
                                                    class="btn btn-hero btn-alt-success w-100" id="submit-btn">
                                                    <i class="fa fa-arrow-right mr-10"></i> Ajukan Izin
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-xl-12">
                <div class="block">
                    <ul class="nav nav-tabs nav-tabs-block align-items-center" data-toggle="tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#userLembur">user Izin</a>
                        </li>


                        <li class="nav-item ml-auto">
                            <div class="block-options mr-15">
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="fullscreen_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="content_toggle"></button>
                            </div>
                        </li>
                    </ul>
                    <div class="block-content tab-content">
                        <div class="tab-pane active" id="userLembur" role="tabpanel">
                            <div wire:initial-data="{&quot;id&quot;:&quot;wv4puJ3YR1dTRexFmctM&quot;,&quot;name&quot;:&quot;table-user-lembur&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:[],&quot;children&quot;:[],&quot;checksum&quot;:&quot;552a8dfd89ce531fab95027c93b84e6fe05403778cdc05a261f725f579ecb658&quot;}"
                                wire:id="wv4puJ3YR1dTRexFmctM" class="table-responsive js-gallery img-fluid-100">
                                <table class="table table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 100px;"><i class="si si-user"></i>
                                            </th>
                                            <th>Nama</th>
                                            <th>Keterangan</th>
                                            <th class="text-center">Tanggal Izin</th>
                                            <th class="text-center">Foto</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Jenis</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                
                  $izin = mysqli_query($koneksi, "SELECT * FROM izin where id_user='$id_user' ;");
                  while ($i = mysqli_fetch_array($izin)) {
                    $id_user = $i['id_user'];
                    $table_user = mysqli_query($koneksi, "SELECT idsr_nama FROM table_user WHERE id_user = $id_user");
                    $tk = mysqli_fetch_assoc($table_user); 
                    if ($i['status'] == 'pending') {
                        $label = "danger";
                    } else if ($i['status'] == "verif") {
                        $label = "success";
                    } else if ($i['status'] == "Dikonfirmasi") {
                        $label = "info";
                    } else {
                        $label = "info";
                    }

                                     ?>
                                        <tr>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48"
                                                    src="https://synapsis.ruhmtech.com/media/avatars/avatar0.jpg"
                                                    alt="Synapsis">
                                            </td>
                                            <td class="font-w600"><?php echo addslashes($tk['idsr_nama']);?></td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php echo addslashes($i['alasan_izin']);?></td>
                                            <td class="text-center"><?php echo addslashes($i['tanggal_input']);?></td>

                                            <td class="text-center">
                                                <a class="img-avatar img-avatar48 img-link img-link-zoom-in img-thumb img-lightbox"
                                                    href="https://synapsis.ruhmtech.com/images/presensi/310121/return_1_2_064e4771993b79f6fc24122a24c9297c.jpg">
                                                    <img class="img-fluid"
                                                        src="../<?php echo addslashes($i['foto_izin']);?>" alt="dfd">
                                                </a>
                                            </td>
                                            <td class="text-center text-uppercase"><span
                                                    class="badge badge-<?php echo addslashes($label);?>"
                                                    data-overtime-status="1"><?php echo addslashes($i['status']);?></span>
                                            </td>

                                            <td class="text-center"><?php echo addslashes($i['alasan_izin']);?></td>

                                        </tr>
                                        <?php
                                                        }
                                                       
                                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    </div>
    </div>
    </div>

    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <?php
include "footer/footer.php"
?>
    <!-- END Footer -->
    </div>
    <!-- END Page Container -->

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