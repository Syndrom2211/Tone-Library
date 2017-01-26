			<!-- Navigation panel -->
            <nav class="main-nav js-stick">
			<?php
			foreach($sb as $setblog){
			?>
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="<?php echo base_url("page/blog"); ?>" class="logo">
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
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0"><?php echo $setblog->judul_blog; ?></h1>
                            <div class="hs-line-4 font-alt black">
                               <?php echo $setblog->deskripsi_blog; ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            <?php
			}
			?>
            
            <!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <div class="row">
                        
                        <!-- Content -->
                        <div class="col-sm-8">
                            <!-- Post -->
                            <div class="blog-item">
                                <!-- Post Title -->
                                <h2 class="blog-item-title font-alt"><a href="<?php echo base_url().'page/artikel/'.$at->row('id_blog_a'); ?>"><?php echo $at->row('judul_artikel'); ?></a></h2>
                                
                                <!-- Author, Categories, Comments -->
                                <div class="blog-item-data">
                                    <i class="fa fa-clock-o"></i> <?php echo $at->row('tgl_artikel'); ?>
                                    <span class="separator">&nbsp;</span>
                                    <i class="fa fa-user"></i> <?php echo $at->row('penulis_artikel'); ?>
                                    <span class="separator">&nbsp;</span>
                                    <i class="fa fa-folder-open"></i>
                                    <a href="#"><?php echo $at->row('kategori_artikel'); ?></a>
                                </div>
                                
								<!-- Artikel -->
                                <div class="blog-item-body">
                                    <p>
									<?php 
										echo "<font style='text-align:justify;'>".$at->row('isi_artikel')."</font>";
									?>
                                    </p>
									<div align="right" class="mb-10">
										<a href="<?php echo base_url()."page/blog"; ?>" class="btn btn-mod btn-border btn-large btn-round">Kembali</a>
									</div>
									<hr>
									<div class="alert info">
										<i class="fa fa-lg fa-comments-o"></i> List Komentar
									</div>
									
									<?php 
									foreach($ko as $komentar){
									?>
									<!-- Toggle -->
									<dl class="toggle">
										<dt>
											<a href=""><?php echo "Nama : ".$komentar->nama_komentar."
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email : ".$komentar->email_komentar.""; ?></a>
										</dt>
										<dd>
											<?php echo $komentar->pesan_komentar; ?>
										</dd>
									</dl>
									<!-- End Toggle -->
									<?php
									}
									?>
									<hr>
									
									<div class="alert info">
										<i class="fa fa-lg fa-comments-o"></i> Silahkan berikan komentar dibawah ini dengan sopan
									</div>
									
									<form role="form" action="<?php echo base_url('komentar/prosestambah'); ?>" method="POST" enctype="multipart/form-data">
										<!-- KOMENTAR -->
										<div class="mb-20 mb-md-10">
											<!-- ID Artikel -->
											<input type="hidden" name="id_blog_a" id="name" class="input-md form-control" value="<?php echo $at->row('id_blog_a'); ?>" maxlength="100">
										</div>
										
										<div class="mb-20 mb-md-10">
											<!-- Nama -->
											<input type="text" name="nama_komentar" id="name" class="input-md form-control" placeholder="Nama" maxlength="100">
										</div>
										
										<div class="mb-20 mb-md-10">
											<!-- Email -->
											<input type="email" name="email_komentar" id="email" class="input-md form-control" placeholder="Email" maxlength="100">
										</div> 
									
										<div class="mb-20 mb-md-10">
											<!-- PESAN -->
											<textarea name="pesan_komentar" id="text" class="input-md form-control" rows="8" placeholder="Pesan" maxlength="400"></textarea>
										</div>
										
										<div align="right" class="mb-10">
											<input type="submit" id="kirimkomentar" class="btn btn-mod btn-border btn-large btn-round" value="Kirim" />
										</div>
									</form>
									<hr>
                                </div>
							
							<div class="pagination">
								<?php echo $this->pagination->create_links(); ?>
							</div>
                            </div>

                            <!-- End Post -->
                            
                        </div>
                        <!-- End Content -->
                        
                        <!-- Sidebar -->
                        <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                            
                            <!-- Search Widget -->
                            <div class="widget">
                                <form method="get" action="<?php echo base_url("page/caridata_artikel"); ?>" class="form-inline form" role="form">
                                    <div class="search-wrap">
                                        <button class="search-button animate" type="submit" title="Cari Artikel" value="Cari">
                                            <i class="fa fa-search"></i>
                                        </button>
                                        <input type="text" class="form-control search-field" placeholder="Cari Artikel..." name="cari">
                                    </div>
                                </form>
                            </div>
                            <!-- End Search Widget -->
                            
							<!-- Widget -->
							<?php
							foreach($p as $pengurus){
							?>
                            <div class="widget">
                                
                                <h5 class="widget-title font-alt">Pengurus Blog</h5>
                                
                                <div class="widget-body">
                                    <div class="widget-text clearfix">
                                        
                                        <img src="<?php echo base_url("images/".$pengurus->gambar_pengurus); ?>" alt="" width="70" class="img-circle left img-left">
                                        Nama : <?php echo $pengurus->nama_pengurus; ?>
                                        Deskripsi : <?php echo $pengurus->deskripsi_pengurus; ?>
                                    
                                    </div>
                                </div>
                                
                            </div>     
							<?php
							}
							?>
                            <!-- End Widget -->
							
                            <!-- Widget -->
                            <div class="widget">
                                
                                <h5 class="widget-title font-alt">Tags</h5>
                                
                                <div class="widget-body">
                                    <div class="tags">
										<?php
										foreach($tg as $tags){
										?>
                                        <a href='<?php echo base_url()."page/tags/".$tags->nama_tags; ?>'><?php echo $tags->nama_tags; ?></a>
										<?php
										}
										?>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- End Widget -->
                            
                        </div>
                        <!-- End Sidebar -->
                    </div>
                    
                </div>
            </section>
            <!-- End Section -->