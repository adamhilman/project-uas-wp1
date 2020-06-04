<?php 
$halaman = $_GET['halaman'];
if($halaman == "data-mahasiswa"){
    $classmhs="pcoded-trigger active";
}elseif($halaman == "data-buku"){
    $classbuku="pcoded-trigger active";
}else{$classbuku = ""; $classmhs="";}
?>
<body>

    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header" >
                <div class="navbar-wrapper">
                    <div class="navbar-logo" navbar-theme="theme4">
                        <a class="mobile-menu" id="mobile-collapse" href="index.php">
                            <i class="ti-menu"></i>
                        </a>
                        <a href="#!">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <div>
                            <ul class="nav-left">
                                <li>
                                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                                </li>
                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                                </li>
                            </ul>


                            <ul class="nav-right">
                                <li class="user-profile header-notification">
                                    <a href="#!">
                                        <img src="assets/images/user.png" alt="User-Profile-Image">
                                        <span>John Doe</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar" >
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-trigger">
                                    <a href="index.php ">
                                        <span class="pcoded-micon"><i class="ti-comments"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Tabel Data</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="<?php echo $classmhs;?>">
                                    <a href="index.php?halaman=data-mahasiswa">
                                        <span class="pcoded-micon"><i class="icofont icofont-group-students"></i></span>
                                        <span class="pcoded-mtext">Data Mahasiswa</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="<?php echo $classbuku;?>">
                                    <a href="index.php?halaman=data-buku">
                                        <span class="pcoded-micon"><i class="icofont icofont-book"></i></span>
                                        <span class="pcoded-mtext">Data Buku</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </nav>