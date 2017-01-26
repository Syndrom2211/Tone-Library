        <div id="page-wrapper">
            <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Settings
                        </h1>
                    </div>
                </div>
				
                <!-- /. ROW  -->
				<div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">Pengaturan Website<span style="float:right;" class="fa fa-arrow-circle-down"></span></a>
                        </h4>
                    </div>
					<?php
					foreach($w as $website){
					?>
					<div id="collapseOne" class="panel-collapse collapse" style="height: auto;">
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Judul Website</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab">Logo & Background</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
									<p><div class="panel-body">
											<div class="col-md-4 col-sm-4">
											<div class="panel panel-info">
											<div class="panel-heading">
												Judul Website
											</div>
												<div class="panel-body">
													<p><input style="margin-top:5px;" class="form-control" id="disabledInput" type="text" placeholder="<?php echo $website->judul_web; ?>" disabled=""></p>
												</div>
												<div class="panel-footer">
													<i><font size="2px">*Input disable sebelum diedit</font></i>
												</div>
											</div>
										</div>
										<a href="<?php echo base_url().'umum/edit_wj/'.$website->id_web; ?>"><button style="width:170px;" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>
										</div>
									</p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <p><div class="panel-body">
											<div class="col-md-4 col-sm-4">
												<div class="panel panel-info">
												<div class="panel-heading">
													Logo Website
												</div>
													<div style="background:#555;" class="panel-body">
														<center><img src="images/upl_web/<?php echo $website->logo_web; ?>" width="100px"/></center>
													</div>
													<div class="panel-footer">
														<i><font size="2px">*Logo transparant putih 236x54</font></i>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-sm-4">
												<div class="panel panel-info">
												<div class="panel-heading">
													Background Website
												</div>
													<div class="panel-body">
														<center><img src="images/upl_web/<?php echo $website->bg_web; ?>" width="40px" /></center>
													</div>
													<div class="panel-footer">
														<i><font size="2px">*Background ukuran 1920x1080</font></i>
													</div>
												</div>
											</div>
										<a href="<?php echo base_url().'umum/edit_wp/'.$website->id_web; ?>"><button style="width:170px;" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>
										</div>
									</p>
                                </div>
                            </div>
                        </div>
					</div>
					<?php
					}
					?>
                </div>
				
				<div class="panel panel-default">
				<?php
				foreach($d as $deskripsi){
				?>
                    <div class="panel-heading">
                        <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">Deskripsi Website<span style="float:right;" class="fa fa-arrow-circle-down"></span></a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Deskripsi 1
								</div>
									<div class="panel-body">
										<input style="margin-top:5px;" class="form-control" id="disabledInput" type="text" placeholder="<?php echo $deskripsi->deskripsi_1; ?>" disabled="">
									</div>
									<div class="panel-footer"><i><font size="2px">*Input disable sebelum diedit</font></i></div>
								</div>
							</div>
							
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Deskripsi 2
								</div>
									<div class="panel-body">
										<input style="margin-top:5px;" class="form-control" id="disabledInput" type="text" placeholder="<?php echo $deskripsi->deskripsi_2; ?>" disabled="">
									</div>
									<div class="panel-footer"><i><font size="2px">*Input disable sebelum diedit</font></i></div>
								</div>
							</div>
							
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Deskripsi 3
								</div>
									<div class="panel-body">
										<input style="margin-top:5px;" class="form-control" id="disabledInput" type="text" placeholder="<?php echo $deskripsi->deskripsi_3; ?>" disabled="">
									</div>
									<div class="panel-footer"><i><font size="2px">*Input disable sebelum diedit</font></i></div>
								</div>
							</div> 
							<a href="<?php echo base_url().'umum/edit_d/'.$deskripsi->id_deskripsi; ?>"><button style="float:right;margin-right:15px;width:170px;" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>							
                        </div>
                    </div>
				<?php
				}
				?>
                </div>
			</div>