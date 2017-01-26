        <div id="page-wrapper">
            <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Kontak Kami
                        </h1>
                    </div>
                </div>
				
                <!-- /. ROW  -->
				<div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Info Kontak<span style="float:right;" class="fa fa-arrow-circle-down"></span></a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
						<div class="panel-body">
						<form role="form" action="<?php echo base_url('infokontak/prosesedit'); ?>" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_infokontak" value="<?php echo $kn->row('id_infokontak'); ?>">
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									 No Telepon 
								</div>
									<div class="panel-body">
										<p><input style="margin-top:5px;" name="telepon_infokontak" class="form-control" id="disabledInput" type="text" value="<?php echo $kn->row('telepon_infokontak'); ?>"></p>
									</div>
									<div class="panel-footer"><i><font size="2px">*Input disable sebelum diedit</font></i></div>
								</div>
							</div>
							
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Alamat 
								</div>
									<div class="panel-body">
										<p><input style="margin-top:5px;" name="alamat_infokontak" class="form-control" id="disabledInput" type="text" value="<?php echo $kn->row('alamat_infokontak'); ?>"></p>
									</div>
									<div class="panel-footer"><i><font size="2px">*Input disable sebelum diedit</font></i></div>
								</div>
							</div>
							
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Email
								</div>
									<div class="panel-body">
										<p><input style="margin-top:5px;" name="email_infokontak" class="form-control" id="disabledInput" type="text" value="<?php echo $kn->row('email_infokontak'); ?>"></p>
									</div>
									<div class="panel-footer"><i><font size="2px">*Input disable sebelum diedit</font></i></div>
								</div>
							</div>											
							<button name="submit" style="width:170px;margin:5px;margin-left:12px;" class="btn btn-default"> Simpan</button>		
                        </form>
							<a href="<?php echo base_url('infokontak'); ?>"><button style="width:170px;margin:5px;margin-left:12px;" class="btn btn-danger"> Batal</button></a>
						</div>
                    </div>
                </div>
			</div>