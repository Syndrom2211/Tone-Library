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
                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
						<div class="panel-body" style="overflow-x:scroll;">
						<?php echo $error; ?>
						<?php echo form_open_multipart('pengurus/prosesedit'); ?>
						<input type="hidden" name="id_blog_p" value="<?php echo $p->row('id_blog_p'); ?>">
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Nama
								</div>
									<div class="panel-body">
										<p><input style="margin-top:5px;" name="nama_pengurus" class="form-control" id="disabledInput" type="text" value="<?php echo $p->row('nama_pengurus'); ?>"></p>
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
										<p><input style="margin-top:5px;" name="deskripsi_pengurus" class="form-control" id="disabledInput" type="text" value="<?php echo $p->row('deskripsi_pengurus'); ?>"></p>
									</div>
									<div class="panel-footer"><i><font size="2px">*Input disable sebelum diedit</font></i></div>
								</div>
							</div>	

							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Photo
								</div>
									<div class="panel-body">
										<div align="center" style="margin-top:10px;" class="form-group">
											<input type="file" name="userfile" size="20" />
										</div>
									</div>
									<div class="panel-footer"><i><font size="2px">*Logo harus putih dan transparan</font></i></div>
								</div>
							</div>							
							<input style="margin:5px;margin-left:15px;width:170px;" class="btn btn-default" type="submit" value="Simpan" name="go_update" class="btn btn-default" />
						<?php echo form_close(); ?>
							<a href="<?php echo base_url('pengurus'); ?>"><button style="margin:5px;margin-left:15px;width:170px;" class="btn btn-danger"> Batal</button></a>
						</div>
                    </div>
                </div>
			</div>