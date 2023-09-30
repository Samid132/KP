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
                                <img class="img-avatar" src="<?php echo $userfile_user; ?>" style="width:200px;height:80px;"alt="">
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

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="content">
                <h2 class="content-heading bg-body-dark text-center">Data Siswa</h2>

                <div class="block-header block-header-default bg-gd-primary">
                    <h3 class="block-title text-white">User Management</h3>
                </div>
                <!-- Dynamic Table Full Pagination -->
                <div class="block">

                    <div class="block-content block-content-full">

                        <?php

                                    //fetching data in descending order (lastest entry first)
                                    $result = mysqli_query($mysqli, "SELECT * FROM table_user ");
                                    $no=1;
                                    ?>

                        <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">

                            <thead>
                                <tr>
                                    <th class="text-center">NO</th>

                                    <th>NAMA LENGKAP</th>
                                    <th class="d-none d-sm-table-cell">JADWAL</th>
                                    <th>NIS</th>
                                    <th class="d-none d-sm-table-cell">JENIS KELAMIN</th>
                                    <th class="d-none d-sm-table-cell">ROLE</th>
                                    <th class="text-center">FOTO</th>
                                    <th class="text-center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
		                            while($res = mysqli_fetch_array($result)) {	
                                        $id_jadwal = $res['id_jadwal'];
                                        $jadwal = mysqli_query($koneksi, "SELECT nama_jadwal,jam_masuk,jam_pulang FROM jadwal WHERE id_jadwal = $id_jadwal");
                                        $j = mysqli_fetch_assoc($jadwal); 
                                     ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++;?></td>
                                    <td class="font-w600"><?php echo addslashes($res['idsr_nama']);?></td>
                                    <td class="d-none d-sm-table-cell">
                                        <?php echo addslashes($j['nama_jadwal']);?> - <?php echo addslashes($j['jam_masuk']);?> - <?php echo addslashes($j['jam_pulang']);?>
                                    </td>
                                    <td><?php echo addslashes($res['idsr_nis']);?></td>
                                    <td class="d-none d-sm-table-cell">
                                        <?php echo addslashes($res['idsr_jeniskelamin']);?></td>
                                    <td class="d-none d-sm-table-cell">
                                        <?php echo addslashes($res['role']);?></td>
                                    <td class="text-center">
                                        <img class="img-avatar img-avatar48"
                                            src="../<?php echo addslashes($res['idsr_foto']);?>" alt="">
                                    </td>
                                    <input type="hidden" id="idsr_foto<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["idsr_foto"]; ?>">
                                    <input type="hidden" id="idsr_nama<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["idsr_nama"]; ?>">
                                    <input type="hidden" id="idsr_nis<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["idsr_nis"]; ?>">
                                    <input type="hidden" id="idsr_npwp<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["idsr_npwp"]; ?>">
                                    <input type="hidden" id="idsr_jeniskelamin<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["idsr_jeniskelamin"]; ?>">
                                    <input type="hidden" id="idsr_tempatlahir<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["idsr_tempatlahir"]; ?>">
                                    <input type="hidden" id="idsr_tanggallahir<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["idsr_tanggallahir"]; ?>">
                                    <input type="hidden" id="idsr_statuskeaktifan<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["idsr_statuskeaktifan"]; ?>">
                                    <input type="hidden" id="idsr_bpjskerja<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["idsr_bpjskerja"]; ?>">
                                    <input type="hidden" id="idsr_provinsi<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["idsr_provinsi"]; ?>">
                                    <input type="hidden" id="idsr_kota<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["idsr_kota"]; ?>">
                                    <input type="hidden" id="idsr_alamat<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["idsr_alamat"]; ?>">
                                    <input type="hidden" id="idsr_suamiistri<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["idsr_suamiistri"]; ?>">
                                    <input type="hidden" id="idsr_anak<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["idsr_anak"]; ?>">
                                    <input type="hidden" id="idsr_bpjskesehatan<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["idsr_bpjskesehatan"]; ?>">
                                    <input type="hidden" id="ort_ayah<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["ort_ayah"]; ?>">
                                    <input type="hidden" id="ort_ibu<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["ort_ibu"]; ?>">
                                    <input type="hidden" id="ort_provinsi<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["ort_provinsi"]; ?>">
                                    <input type="hidden" id="ort_kota<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["ort_kota"]; ?>">
                                    <input type="hidden" id="ort_alamat<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["ort_alamat"]; ?>">
                                    <input type="hidden" id="kntk_no1<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["kntk_no1"]; ?>">
                                    <input type="hidden" id="kntk_2<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["kntk_2"]; ?>">
                                    <input type="hidden" id="kntk_email<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["kntk_email"]; ?>">
                                    <input type="hidden" id="akdmk_pendidikan<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["akdmk_pendidikan"]; ?>">
                                    <input type="hidden" id="akdmk_tahunmasuk<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["akdmk_tahunmasuk"]; ?>">
                                    <input type="hidden" id="akdmk_nosk<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["akdmk_nosk"]; ?>">
                                    <input type="hidden" id="akdmk_masask_dri<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["akdmk_masask_dri"]; ?>">
                                    <input type="hidden" id="akdmk_masask_smpi<?php echo $res["id_user"]; ?>"
                                        value="<?php echo $res["akdmk_masask_smpi"]; ?>">
                                    <td class="text-center">
                                        <a type="button" class="btn btn-circle btn-alt-warning mr-5 mb-5"
                                            data-toggle="tooltip" href="user/<?php echo addslashes($res['id_user']);?>"
                                            title="Edit User">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a type="button" class="btn btn-circle btn-alt-warning mr-5 mb-5 , open_modal"
                                            id='<?php echo addslashes($res['id_user']);?>' data-toggle="tooltip"
                                            title="Edit Jadwal">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a type="button" class="btn btn-circle btn-alt-danger mr-5 mb-5"
                                            data-toggle="tooltip"
                                            href="huser/<?php echo addslashes($res['id_user']);?>"
                                            title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <button type="button" class="btn btn-circle btn-alt-primary mr-5 mb-5"
                                            data-toggle=""
                                            onclick="tampil_detail_anggota(<?php echo $res["id_user"]; ?>)"
                                            title="Detail">
                                            <i class="fa fa-eye"></i>
                                        </button>
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

    <!-- Fade In Modal -->
    <div class="modal fade" id="modal-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-fadein"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
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
                        <div class="row justify-content-center py-20">
                            <div class="col-xl-6">
                                <!-- jQuery Validation functionality is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _js/pages/be_forms_validation.js -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <div class="form-group">
                                    <div class="mb-15">
                                        <img class="img-avatar img-avatar96 img-avatar-thumb" id="idsr_foto" alt="">
                                    </div>
                                </div>
                                <ul class="list-group push">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center font-w600">
                                        Nama Lengkap
                                        <span class="badge badge-pill badge-success" id="idsr_nama"></span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center font-w600">
                                        No NIS
                                        <span class="badge badge-pill badge-success" id="idsr_nis"></span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center font-w600">
                                        Jenis Kelamin
                                        <span class="badge badge-pill badge-success" id="idsr_jeniskelamin"></span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center font-w600">
                                        Tempat Lahir
                                        <span class="badge badge-pill badge-success" id="idsr_tempatlahir"></span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center font-w600">
                                        Tanggal Lahir
                                        <span class="badge badge-pill badge-success" id="idsr_tanggallahir"></span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center font-w600">
                                        Status KeAktifan
                                        <span class="badge badge-pill badge-success" id="idsr_statuskeaktifan"></span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center font-w600">
                                        Provinsi
                                        <span class="badge badge-pill badge-success" id="idsr_provinsi"></span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center font-w600">
                                        Kota
                                        <span class="badge badge-pill badge-success" id="idsr_kota"></span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center font-w600">
                                        Alamat
                                        <span class="badge badge-pill badge-success" id="idsr_alamat"></span>
                                    </li>


                                </ul>
                                <!-- <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                                                Jenis
                                                <span class="badge badge-pill badge-success" id=""></span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                                                Jenis
                                                <span class="badge badge-pill badge-success" id=""></span>
                                            </li> -->
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                        <i class="fa fa-check"></i> Perfect
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Fade In Modal -->
    <hr class="dashed">
    <script type="text/javascript">
    // Tombol untuk melihat detail anggota
    function tampil_detail_anggota(id_user) {
        // Set hasil dasar
        $("#idsr_foto").attr('src', '../' + $("#idsr_foto" + id_user).val());
        $("#idsr_foto").html($("#idsr_foto" + id_user).val());
        $("#idsr_nama").html($("#idsr_nama" + id_user).val());
        $("#idsr_nis").html($("#idsr_nis" + id_user).val());
        $("#idsr_npwp").html($("#idsr_npwp" + id_user).val());
        $("#idsr_jeniskelamin").html($("#idsr_jeniskelamin" + id_user).val());
        $("#idsr_tempatlahir").html($("#idsr_tempatlahir" + id_user).val());
        $("#idsr_tanggallahir").html($("#idsr_tanggallahir" + id_user).val());
        $("#idsr_statuskeaktifan").html($("#idsr_statuskeaktifan" + id_user).val());
        $("#idsr_bpjskerja").html($("#idsr_bpjskerja" + id_user).val());
        $("#idsr_provinsi").html($("#idsr_provinsi" + id_user).val());
        $("#idsr_kota").html($("#idsr_kota" + id_user).val());
        $("#idsr_alamat").html($("#idsr_alamat" + id_user).val());
        $("#idsr_suamiistri").html($("#idsr_suamiistri" + id_user).val());
        $("#idsr_anak").html($("#idsr_anak" + id_user).val());
        $("#idsr_bpjskesehatan").html($("#idsr_bpjskesehatan" + id_user).val());
        $("#ort_ayah").html($("#ort_ayah" + id_user).val());
        $("#ort_ibu").html($("#ort_ibu" + id_user).val());
        $("#ort_provinsi").html($("#ort_provinsi" + id_user).val());
        $("#ort_kota").html($("#ort_kota" + id_user).val());
        $("#ort_alamat").html($("#ort_alamat" + id_user).val());
        $("#kntk_no1").html($("#kntk_no1" + id_user).val());
        $("#kntk_2").html($("#kntk_2" + id_user).val());
        $("#kntk_email").html($("#kntk_email" + id_user).val());
        $("#akdmk_pendidikan").html($("#akdmk_pendidikan" + id_user).val());
        $("#akdmk_tahunmasuk").html($("#akdmk_tahunmasuk" + id_user).val());
        $("#akdmk_nosk").html($("#akdmk_nosk" + id_user).val());
        $("#akdmk_masask_dri").html($("#akdmk_masask_dri" + id_user).val());
        $("#akdmk_masask_smpi").html($("#akdmk_masask_smpi" + id_user).val());



        // Tampilkan modal
        $("#modal-fadein").modal("show");
    }
    </script>

    <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".open_modal").click(function(e) {
            var m = $(this).attr("id");
            $.ajax({
                url: "edit/editjadwaluser.php",
                type: "GET",
                data: {
                    id_user: m,
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
    <!-- END Large Modal -->
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