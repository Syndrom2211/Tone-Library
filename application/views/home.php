			<!-- Navigation panel -->
            <nav class="main-nav dark transparent stick-fixed">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
					<?php
					foreach($w as $website){
					?>
                    <div class="nav-logo-wrap local-scroll">
                        <a href="#top" class="logo">
                            <img src="<?php echo base_url('images/upl_web/'.$website->logo_web); ?>" />
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist scroll-nav local-scroll">
                            <li class="active"><a href="#home">Beranda</a></li>
                            <li><a href="#tentang">Tentang</a></li>
							<li><a href="#software">Software</a></li>
                            <li><a href="#library">Library</a></li>
                            <li><a href="#artikel">Artikel</a></li>
                            <li><a href="#kontak">Kontak</a></li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navigation panel -->
			
			
			<!-- Home Section -->
            <section class="home-section bg-dark-alfa-30 parallax-2" data-background="<?php echo base_url('images/upl_web/'.$website->bg_web); ?>" id="home">
                <div class="js-height-full">
                    
                    <!-- Hero Content -->
                    <div class="home-content">
                        <div class="home-text">
                            
                            <h1 class="hs-line-8 no-transp font-alt mb-50 mb-xs-30">
                                <?php echo $website->judul_web; ?>
                            </h1>
                    <?php
					}
					?>        
                            <h2 class="hs-line-7 mb-50 mb-xs-30">
                                <span class="text-rotate">
								<?php
								foreach($d as $deskripsi){
								?>
                                    <?php echo $deskripsi->deskripsi_1; ?>,
                                    <?php echo $deskripsi->deskripsi_2; ?>,
                                    <?php echo $deskripsi->deskripsi_3; ?>
								<?php
								}
								?>
                                </span>
                            </h2>
                            
                        </div>
                    </div>
                    <!-- End Hero Content -->
                    
                    <!-- Scroll Down -->
                    <div class="local-scroll">
                        <a href="#tentang" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
                    </div>
                    <!-- End Scroll Down -->
                    
                </div>
            </section>
            <!-- End Home Section -->            
            
            <!-- About Section -->
            <section class="page-section" id="tentang">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
                        Tentang Kami
                    </h2>
                    <div class="section-text mb-50 mb-sm-20">
                        <div class="row">
                            
                            <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                <!-- -->
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="row">                        
                        <!-- Team item -->
						<?php
						foreach($t as $tentang){
						?>
                        <div class="col-sm-4 mb-xs-30 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                
                                <div class="team-item-image">
                                    
                                    <img src="<?php echo base_url('images/team/'.$tentang->gambar_ttg); ?>" alt="" />
                                    
                                    <div class="team-item-detail">
                                        
                                        <h4 class="font-alt normal">Motto :</h4>
                                        
                                        <p>
                                            <?php echo $tentang->motto_ttg ?>
                                        </p>
                                        
                                        <div class="team-social-links">
                                            <a href="<?php echo $tentang->link_fb_ttg; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="<?php echo $tentang->link_twitter_ttg; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="team-item-descr font-alt">
                                    
                                    <div class="team-item-name">
                                        <?php echo $tentang->nama_ttg; ?>
                                    </div>
                                    
                                    <div class="team-item-role">
                                        <?php echo $tentang->deskripsi_ttg; ?>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
						<?php
						}
						?>
                        <!-- End Team item -->  						
                    </div>
                    
                </div>
            </section>
            <!-- End About Section -->
            
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->
            
            <!-- Services Section -->
			
            <section class="page-section" id="software">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                       Software Digital Audio Workstation
                    </h2>
                    
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tpl-alt-tabs font-alt pt-30 pt-sm-0 pb-30 pb-sm-0">
					<?php
					foreach($s as $software){
					?>
                        <li>
                            <a href="#service-<?php echo $software->nama_id; ?>" data-toggle="tab">
                                
                                <div class="alt-tabs-icon">
                                    <img src="<?php echo base_url('images/daw/'.$software->gambar_software); ?>" width="50px" />
                                </div>
                                
                                <?php echo $software->nama_software; ?>
                            </a>
                        </li>
					<?php
					}
					?>
                    </ul>
                    <!-- End Nav tabs -->
                    
                    <!-- Tab panes -->
                    <div class="tab-content tpl-tabs-cont">
                        <?php
						foreach($s as $softwared){
						?>
                        <!-- Service Item -->
                        <div class="tab-pane fade" id="service-<?php echo $softwared->nama_id; ?>">
                            
                            <div class="section-text">
                                <div class="row">
                                    <div class="col-md-4 mb-md-40 mb-xs-30">
                                        <blockquote class="mb-0">
                                            <p align="justify">
                                                <?php echo $softwared->penjelasan_software; ?>
                                            </p>
                                            <footer>
                                                <?php echo $softwared->judul_software; ?>
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                        <div align="justify"><?php echo $softwared->deskripsi_software1; ?></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                        <div align="justify"><?php echo $softwared->deskripsi_software2; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php
						}
						?>
                        <!-- End Service Item -->
                    </div>
                    <!-- End Tab panes -->
                </div>
            </section>
            <!-- End Services Section -->
            
            
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->
            
            
            <!-- Portfolio Section -->
            <section class="page-section pb-0" id="library">
                <div class="relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Library Music<br>
						<a href="<?php echo base_url('page/library'); ?>" class="section-more">Go to Library <i class="fa fa-angle-right"></i></a>
						
                    </h2>
						
					
                    
                    <!-- Works Grid -->
					
                    <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white hide-titles" id="work-grid">
                        
                        <!-- Work Item (Lightbox) -->
						<?php
						foreach($k as $kategori){
						?>
                        <li class="work-item mix photography">
                            <a href="<?php echo base_url("images/portfolio/".$kategori->gambar_kategori); ?>" class="work-lightbox-link mfp-image">
                                <div class="work-img">
                                    <img src="<?php echo base_url("images/portfolio/".$kategori->gambar_kategori); ?>" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title"><?php echo $kategori->nama_kategori; ?></h3>
                                </div>
                            </a>
                        </li>
						<?php
						}
						?>
                        <!-- End Work Item -->
                                                                 
                    </ul>
                    <!-- End Works Grid -->
                    
                </div>
            </section>
            <!-- End Portfolio Section -->            
            
			<!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->
			
            <!-- Blog Section -->
            <section class="page-section" id="artikel">
                <div class="container relative">
                    
                    <h2 style="margin-bottom:200px;" class="section-title font-alt align-left mb-70 mb-sm-40">
                        Artikel Blog
                        
                        <a href="<?php echo base_url('page/blog'); ?>" class="section-more right">Visit blog untuk artikel lainnya <i class="fa fa-angle-right"></i></a>
                        
                    </h2>
                    
                    <div class="row multi-columns-row">
                        <?php 
						foreach($at as $artikel){
						?>
                        <!-- Post Item -->
                        <div style="margin-bottom:100px;" class="col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s">
                            
                            <div class="post-prev-title font-alt">
                                <?php echo $artikel->judul_artikel; ?>
                            </div>
                            
                            <div class="post-prev-info font-alt">
                                <?php echo $artikel->penulis_artikel; ?> | <?php echo $artikel->tgl_artikel; ?>
                            </div>
                            
                            <div class="post-prev-more">
                                <a href="<?php echo base_url()."page/artikel/".$artikel->id_blog_a; ?>" class="btn btn-mod btn-gray btn-round">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            
                        </div>
                        <!-- End Post Item -->
                        <?php
						}
						?>
                    </div>
                    
                </div>
            </section>
            <!-- End Blog Section -->
            
			<!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->
			
            <!-- Contact Section -->
            <section class="page-section" id="kontak">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Kontak
                    </h2>
                    
                    <div class="row mb-60 mb-xs-40">
                        
                        <div class="col-md-8 col-md-offset-2">
                            <div class="row">
                                <?php
								foreach($kn as $kontak){
								?>
                                <!-- Phone -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Telepon
                                        </div>
                                        <div class="ci-text">
                                            <?php echo $kontak->telepon_infokontak; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Phone -->
                                
                                <!-- Address -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Alamat
                                        </div>
                                        <div class="ci-text">
                                            <?php echo $kontak->alamat_infokontak; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Address -->
                                
                                <!-- Email -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Email
                                        </div>
                                        <div class="ci-text">
                                            <a href="mailto:<?php echo $kontak->email_infokontak; ?>"><?php echo $kontak->email_infokontak; ?></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Email -->
                                <?php
								}
								?>								
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Contact Form -->                            
                    <div class="row">
                        <?php echo validation_errors(); ?>
                        <form method="POST" action="<?php echo base_url().("page/kirim");?>" class="form contact-form" id="contact_form">
                        <div class="col-md-8 col-md-offset-2">
                                <div class="clearfix">
                                    
                                    <div class="cf-left-col">
                                        
                                        <!-- Name -->
                                        <div class="form-group">
                                            <input type="text" name="nama" id="name" class="input-md round form-control" placeholder="Nama" pattern=".{3,100}" required>
                                        </div>
                                        
                                        <!-- Email -->
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="input-md round form-control" placeholder="Email" pattern=".{5,100}" required>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="cf-right-col">
                                        
                                        <!-- Message -->
                                        <div class="form-group">                                            
                                            <textarea name="pesan" id="message" class="input-md round form-control" style="height: 84px;" placeholder="Pesan"></textarea>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="clearfix">
                                    
                                    <div class="cf-left-col">
                                        
                                        <!-- Inform Tip -->                                        
                                        <div class="form-tip pt-20">
                                            <i class="fa fa-info-circle"></i> Semua form di isi
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="cf-right-col">
                                        
                                        <!-- Send Button -->
                                        <div class="align-right pt-10">
											<input id="kirimpesan" type="submit" value="Kirim Pesan" class="submit_btn btn btn-mod btn-medium btn-round" />
                                        </div>
                                        
                                    </div>
                                    
                                </div>                            
                        </div>
						</form>
                    </div>
                    <!-- End Contact Form -->
                    
                </div>
            </section>
            <!-- End Contact Section -->    