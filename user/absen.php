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
                                <a href="absen"><i class="si si-user"></i><span class="sidebar-mini-hide">Absen
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
        <!-- modal1            -->
        <div id="ModalAdd1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Absen Masuk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="absen" name="modal_popup" enctype="multipart/form-data" method="post"
                            onsubmit="return true;">

                            <div class="form-group" style="padding-bottom: 20px;">
                                <input type="hidden" id="modal-name" class="form-control" placeholder="Modal Name"
                                    readonly value="<?php echo $idsr_nama; ?>">
                                <input type="hidden" name="id_user" id="modal-name" class="form-control"
                                    placeholder="Modal Name" readonly value="<?php echo $id_user; ?>">
                                <input type="hidden" name="id_jadwal" id="modal-name" class="form-control"
                                    placeholder="Modal Name" readonly value="<?php echo $id_jadwal; ?>">
                                <input type="hidden" name="jam_masuk" id="modal-name" class="form-control"
                                    placeholder="Modal Name" readonly
                                    value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('H:i');?>">
                                <input type="hidden" name="status" id="modal-name" class="form-control"
                                    placeholder="Modal Name" readonly value="m">

                            </div>

                            <div class="form-group" style="padding-bottom: 20px;">
                                <label for="Description">Keterangan Masuk</label>
                                <textarea name="ket_masuk" id="description" class="form-control"
                                    placeholder="Description" required /></textarea>
                            </div>

                            <div class="form-group" style="padding-bottom: 20px;">
                                <label for="Date">Date</label>
                                <input type="text" name="tanggal" class="form-control" plcaceholder="Timestamp" readonly
                                    value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(' Y-m-d');?>"
                                    required />
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-success" name="Submit" value="add">
                                    Absen Masuk
                                </button>

                                <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
                                    Cancel
                                </button>
                            </div>

                        </form>



                    </div>


                </div>
            </div>
        </div>
        <!-- end modal1 -->

        <!-- Main Container -->
        <main id="main-container">

            <div class="content">
                <div>
                    <h1 style="color:item; text-align: center">ABSENSI</h1>
                </div>
                <?php
                    error_reporting(0);
        
                          $table_user = mysqli_query($koneksi, "SELECT * FROM table_user WHERE id_user = '$id_user' ");
                          $tk = mysqli_fetch_array($table_user); {
                            
                            $id_jadwal = $tk['id_jadwal'];
                            $jadwal = mysqli_query($koneksi, "SELECT code,nama_jadwal,jam_masuk,jam_pulang,jam_lembur FROM jadwal WHERE id_jadwal = '$id_jadwal' ");
                            $j = mysqli_fetch_assoc($jadwal); 
                            
                          
            
                            
                        
                           ?>



                <!-- Page Content -->
                <div class="content">
                    <div class="row invisible" data-toggle="appear">

                        <div class="col-6 col-xl-3">

                        </div>
                        <!-- END Row #1 -->
                    </div>

                    <div class="block block-rounded text-center">
                        <div class="block-content block-content-full block-sticky-options pt-30">
                            <div class="block-options">
                                <div class="dropdown">
                                    <div class="dropdown-menu dropdown-menu-right" style="">
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-plus mr-5"></i>Add friend
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-user mr-5"></i>Check out profile
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-envelope-o mr-5"></i>Send a message
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <img class="img-avatar" src="../assets/media/avatars/avatar0.jpg"
                                alt="Alex Sander">
                        </div>

                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="font-w600 mb-5"><?php echo $idsr_nama; ?></div>
                            <div class="font-size-sm text-muted">Siswa</div>
                        </div>
                        <div class="block-content bg-body-white">
                            <div class="row items-push">
                                <div class="col-6">
                                    <div class="mb-5"><i class="si si-login fa-2x"></i></div>
                                    <div class="font-size-sm text-muted"><?php echo $j["jam_masuk"]; ?></div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-5"><i class="si si-power fa-2x"></i></div>
                                    <div class="font-size-sm text-muted"><?php echo $j["jam_pulang"]; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <div class="block-header block-header-default bg-body-dark">
                        <h3 class="block-title text-center">PROGRESS</h3>
                    </div>
                    <?php
            error_reporting(0);
            $hari_ini = date("Y-m-d");
            $jam = date("H:i:s");
                  $absen = mysqli_query($koneksi, "SELECT * FROM absen WHERE id_user = '$id_user' AND tanggal = '$hari_ini' ");
                  $a = mysqli_fetch_array($absen); {
                    $id_user = $a['id_user'];
                    $table_user = mysqli_query($koneksi, "SELECT id_user,idsr_nama FROM table_user WHERE id_user = '$id_user' ");
                    $tk = mysqli_fetch_assoc($table_user); 
                    $id_jadwal = $a['id_jadwal'];
                    $jadwal = mysqli_query($koneksi, "SELECT code,nama_jadwal,jam_masuk,jam_pulang,jam_lembur FROM jadwal WHERE id_jadwal = '$id_jadwal' ");
                    $j = mysqli_fetch_assoc($jadwal); 
                    
                    if ($a['status'] == 'p') {
                        $label1 = "active";
                        $label11 = "11";
                    } else if ($a['status'] == "m") {
                        $label2 = "active";
                        $label22 = "11";
                    } else if ($a['status'] == "l") {
                        $label3 = "active";
                        $label33 = "11";

                    } else {
                        $label = "info";
                    }
                    ?>
                    <div class="block-content">
                        <ul class="nav nav-pills bg-body-dark flex-column push">
                            <li class="nav-item">

                                <a class="nav-link d-flex align-items-center justify-content-between <?php echo addslashes($label2);?>"
                                    href="javascript:void(0)" data-target="#ModalAdd1<?php echo addslashes($label22);?>"
                                    data-toggle="modal">
                                    <!-- Modal Popup untuk Add-->

                                    <span><i class="fa fa-fw fa-user-plus mr-5"></i> Masuk</span>
                                    <span class="badge badge-pill badge-warning"><?php echo $a["jam_masuk"]; ?></span>
                                    <span class="badge badge-pill badge-success"><i
                                            class="fa fa-fw fa-chevron-circle-right"></i></span>

                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center justify-content-between <?php echo addslashes($label1);?> , open_modal<?php echo addslashes($label11);?>"
                                    data-toggle="tooltip" id='<?php echo  $a['id_absen']; ?>' href="javascript:void(0)">
                                    <span><i class="fa fa-fw fa-power-off mr-5"></i> Pulang</span>
                                    <span class="badge badge-pill badge-warning"><?php echo $a["jam_pulang"]; ?></span>

                                    <span class="badge badge-pill badge-success"><i
                                            class="fa fa-fw fa-chevron-circle-right"></i></i></span>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link d-flex align-items-center justify-content-between <?php echo addslashes($label3);?> , open_modal2<?php echo addslashes($label33);?>"
                                    data-toggle="tooltip" id='<?php echo  $a['id_absen']; ?>'>
                                    <span><i class="fa fa-fw fa-sign-in mr-5"></i> Lembur </span>
                                    <span class="badge badge-pill badge-warning"><?php echo $a["jam_lembur"]; ?></span>
                                    <span class="badge badge-pill badge-success"><?php echo $jam; ?></span>
                                </a>
                            </li> -->

                        </ul>
                    </div>
                </div>
                <?php }?>


                <!-- END Page Content -->
                <div class="col-12 col-xl-12">
                    <div class="block">
                        <ul class="nav nav-tabs nav-tabs-block align-items-center" data-toggle="tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#userLembur">Riwayat Absen</a>
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
                                                <th class="text-center">NO</th>

                                                <th>Nama user</th>
                                                <th class="d-none d-sm-table-cell">Nama Jadwal</th>
                                                <th class="d-none d-sm-table-cell">Jadwal Masuk</th>
                                                <th>Tanggal Sekolah</th>
                                                <th>Jam Masuk</th>
                                                <th class="d-none d-sm-table-cell">Jam Pulang</th>
                                                <!-- <th class="d-none d-sm-table-cell">Jam Lembur</th> -->
                                                <th class="text-center">Ket Masuk</th>
                                                <th class="text-center">Ket Pulang</th>
                                                <!-- <th class="text-center">Ket Lembur</th> -->

                                                <th class="text-center">Ket Absen</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                  $no = 1;
                  $absen = mysqli_query($koneksi, "SELECT * FROM absen WHERE id_user = '$id_user' ;");
                  while ($a = mysqli_fetch_array($absen)) {
                    $id_user = $a['id_user'];
                    $table_user = mysqli_query($koneksi, "SELECT idsr_nama FROM table_user WHERE id_user = $id_user");
                    $tk = mysqli_fetch_assoc($table_user); 
                    $id_jadwal = $a['id_jadwal'];
                    $jadwal = mysqli_query($koneksi, "SELECT nama_jadwal,jam_masuk,jam_pulang FROM jadwal WHERE id_jadwal = $id_jadwal");
                    $j = mysqli_fetch_assoc($jadwal); 

                                     ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no++;?></td>
                                                <td class="font-w600"><?php echo addslashes($tk['idsr_nama']);?></td>
                                                <td class="d-none d-sm-table-cell">
                                                    <?php echo addslashes($j['nama_jadwal']);?></td>
                                                <td class="d-none d-sm-table-cell">
                                                    <?php echo addslashes($j['jam_masuk']);?>|<?php echo addslashes($j['jam_pulang']);?>
                                                </td>
                                                <td><?php echo addslashes($a['tanggal']);?></td>
                                                <td><?php echo addslashes($a['jam_masuk']);?></td>
                                                <td class="d-none d-sm-table-cell">
                                                    <?php echo addslashes($a['jam_pulang']);?></td>
                                                <!-- <td class="d-none d-sm-table-cell">
                                                    <?php echo addslashes($a['jam_lembur']);?></td> -->
                                                <td class="d-none d-sm-table-cell">
                                                    <?php echo addslashes($a['ket_masuk']);?></td>
                                                <td class="d-none d-sm-table-cell">
                                                    <?php echo addslashes($a['ket_pulang']);?></td>
                                                <!-- <td class="d-none d-sm-table-cell">
                                                    <?php echo addslashes($a['ket_lembur']);?></td> -->
                                                <td class="d-none d-sm-table-cell"><?php  switch (true)
            {
                case ($a['jam_masuk'] > $j['jam_masuk']  ) :
                    echo ' <button class="btn btn-danger">Telat</button>
                    <br/>';
                    break;
                    case ($j['jam_masuk'] = $a['jam_masuk']) :
                        echo ' <button class="btn btn-success">Tepat Waktu</button>
                        <br/>';
                        break;
               
                
                default : 
                    echo 'Tidak Hadir';
            };?></td>



                                                <!-- <td class="text-center">
                                        <a type="button" class="btn btn-circle btn-alt-warning mr-5 mb-5" data-toggle="tooltip" href="absen/<?php echo addslashes($a['id_absen']);?>" title="Edit">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                        <a type="button" class="btn btn-circle btn-alt-danger mr-5 mb-5" data-toggle="tooltip" href="hapus/<?php echo addslashes($a['id_absen']);?>"title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                        <button type="button" class="btn btn-circle btn-alt-primary mr-5 mb-5"  data-toggle="modal" onclick="tampil_detail_anggota(<?php echo $a["id_absen"]; ?>)" title="Detail">
                                        <i class="fa fa-eye"></i>
                                        </button>
                                            </td> -->

                                            </tr>
                                            <?php
                                                        }
                                                       
                                                        ?>
                                        </tbody>
                                    </table>
                                </div>
        </main>

        <!-- Mulai Edit Peminjaman -->

        <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
        </div>
        <script type="text/javascript">
        $(document).ready(function() {
            $(".open_modal").click(function(e) {
                var m = $(this).attr("id");
                $.ajax({
                    url: "edit/editabsen.php",
                    type: "GET",
                    data: {
                        id_absen: m,
                    },
                    success: function(ajaxData) {
                        $("#ModalEdit").html(ajaxData);
                        $("#ModalEdit").modal('show', {
                            backdrop: 'true'
                        });
                    }
                });
            });
        });
        </script>
        <div id="ModalEdit2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
        </div>
        <script type="text/javascript">
        $(document).ready(function() {
            $(".open_modal2").click(function(e) {
                var m = $(this).attr("id");
                $.ajax({
                    url: "edit/editabsen2.php",
                    type: "GET",
                    data: {
                        id_absen: m,
                    },
                    success: function(ajaxData) {
                        $("#ModalEdit2").html(ajaxData);
                        $("#ModalEdit2").modal('show', {
                            backdrop: 'true'
                        });
                    }
                });
            });
        });
        </script>
        <!-- END Edit Peminjaman -->
        <!-- END Main Container -->
        <!-- Footer -->
        <?php
include "footer/footer.php"
?>
        <!-- END Footer -->
    </div>
    <?php
include "prosestambah/pabsen.php"
?>
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