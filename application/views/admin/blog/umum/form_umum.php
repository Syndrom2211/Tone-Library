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
                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
						<div class="panel-body" style="overflow-x:scroll;">
						<?php echo $error; ?>
						<?php echo form_open_multipart('setblog/prosesedit'); ?>
						<input type="hidden" name="id_blog_u" value="<?php echo $sb->row('id_blog_u'); ?>">
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Judul Blog
								</div>
									<div class="panel-body">
										<p><input style="margin-top:5px;" name="judul_blog" class="form-control" id="disabledInput" type="text" value="<?php echo $sb->row('judul_blog'); ?>"></p>
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
										<p><input style="margin-top:5px;" name="deskripsi_blog" class="form-control" id="disabledInput" type="text" value="<?php echo $sb->row('deskripsi_blog'); ?>"></p>
									</div>
									<div class="panel-footer"><i><font size="2px">*Input disable sebelum diedit</font></i></div>
								</div>
							</div>	

							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Logo Blog
								</div>
									<div class="panel-body">
										<div align="center" style="margin-top:10px;" class="form-group">
											<input type="file" name="userfile" size="20" />
										</div>
									</div>
									<div class="panel-footer"><i><font size="2px">*Logo harus hitam dan transparan</font></i></div>
								</div>
							</div>							
							<input style="width:170px;margin:5px;margin-left:15px;" class="btn btn-default" type="submit" value="Simpan" name="go_update" class="btn btn-default" />		
                        <?php echo form_close(); ?>
							<a href="<?php echo base_url('setblog'); ?>"><button style="width:170px;margin:5px;margin-left:15px;" class="btn btn-danger"> Batal</button></a>
						</div>
                    </div>
                </div>
			</div>