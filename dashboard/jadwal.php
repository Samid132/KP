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
                <div class="js-sidebar-scroll">
                    <!-- Side User -->
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <!-- Visible only in mini mode -->
                        <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
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
        <!-- modal1 -->

        <div class="modal fade" id="scheduleModal1" role="dialog" aria-labelledby="modal-slideup" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideup" role="document">
                <div class="modal-content">
                    <form action="jadwal" enctype="multipart/form-data" method="post" onsubmit="return true;">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title modalTitle">Tambah Jadwal</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal"
                                        aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <input type="hidden" name="_token" value="t9jSt6PbcPUo52DZsiZhTiBnKCAfxU39MEJRIWaM">
                                <div class="form-group row">
                                    <label class="col-12" for="code">Hari</label>
                                    <div class="col-md-12">

                                        <select class="js-select2 form-control" id="6" style="width: 100%;"
                                            name="code">
                                            
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jum'at</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="name">Nama Matkul</label>
                                    <div class="col-md-12">
                                        <select class="js-select2 form-control" id="5" style="width: 100%;"
                                            name="nama_jadwal">
                                            <option></option>
                                            <?php
                                                        //selecting data associated with this particular id
                                                    $result = mysqli_query($mysqli, "SELECT * FROM mapel");
                                                    while($res = mysqli_fetch_array($result))
                                                {
                                                    ?>
                                            <option value="<?php echo $res['nama_mapel']?>">
                                                <?php echo $res['nama_mapel'] ?></option>
                                            <?php
                                                 }
                                                ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="entry_time">Jam Masuk</label>
                                    <div class="col-md-12">
                                        <input type="text" class="js-flatpickr form-control bg-white" id="entry_time"
                                            name="jam_masuk" data-enable-time="true" data-no-calendar="true"
                                            data-date-format="H:i:s" data-time_24hr="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="return_time">Jam Pulang</label>
                                    <div class="col-md-12">
                                        <input type="text" class="js-flatpickr form-control bg-white" id="return_time"
                                            name="jam_pulang" data-enable-time="true" data-no-calendar="true"
                                            data-date-format="H:i:s" data-time_24hr="true">

                                    </div>
                                    <!-- <input type="hidden" class="js-flatpickr form-control bg-white" id="return_time" name="jam_lembur" data-enable-time="true" data-no-calendar="true" data-date-format="H:i:s" data-time_24hr="true"> -->

                                </div>
                                <!-- <div class="form-group row">
                            <label class="col-12" for="return_time">Jam Lembur</label>
                            <div class="col-md-12">
                            </div>
                            
                        </div> -->

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Tutup</button>
                            <button name="Submit" value="add" class="btn btn-alt-success"><i class="fa fa-check"></i>
                                Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- end modal1 -->
        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="content">
                <h2 class="content-heading bg-body-dark text-center">Data Jadwal</h2>

                <div class="block-header block-header-default bg-gd-primary">
                    <h3 class="block-title text-white">Jadwal Management</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option text-white" data-toggle="modal"
                            data-target="#scheduleModal1">
                            <i class="fa fa-user-plus"></i> Tambah Jadwal
                        </button>

                    </div>
                </div>
                <!-- Dynamic Table Full Pagination -->
                <div class="block">

                    <div class="block-content block-content-full">

                        <?php

                                    //fetching data in descending order (lastest entry first)
                                    $result = mysqli_query($mysqli, "SELECT * FROM jadwal ");
                                    $no=1;
                                    ?>

                        <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">

                            <thead>
                                <tr>
                                    <th class="text-center">NO</th>

                                    <th>Hari</th>
                                    <th class="d-none d-sm-table-cell">Nama Matkul</th>
                                    <th>Jam Masuk</th>
                                    <th class="d-none d-sm-table-cell">Jam Pulang</th>
                                    <!-- <th class="text-center">Jam Lembur</th> -->
                                    <th class="text-center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
		                            while($res = mysqli_fetch_array($result)) {	
            
                                     ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++;?></td>
                                    <td class="font-w600"><?php echo addslashes($res['code']);?></td>
                                    <td class="d-none d-sm-table-cell"><?php echo addslashes($res['nama_jadwal']);?>
                                    </td>
                                    <td><?php echo addslashes($res['jam_masuk']);?></td>
                                    <td class="d-none d-sm-table-cell"><?php echo addslashes($res['jam_pulang']);?></td>
                                    <!-- <td class="d-none d-sm-table-cell"><?php echo addslashes($res['jam_lembur']);?></td> -->



                                    <td class="text-center">
                                        <a type="button" class="btn btn-circle btn-alt-warning mr-5 mb-5 , open_modal"
                                            id='<?php echo  $res['id_jadwal']; ?>' data-toggle="modal" title="Edit">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a type="button" class="btn btn-circle btn-alt-danger mr-5 mb-5"
                                            data-toggle="tooltip"
                                            href="hjadwal/<?php echo addslashes($res['id_jadwal']);?>" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <!-- <button type="button" class="btn btn-circle btn-alt-primary mr-5 mb-5"  data-toggle="modal" onclick="tampil_detail_anggota(<?php echo $res["id_user"]; ?>)" title="Detail">
                                        <i class="fa fa-eye"></i>
                                        </button> -->
                                    </td>

                                </tr>
                                <?php
                                                        }
                                                       
                                                        ?>



                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Dynamic Table Full Pagination -->


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
    <!-- Large Modal -->


    <hr class="dashed">

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
    <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".open_modal").click(function(e) {
            var m = $(this).attr("id");
            $.ajax({
                url: "edit/editjadwal.php",
                type: "GET",
                data: {
                    id_jadwal: m,
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
    <?php
include "prosestambah/pjadwal.php"
?>
    <?php
include "header/bawah.php"
?>

</body>

</html>