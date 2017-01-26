<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" target="_blank" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>images/logo-white-adm.png" alt="" width="200px" /></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><?php echo anchor('setting', 'Settings');?>
                        </li>
                        <li class="divider"></li>
                        <li><?php echo anchor('logout', '<i class="fa fa-sign-out fa-fw"></i>Logout', array('onclick' => "return confirm('Anda yakin akan logout ?')")); ?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li><?php echo anchor('admin', '<i class="fa fa-dashboard"></i>Dashboard');?></li>
                     <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Timeline<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
							<li><?php echo anchor('umum', 'Settings');?></li>
                            <li><?php echo anchor('tentang', 'Tentang');?></li>
                            <li><?php echo anchor('software', 'Software');?></li>
							<li><?php echo anchor('libkategori', 'Library');?> </li>
							<li><?php echo anchor('infokontak', 'Kontak');?> </li>
                        </ul>
                    </li>
					<li><?php echo anchor('libmusic', '<i class="fa fa-bar-chart-o"></i>Library Music');?></li>
                    <li>
                        <a href="#"><i class="fa fa-table"></i> Blog<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
								<?php echo anchor('setblog', 'Settings');?>
                            </li>
                            <li>
                               <?php echo anchor('artikel', 'Artikel');?>
                            </li>
							<li>
                                <?php echo anchor('komentar', 'Komentar');?>
                            </li>
							<li>
                                <?php echo anchor('pengurus', 'Pengurus');?>
                            </li>
							<li>
                                <?php echo anchor('tags', 'Tags');?>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->