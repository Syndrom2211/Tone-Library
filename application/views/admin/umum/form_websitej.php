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
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Pengaturan Website<span style="float:right;" class="fa fa-arrow-circle-down"></span></a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
						<div class="panel-body">
						<form role="form" action="<?php echo base_url('umum/prosesedit_wj'); ?>" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_web" value="<?php echo $w->row('id_web'); ?>">
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Judul Website
								</div>
									<div class="panel-body">
										<p><input style="margin-top:5px;" name="judul_web" class="form-control" id="disabledInput" type="text" value="<?php echo $w->row('judul_web'); ?>"></p>
									</div>
									<div class="panel-footer"><i><font size="2px">*Input disable sebelum diedit</font></i></div>
								</div>
							</div>
							<button name="submit" style="margin-bottom:5px;width:200px;" class="btn btn-default"> Simpan</button>		
                        </form>
							<a href="<?php echo base_url('umum'); ?>">
								<button style="width:200px;" class="btn btn-danger"> Batal</button>
							</a>
						</div>
                    </div>
                </div>
			</div>							
							