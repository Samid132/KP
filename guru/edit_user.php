<?php
session_start();
error_reporting(0);

if( !isset($_SESSION['saya_guru']) )
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

<?php
//including the database koneksi file
include_once("./../views/config.php");
$id_user=$_GET['id_user'];
	$result=mysqli_query($mysqli, "SELECT * FROM table_user WHERE id_user=$id_user");
    while($res=mysqli_fetch_array($result))
    {
        $id_user = $res['id_user'];
        $idsr_nama = $res['idsr_nama'];
        $idsr_nis = $res['idsr_nis'];
        $idsr_jeniskelamin = $res['idsr_jeniskelamin'];
        $idsr_tempatlahir = $res['idsr_tempatlahir'];
        $idsr_tanggallahir = $res['idsr_tanggallahir'];
        $idsr_statuskeaktifan = $res['idsr_statuskeaktifan'];
        $idsr_foto = $res['idsr_foto'];
        $idsr_provinsi = $res['idsr_provinsi'];
        $idsr_kota = $res['idsr_kota'];
        $idsr_alamat = $res['idsr_alamat'];
        $kelas = $res['kelas'];

    }
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title><?php echo $nama2; ?></title>

    <meta name="description"
        content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description"
        content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="../../assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../../assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="../../assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="../../assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="../../assets/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">
    <link rel="stylesheet" href="../../assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css">
    <link rel="stylesheet" href="../../assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="../../assets/js/plugins/dropzonejs/dist/dropzone.css">
    <link rel="stylesheet" href="../../assets/js/plugins/flatpickr/flatpickr.min.css">
    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="../../assets/css/codebase.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>

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
                            <img class="img-avatar img-avatar32" src="../../assets/media/avatars/avatar15.jpg" alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="../">
                                <img class="img-avatar" src="../<?php echo $userfile_user; ?>"
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
include "header/header2.php"
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
                                <a class="dropdown-item" href="../">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>    -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../logout">
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

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <!-- User Info -->
            <div class="bg-image bg-image-bottom"
                style="background-image: url('../../assets/media/photos/photo13@2x.jpg');">
                <div class="bg-black-op-75 py-30">
                    <div class="content content-full text-center">
                        <!-- Avatar -->
                        <div class="mb-15">
                            <a class="img-link" href="../">
                                <img class="img-avatar img-avatar96 img-avatar-thumb"
                                    src="../../<?php echo $idsr_foto; ?>" alt="">
                            </a>
                        </div>
                        <!-- END Avatar -->

                        <!-- Personal -->
                        <h1 class="h3 text-white font-w700 mb-10"> <?php echo $idsr_nama; ?></h1>
                        <h2 class="h5 text-white-op">
                            Edit Data user <a class="text-primary-light"
                                href="javascript:void(0)"><?php echo $kntk_email; ?></a>
                        </h2>
                        <!-- END Personal -->

                        <!-- Actions -->
                        <a href="../user" class="btn btn-rounded btn-hero btn-sm btn-alt-secondary mb-5">
                            <i class="fa fa-arrow-left mr-5"></i> Back to Profile
                        </a>
                        <!-- END Actions -->
                    </div>
                </div>
            </div>
            <!-- END User Info -->
            <?php
// including the database koneksi file
include_once("./../views/config.php");

