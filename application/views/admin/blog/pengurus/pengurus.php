        <div id="page-wrapper">
            <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Pengurus Blog
                        </h1>
                    </div>
                </div>
				
                <!-- /. ROW  -->
				<div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Pengurus<span style="float:right;" class="fa fa-arrow-circle-down"></span></a>
                        </h4>
                    </div>
					<?php
					foreach($p as $pengurus){
					?>
                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
						<div class="panel-body">
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Nama
								</div>
									<div class="panel-body">
										<p><input style="margin-top:5px;" class="form-control" id="disabledInput" type="text" placeholder="<?php echo $pengurus->nama_pengurus; ?>" disabled=""></p>
									</div>
									<div class="panel-footer"><i><font size="2px">*Input disable sebelum diedit</font></i></div>
								</div>
							</div>
							
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Deskripsi
								</div>
									<div class="panel-body">
										<p><input style="margin-top:5px;" class="form-control" id="disabledInput" type="text" placeholder="<?php echo $pengurus->deskripsi_pengurus; ?>" disabled=""></p>
									</div>
									<div class="panel-footer"><i><font size="2px">*Input disable sebelum diedit</font></i></div>
								</div>
							</div>
							
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Photo
								</div>
									<div style="background:#fff;" class="panel-body">
										<center><img src="<?php echo base_url("images/".$pengurus->gambar_pengurus); ?>" width="40px" /></center>
									</div>
									<div class="panel-footer"><i><font size="2px">*Gambar berukuran 100x123</font></i></div>
								</div>
							</div>
							
							<a href="<?php echo base_url().'pengurus/edit/'.$pengurus->id_blog_p; ?>"><button style="margin-left:15px;width:170px;" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>							
                        </div>
                    </div>
					<?php
					}
					?>
                </div>
			</div>