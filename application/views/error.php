<!-- Home Section -->
			<?php
			foreach($w as $website){
			?>
            <section class="home-section bg-dark-alfa-50 parallax-2" data-background="<?php echo base_url('images/upl_web/'.$website->bg_web); ?>">
                <div class="js-height-full">
                    
                    <!-- Hero Content -->
                    <div class="home-content container">
                        <div class="home-text">
                            <div class="hs-cont">
                                
                                <!-- Headings -->
                                <div class="hs-wrap">
                                    
                                    <div class="hs-line-13 font-alt mb-10">
                                        404
                                    </div>
                                    
                                    <div class="hs-line-4 font-alt mb-40">
                                        Halaman yang anda cari tidak ditemukan.
                                    </div>
                                    
                                    <div class="local-scroll">                                        
                                        <a href="<?php echo base_url(); ?>" class="btn btn-mod btn-w btn-round btn-small"><i class="fa fa-angle-left"></i> Kembali ke home</a>                                        
                                    </div>
                                    
                                </div>
                                <!-- End Headings -->
                                
                            </div>
                        </div>
                    </div>
                    <!-- End Hero Content -->
                    
                </div>
            </section>
            <!-- End Home Section -->
            
            
            <!-- Navigation panel -->
            <nav class="main-nav dark transparent stick-fixed">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="<?php echo base_url(); ?>" class="logo">
                            <img src="<?php echo base_url('images/upl_web/'.$website->logo_web); ?>" alt="" />
                        </a>
                    </div>
			<?php
			}
			?>
			<?php
			foreach($kn as $kontak){
			?>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist scroll-nav local-scroll">
                            <li class="active"><a href="mailto:support@bestlooker.pro"><i class="fa fa-envelope"></i> <?php echo $kontak->email_infokontak; ?></a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> <?php echo $kontak->telepon_infokontak; ?></a></li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
			<?php
			}
			?>
            <!-- End Navigation panel -->