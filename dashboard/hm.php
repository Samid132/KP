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



<?php
//including the database koneksi file
include_once("./../views/config.php");
//fetching data in descending order (lastest entry first)
$user = mysqli_query($mysqli, "SELECT * FROM table_user  ");
$user = mysqli_num_rows($user);
$absen = mysqli_query($mysqli, "SELECT * FROM absen  ");
$absen = mysqli_num_rows($absen);
$izin = mysqli_query($mysqli, "SELECT * FROM izin  ");
$izin = mysqli_num_rows($izin);
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
                            <a class="img-link">
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
                            <!-- <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5> -->
                            <!-- <a class="dropdown-item" href="be_pages_generic_profile.html">
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
                <div class="row invisible" data-toggle="appear">



                    <div class="col-6 col-xl-3">
                        <a class="block block-link-shadow text-right" href="javascript:void(0)">
                            <div class="block-content block-content-full clearfix">
                                <div class="float-left mt-10 d-none d-sm-block">
                                    <i class="si si-user-following fa-3x text-success"></i>
                                </div>
                                <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000"
                                    data-to="<?php echo $user; ?>">0</div>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Data user</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-xl-3">
                        <a class="block block-link-shadow text-right" href="javascript:void(0)">
                            <div class="block-content block-content-full clearfix">
                                <div class="float-left mt-10 d-none d-sm-block">
                                    <i class="si si-clock fa-3x text-success"></i>
                                </div>
                                <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000"
                                    data-to="<?php echo $absen; ?>">0</div>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Data Absen </div>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="col-6 col-xl-3">
                <a class="block block-link-shadow text-right" href="javascript:void(0)">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-left mt-10 d-none d-sm-block">
                            <i class="si si-flag fa-3x text-warning"></i>
                        </div>
                        <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="0">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Terlambat</div>
                    </div>
                </a>
            </div> -->
                    <div class="col-6 col-xl-3">
                        <a class="block block-link-shadow text-right" href="javascript:void(0)">
                            <div class="block-content block-content-full clearfix">
                                <div class="float-left mt-10 d-none d-sm-block">
                                    <i class="si si-info fa-3x text-info"></i>
                                </div>
                                <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000"
                                    data-to="<?php echo $izin; ?>">0</div>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Izin</div>
                            </div>
                        </a>
                    </div>
                    <!-- END Row #1 -->
                </div>
                <div>
                    <h1 style="color:white; background-color:grey; text-align: center">
                        <p style="font-size: 30px;">Tentang SMPN 38 KOTA BEKASI</p>
                    </h1>
                    <p><p><p style="font-size: 18px;">SMP Negeri 38 Bekasi, Kota Bekasi didirikan pada tahun 2008, berlokasi di Jl.Kaliabang Tengah Perum Villa Mas Indah Blok A No. 1 Perwira Bekasi Utara. Pada mulanya sekolah ini didirikan dengan tujuan untuk menyediakan pendidikan bagi masyarakat di sekitar Kecamatan Bekasi Utara. Tahun demi tahun SMP Negeri 38 Bekasi selalu mengalami perkembangan/kemajuan, baik dari segi kualitas maupun kuantitas, dari segi kualitas bisa diukur dari status akreditasi sekolah yang meningkat terus (terakhir status terakreditasi dengan nilai A), prestasi akademik maupun non akademik dari siswa-siswinya, sera fasilitas pendukung kegiatan belajar mengajar di sekolah, dan lain sebagainya. Dari segi kuantitas mengalami peningakatan jumlah rombongan belajar (rombel) dari tahun pelajaran 2008/2009 memiliki jumlah rombel sebanyak 3 rombel, dan sampai tahun 2014/2015 sudah memiliki rombel sebanyak 21 rombel tahun 2019/2021 sudah 24 rombel sampai tahun 2021/2022 28 Rombel. Dengan semakin majunya sekolah pada khususnya dan majunya dunia pendidikan pada umumnya, menyusun perencanaan/program sekolah untuk jangka waktu yang akan datang merupakan suatu keharusan yang tidak bisa ditawar-tawar lagi, untuk hal tersebut sekolah mencoba menyusun Rencana Kerja Sekolah (RKS) untuk jangka menengah, dengan harapan kegiatan-kegiatan rutin sekolah dan kegiatan-kegiatan pengembangan sekolah dapat lebih terprogram danjelas arah tujuannya.</p></p></p>

                    <div class="col-md-6">
                        <div class="block block-rounded block-bordered">
                            <div class="block-header block-header-default border-b">
                                <h3 class="block-title">Grafik Jadwal Masuk</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option"
                                        data-action="content_toggle"><i class="si si-arrow-down"></i></button>
                                </div>
                            </div>
                            <div class="block-content">

                                <canvas id="myChart"></canvas>

                            </div>
                        </div>
                    </div>

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
        <script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["Hadir", "Tidak Hadir"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$Pending = mysqli_query($koneksi,"select * from absen where ket_absen='tepatwaktu' OR ket_absen='telat'");
					echo mysqli_num_rows($Pending);
					?>, 
					<?php 
					$Dikonfirmasi = mysqli_query($koneksi,"select * from absen where ket_absen='bolos'");
					echo mysqli_num_rows($Dikonfirmasi);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
    <?php
include "header/bawah.php"
?>

</body>

</html>