			<!-- Navigation panel -->
            <nav class="main-nav js-stick">
			<?php
			foreach($sb as $setblog){
			?>
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="<?php echo base_url(); ?>" class="logo">
                            <img src="<?php echo base_url("images/".$setblog->logo_blog); ?>" alt="" />
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
					
                    </div>
                    <!-- End Main Menu -->
            <?php
			}
			?>        

                </div>
            </nav>
            <!-- End Navigation panel -->
			
			<!-- Head Section -->
            <section class="small-section bg-dark-lighter">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Administrator Login</h1>
                            <div class="hs-line-4 font-alt">
                                Silahkan login wahai admin !
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            
            <!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <!-- Tab panes -->
                    <div class="tab-content tpl-minimal-tabs-cont section-text">
                        
                        <div class="tab-pane fade in active" id="mini-one">
                            
                            <!-- Login Form -->                            
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    
									<?php
										$attributes = array('name' => 'login_form', 'id' => 'login_form');
										echo form_open('login/aksi', $attributes); 
									?>
                                        <div class="clearfix">
											<!-- PESAN START -->
												<?php if(!empty($pesan)){ ?>
													<div class="alert error">
														<i class="fa fa-lg  fa-times-circle"></i> <?php echo $pesan; ?>
													</div>
												<?php } ?>
											<!-- PESAN END -->
                                            <!-- Username -->
                                            <div class="form-group">
                                                <input type="text" name="username" id="username" class="input-md round form-control" placeholder="Username" value="<?php echo set_value('username'); ?>" pattern=".{3,100}" required>
                                            </div>
                                            
                                            <!-- Password -->
                                            <div class="form-group">
                                                <input type="password" name="password" id="password" class="input-md round form-control" placeholder="Password" value="<?php echo set_value('username'); ?>" pattern=".{5,100}" required>
                                            </div>

                                            <div class="form-group">
                                                <input type="checkbox" name="setcookie" value="true" id="setcookie" />Remember Me
                                            </div>
                                                
                                        </div>
                                        
                                        <div class="clearfix">
                                            
                                            <div class="cf-left-col">
                                                
                                                <!-- Inform Tip -->                                        
                                                <div class="form-tip pt-20">
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="cf-right-col">
                                                
                                                <!-- Send Button -->
                                                <div class="align-right pt-10">
                                                    <button class="submit_btn btn btn-mod btn-medium btn-round" id="login-btn">Login</button>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                            <!-- End Login Form -->
                            
                        </div>
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Section -->