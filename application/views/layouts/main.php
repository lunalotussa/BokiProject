<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BOKI</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
    </head>
    
    <body class="hold-transition skin-yellow sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">BOKI</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">BOKI</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo site_url('resources/img/profile3.png');?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Welcome <?php echo $nama;?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="<?php echo site_url('dashboard/dash/');?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <!--PEMASUKAN---->
                        <li>
                            <a href="#">
                                <i class="fa fa-share"></i> <span>Pemasukan</span>
                            </a>
                            <ul class="treeview-menu">
                                 <!--saldo---->
                                <li>
                                    <a href="<?php echo site_url('saldo/index');?>">
                                        <i class="fa fa-edit"></i><span>Saldo Awal</span>
                                    </a>
                                </li>
                                <!--saldo---->
                                <!--pembelian---->
                               <!--  <li>
                                    <a href="#">
                                        <span>Pembelian</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class="active">
                                            <a href="<?php echo site_url('pembelian/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                        <li>
                                            <a href="<?php echo site_url('pembelian/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                        </li>
                                    </ul>
                                </li> -->
                                <!--pembelian---->
                                <!--penjualan---->
                                <li>
                                    <a href="#">
                                    <i class="fa fa-folder"></i><span>Penjualan</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class="active">
                                            <a href="<?php echo site_url('penjualan/add');?>"><i class="fa fa-plus"></i> Add</a>
                                        </li>
                                <li>
                                    <a href="<?php echo site_url('penjualan/index');?>"><i class="fa fa-list-ul"></i> Daftar Penjualan</a>
                                </li>
                                <!--penjualan---->
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-reply"></i> <span>Pengeluaran</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('pengeluaran/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('pengeluaran/index');?>"><i class="fa fa-list-ul"></i> Daftar Pengeluaran</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i> <span>Hutang & Piutang</span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="<?php echo site_url('pengeluaran/showHutang');?>"><i class="fa fa-list-ul"></i> Hutang</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('pengeluaran/showHutangLain');?>"><i class="fa fa-list-ul"></i> Hutang Lain-Lain</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('penjualan/showPiutang');?>"><i class="fa fa-list-ul"></i> Piutang</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-archive"></i><span>Aset</span>
                            </a>
                            <ul class="treeview-menu">
                               <li>
                            <a href="<?php echo site_url('aset_lancar/index');?>">
                             <i class="fa fa-edit"></i><span>Aset Lancar</span>
                            </a>
                            <!-- <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('aset_lancar/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('aset_lancar/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="#">
                              <i class="fa fa-folder"></i><span>Aset Tetap</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('aset_tetap/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('aset_tetap/index');?>"><i class="fa fa-list-ul"></i> Daftar Aset Tetap</a>
                                </li>
                            </ul>
                        </li> 
                            </ul>
                        </li>
						<!-- <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Hutang</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('utang/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('utang/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li> -->
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Modal</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('modal/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('modal/showPenambahan');?>"><i class="fa fa-list-ul"></i> Daftar Penambahan Modal</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('modal/showPengurangan');?>"><i class="fa fa-list-ul"></i> Daftar Pengurangan Modal</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-print"></i><span>Laporan</span>
                            </a>
                            <ul class="treeview-menu">
                            <li>
                            <a href="#">
                             <i class="fa fa-archive"></i><span>Laporan Posisi Keuangan</span>
                            </a>
                             <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('LPK/bulanan');?>"><i class="fa fa-list-ul"></i>LPK Bulan Ini</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('LPK');?>"><i class="fa fa-list-ul"></i>LPK Tahun Ini</a>
                                </li>
                             </ul>
                            </li>
                            <li>
                            <a href="#">
                             <i class="fa fa-archive"></i><span>Laporan Laba Rugi</span>
                            </a>
                             <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('LLR/bulanan');?>"><i class="fa fa-list-ul"></i>LLR Bulan Ini</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('LLR');?>"><i class="fa fa-list-ul"></i>LLR Tahun Ini</a>
                                </li>
                             </ul>
                            </li>
                        </ul>
                    </li>
                        <!-- <li>
                            <a href="#">
                                <i class="fa fa-user"></i><span>Management User</span>
                            </a>
                                <ul class="treeview-menu">
                                    <li class="active">
                                        <a href="<?php echo site_url('user/add');?>"><i class="fa fa-plus"></i> Add</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo site_url('user/index');?>"><i class="fa fa-list"></i> Daftar User</a>
                                    </li>
                                </ul>
                        </li> -->
                        <li>
                            <a href="<?php echo site_url('dashboard/logout');?>">
                                <i class="fa fa-sign-out"></i> <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Generated By <a href="https://www.instagram.com/lunalotussa/?hl=en">Luna Lotussa</a> Boki 1.0</strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>
    </body>
</html>
