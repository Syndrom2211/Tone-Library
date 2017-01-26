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
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Pengaturan Blog<span style="float:right;" class="fa fa-arrow-circle-down"></span></a>
                        </h4>
                    </div>
					<?php
					foreach($sb as $setblog){
					?>
                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
						<div class="panel-body" style="overflow-x:scroll;">
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Judul Blog
								</div>
									<div class="panel-body">
										<p><input style="margin-top:5px;" class="form-control" id="disabledInput" type="text" placeholder="<?php echo $setblog->judul_blog; ?>" disabled=""></p>
									</div>
									<div class="panel-footer"><i><font size="2px">*Input disable sebelum diedit</font></i></div>
								</div>
							</div>
							
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Deskripsi Blog
								</div>
									<div class="panel-body">
										<p><input style="margin-top:5px;" class="form-control" id="disabledInput" type="text" placeholder="<?php echo $setblog->deskripsi_blog; ?>" disabled=""></p>
									</div>
									<div class="panel-footer"><i><font size="2px">*Input disable sebelum diedit</font></i></div>
								</div>
							</div>
							
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Logo Blog
								</div>
									<div style="background:#fff;" class="panel-body">
										<center><img src="<?php echo base_url("images/".$setblog->logo_blog); ?>" /></center>
									</div>
									<div class="panel-footer"><i><font size="2px">*Logo harus hitam dan transparan 236x54</font></i></div>
								</div>
							</div>
							
							<a href="<?php echo base_url().'setblog/edit/'.$setblog->id_blog_u; ?>"><button style="margin-left:15px;width:170px;" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</button></a>							
                        </div>
                    </div>
					<?php
					}
					?>
                </div>
			</div>