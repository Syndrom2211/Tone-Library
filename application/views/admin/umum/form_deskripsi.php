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
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Deskripsi Website<span style="float:right;" class="fa fa-arrow-circle-down"></span></a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
						<div class="panel-body">
						<form role="form" action="<?php echo base_url('umum/prosesedit_d'); ?>" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_deskripsi" value="<?php echo $d->row('id_deskripsi'); ?>">
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									 Deskripsi 1 
								</div>
									<div class="panel-body">
										<p><input style="margin-top:5px;" name="deskripsi_1" class="form-control" id="disabledInput" type="text" value="<?php echo $d->row('deskripsi_1'); ?>"></p>
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
										<p><input style="margin-top:5px;" name="deskripsi_2" class="form-control" id="disabledInput" type="text" value="<?php echo $d->row('deskripsi_2'); ?>"></p>
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
										<p><input style="margin-top:5px;" name="deskripsi_3" class="form-control" id="disabledInput" type="text" value="<?php echo $d->row('deskripsi_3'); ?>"></p>
									</div>
									<div class="panel-footer"><i><font size="2px">*Input disable sebelum diedit</font></i></div>
								</div>
							</div>											
							<button name="submit" class="btn btn-default" style="margin-left:15px;margin-bottom:5px;width:200px;"> Simpan</button>		
                        </form>
							<a href="<?php echo base_url('umum'); ?>"><button style="margin-left:15px;width:200px;" class="btn btn-danger"> Batal</button></a>
						</div>
                    </div>
                </div>
			</div>