if(isset($_POST['update1']))
{	
        $id_user = $_POST['id_user']; 
        $idsr_nama = $_POST['idsr_nama'];
        $idsr_nis = $_POST['idsr_nis'];
        $idsr_jeniskelamin = $_POST['idsr_jeniskelamin'];
        $idsr_tempatlahir = $_POST['idsr_tempatlahir'];
        $idsr_tanggallahir = $_POST['idsr_tanggallahir'];
        $idsr_statuskeaktifan = $_POST['idsr_statuskeaktifan'];
        $idsr_provinsi = $_POST['idsr_provinsi'];
        $idsr_kota = $_POST['idsr_kota'];
        $idsr_alamat = $_POST['idsr_alamat'];
        $tanggal_update = $_POST['tanggal_update'];
        $kelas = $_POST['kelas'];

        $foto = $_FILES['foto']['name'];    
        $tmp = $_FILES['foto']['tmp_name']; 
        $ext = strtolower(end(explode('.', $foto)));
        $valid_ext = array('jpg','jpeg','png','gif','bmp');
        // $direktori   = "foto/".$_FILES['foto']['name'];
        $acak           = mt_rand(1,999999);
         $idsr_foto = "foto_user/".$acak.$foto;
         $direktori   = "./../foto_user/".$idsr_foto;
      
        move_uploaded_file($_FILES['foto']['tmp_name'], "./../foto_user/".$acak.$_FILES['foto']['name']);
        $ext = strtolower(end(explode('.', $foto)));
        $valid_ext = array('jpg','jpeg','png','gif','bmp');

	// checking empty fields
    if(empty($idsr_nama) || 
        empty($idsr_nis) || 
        empty($idsr_jeniskelamin) || 
        empty($idsr_tempatlahir) || 
        empty($idsr_tanggallahir) || 
        empty($idsr_statuskeaktifan) ||  
        empty($idsr_provinsi) || 
        empty($idsr_kota) || 
        empty($idsr_alamat) || 
        empty($idsr_foto) ||
        empty($kelas) ||
        empty($tanggal_update)) 
    {

            echo "<script>window.alert('Data Yang  DI Ubah Tidak Lengkap')
            window.location=''</script>";
        
    } 
    else 
    {
         
		//updating the table
	    $result = mysqli_query($mysqli, "UPDATE table_user SET idsr_nama='$idsr_nama', 
        idsr_nis='$idsr_nis',    
        idsr_jeniskelamin='$idsr_jeniskelamin', 
        idsr_tempatlahir='$idsr_tempatlahir', 
        idsr_tanggallahir='$idsr_tanggallahir', 
        idsr_statuskeaktifan='$idsr_statuskeaktifan',  
        idsr_provinsi='$idsr_provinsi', 
        idsr_kota='$idsr_kota', 
        idsr_alamat='$idsr_alamat',
        kelas='$kelas',
        tanggal_update='$tanggal_update' WHERE id_user=$id_user");    
    
        echo '<script>
        swal({
        title: "Good job!",
        text: "Pengaturan web Berhasil Berhasil DI Ubah",
        icon: "success",
        button: "oke!",
        }).then(function() {
        window.location = "../user";
        });
             </script>';
             
    } 
    if(empty($idsr_foto)) {

        echo "<script>window.alert('Data Yang  DI Ubah Tidak Lengkap')
        window.location=''</script>";
        
    }
    else
    {
        if(in_array($ext, $valid_ext))
        {
            $ukuran =$_FILES['foto']['size'];								
            if ($ukuran>800000)
            {
    
              echo '<script>
              swal({
               title: "Waduh!",
               text: "Ukuran File Terlalu Besar,Max 800kb",
               icon: "error",
               button: "oke!",
             }).then(function() {
               window.location = "";
             });
                       </script>';
                            exit;
                    exit;
            }	
        $result = mysqli_query($mysqli, "UPDATE table_user SET 
        idsr_foto='$idsr_foto' WHERE id_user=$id_user");
        echo '<script>
        swal({
        title: "Good job!",
        text: "Pengaturan Foto Berhasil Berhasil DI Ubah",
        icon: "success",
        button: "oke!",
        }).then(function() {
        window.location = "";
        });
              </script>';
        } 
    }

   
}
?>
            <!-- Main Content -->
            <div class="content">
                <!-- User Profile -->
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            <i class="fa fa-user-circle mr-5 text-muted"></i> Edit user
                        </h3>
                    </div>
                    <div class="block-content">
                        <form action="../user/<?php echo addslashes($id_user);?>" method="POST"
                            enctype="multipart/form-data" onsubmit="return true;">
                            <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
                            <div class="row items-push">
                                <div class="col-xl-6 ">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="profile-settings-username">Nama Lengkap</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control form-control-lg"
                                                    id="profile-settings-username" name="idsr_nama"
                                                    placeholder="Nama Lengkap" value="<?php echo $idsr_nama; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="profile-settings-name">No NIS</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control form-control-lg"
                                                    id="profile-settings-name" name="idsr_nis" placeholder="NO NIP"
                                                    value="<?php echo $idsr_nis; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="example-select2">Jenis Kelamin</label>
                                            <div class="col-lg-8">

                                                <select class="form-control" id="example-select"
                                                    name="idsr_jeniskelamin">
                                                    <option value="<?php echo $idsr_jeniskelamin; ?>">
                                                        <?php echo $idsr_jeniskelamin; ?></option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="profile-settings-email">Tempat Lahir</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control form-control-lg"
                                                    id="profile-settings-email" name="idsr_tempatlahir"
                                                    placeholder="Tempat Lahir" value="<?php echo $idsr_tempatlahir; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="profile-settings-email">Tanggal Lahir</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-flatpickr form-control"
                                                    id="example-material-flatpickr-custom" name="idsr_tanggallahir"
                                                    placeholder="d-m-Y" data-allow-input="true" data-date-format="d-m-Y"
                                                    value="<?php echo $idsr_tanggallahir; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="example-select2">Status KeAktifan</label>
                                            <div class="col-lg-8">

                                                <select class="form-control" id="example-select"
                                                    name="idsr_statuskeaktifan">
                                                    <option value="<?php echo $idsr_statuskeaktifan; ?>">
                                                        <?php echo $idsr_statuskeaktifan; ?></option>
                                                    <option value="Masih Aktif Di Sekolah">Masih Aktif Di Sekolah
                                                    </option>
                                                    <option value="Sudah Tidak Aktif Di Sekolah">Sudah Tidak Aktif Di
                                                        Sekolah</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="example-select2">Kelas</label>
                                            <div class="col-lg-8">

                                                <select class="form-control" id="example-select" name="kelas">
                                                    <option value="<?php echo $kelas; ?>">
                                                        <?php echo $kelas; ?></option>
                                                    <option value="1">Kelas 1
                                                    </option>
                                                    <option value="2">Kelas 2
                                                    </option>
                                                    <option value="3">Kelas 3
                                                    </option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="example-select2">Provinsi</label>
                                        <div class="col-lg-12">
                                            <select class="js-select2 form-control" id="2" style="width: 100%;"
                                                name="idsr_provinsi">
                                                <option value="<?php echo $idsr_provinsi; ?>">
                                                    <?php echo $idsr_provinsi; ?></option>
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
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="example-select2">Kota</label>
                                        <div class="col-lg-12">
                                            <select class="js-select2 form-control" id="3" style="width: 100%;"
                                                name="idsr_kota">
                                                <option value="<?php echo $idsr_kota; ?>"><?php echo $idsr_kota; ?>
                                                </option>
                                                <?php
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM table_kota  ");
while($res = mysqli_fetch_array($result))
{
?>
                                                <option value="<?php echo $res['kota_nama']?>">
                                                    <?php echo $res['kota_nama'] ?></option>
                                                <?php

}
?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="profile-settings-name">Alamat</label>
                                        <div class="col-lg-12">
                                            <textarea class="form-control" id="example-textarea-input"
                                                name="idsr_alamat" rows="6"
                                                placeholder="Content.."><?php echo $idsr_alamat; ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10 col-xl-12">
                                        <div class="push">
                                            <img class="img-avatar" src="../../<?php echo $idsr_foto; ?>" alt="">
                                        </div>
                                        <div class="custom-file">
                                            <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                            <input type="file" class="custom-file-input" id="foto" name="foto"
                                                data-toggle="custom-file-input">
                                            <label class="custom-file-label" for="profile-settings-avatar">Choose new
                                                avatar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="profile-settings-firstname">Tanggal Update</label>
                                <input type="text" class="form-control form-control-lg" id="profile-settings-firstname"
                                    name="tanggal_update" readonly
                                    value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(' Y-m-d : H:i:s');?>">
                            </div>
                            <p></p>
                            <div class=" text-center">
                                <div class="col-12 ">
                                    <button type="submit" class="btn btn-alt-primary" name="update1"
                                        value="update1">Update</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>


            <!-- kontak -->
            <div class="block">
            </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    <!-- END Connections -->
    <!-- Change Password -->
    <!-- <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">
                                <i class="fa fa-asterisk mr-5 text-muted"></i> Change Password
                            </h3>
                        </div>
                        <div class="block-content">
                            <form action="../user/" method="post" onsubmit="return false;">
                            <input type="hidden" name="id_user" value="">    
                            <div class="row items-push">
                                    <div class="col-lg-3">
                                        <p class="text-muted">
                                            Changing your sign in password is an easy way to keep your account secure.
                                        </p>
                                    </div>
                                    <div class="col-lg-7 offset-lg-1">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="profile-settings-password">Current Password</label>
                                                <input type="text" class="form-control form-control-lg" id="profile-settings-password" name="profile-settings-password" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="profile-settings-password-new">New Password</label>
                                                <input type="password" class="form-control form-control-lg" id="profile-settings-password-new" name="profile-settings-password-new">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="profile-settings-password-new-confirm">Confirm New Password</label>
                                                <input type="password" class="form-control form-control-lg" id="profile-settings-password-new-confirm" name="profile-settings-password-new-confirm">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-alt-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> -->
    <!-- END Change Password -->


    </div>
    <!-- END Main Content -->
    <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <?php
include "./footer/footer.php"
?>
    <!-- END Footer -->
    </div>
    <!-- END Page Container -->

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
    <script src="../../assets/js/codebase.core.min.js"></script>

    <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_js/main/app.js
        -->
    <script src="../../assets/js/codebase.app.min.js"></script>
    <!-- Page JS Plugins -->
    <script src="../../assets/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js"></script>
    <script src="../../assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="../../assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="../../assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="../../assets/js/plugins/select2/js/select2.full.min.js"></script>
    <script src="../../assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
    <script src="../../assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js"></script>
    <script src="../../assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
    <script src="../../assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="../../assets/js/plugins/dropzonejs/dropzone.min.js"></script>
    <script src="../../assets/js/plugins/flatpickr/flatpickr.min.js"></script>

    <!-- Page JS Code -->
    <script src="../../assets/js/pages/be_forms_plugins.min.js"></script>
    <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins) -->
    <script>
    jQuery(function() {
        Codebase.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs',
            'rangeslider', 'tags-inputs'
        ]);
    });
    </script>
</body>

</html>