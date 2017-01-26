		<!-- Navigation panel -->
            <nav class="main-nav js-stick">
			<?php
			foreach($sb as $setblog){
			?>
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="<?php echo base_url("page/library"); ?>" class="logo">
                            <img src="<?php echo base_url("images/".$setblog->logo_blog); ?>" alt="" />
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist">
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="<?php echo base_url(); ?>page/home" class="mn-has-sub"><<< Kembali ke portal</a>                                
                            </li>
                            <!-- End Item With Sub -->
                            
                        </ul>
                    </div>
                    <!-- End Main Menu -->
                    

                </div>
            </nav>
            <!-- End Navigation panel -->
            
            
            <!-- Head Section -->
            <section class="small-section bg-gray-lighter">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Library Music</h1>
                            <div class="hs-line-4 font-alt black">
                               Kumpulan Music Electronic
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            <?php
			}
			?>        
            
            
            <!-- Related Products -->
            <section class="page-section">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Related Music
                    </h2>
							<!-- Search Widget -->
                            <div class="widget">
                                <form method="get" action="<?php echo base_url("page/caridata_music"); ?>" class="form-inline form" role="form">
                                    <div class="search-wrap">
                                        <button class="search-button animate" type="submit" title="Cari Artikel" value="Cari">
                                            <i class="fa fa-search"></i>
                                        </button>
                                        <input type="text" class="form-control search-field" placeholder="Cari Judul Music..." name="cari">
                                    </div>
                                </form>
                            </div>
                            <!-- End Search Widget -->
							
                    <!-- Products Grid -->
                            <div class="row multi-columns-row">
							<?php
							foreach($cari as $row){
							?>
                                <!-- Shop Item -->
                                <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">
                                    
									<div class="post-prev-title font-alt align-center">
                                        <img src="<?php echo base_url()."images/portfolio/".$row->cover_kategori; ?>" width="200px" />
                                    </div>
									
                                    <div class="post-prev-title font-alt align-center">
                                        Artist : <?php echo $row->artist_music; ?>
                                    </div>
									
									<div class="post-prev-title font-alt align-center">
                                        Judul : <?php echo $row->judul_music; ?>
                                    </div>
									
									<div class="post-prev-title font-alt align-center">
                                        Album : <?php echo $row->album_music; ?>
                                    </div>
									
									<div class="post-prev-title font-alt align-center">
                                        Kategori : <?php echo $row->kategori_music; ?>
                                    </div>
                                    
                                    <div class="post-prev-more align-center">
                                        <a target="_blank" href="<?php echo $row->link_music; ?>" class="btn btn-mod btn-gray btn-round"><i class="fa fa-download"></i> Listen & Download</a>
                                    </div>
                                    
                                </div>
                                <!-- End Shop Item -->
							<?php
							}
							?>
							</div>
                    <!-- End Products Grid -->
                    
					<div class="pagination">
						<?php echo $this->pagination->create_links(); ?>
					</div>
							
                </div>
            </section>
            <!-- End Related Products -->