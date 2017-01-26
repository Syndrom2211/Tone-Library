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
						<div class="panel-body" style="overflow-x:scroll;">
						<?php echo $error; ?>
						<?php echo form_open_multipart('umum/prosesedit_wp'); ?>
						<input type="hidden" name="id_web" value="<?php echo $w->row('id_web'); ?>">
							<div style="width:550px" class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Logo & Background
								</div>
									<div class="panel-body">
										<div align="center" style="margin-top:10px;" class="form-group">
										<style>
											td{
												padding:10px;
											}
										</style>
										<table cellpadding="0" cellspacing="0">
										<tr>										
											<td>Logo web</td>
											<td>Background web</td>
											
										</tr>
										<tr>
											<?php for ($i = 1; $i <= 2; $i++){ ?>
											<td>
												<?php echo form_upload(array('name' => 'picture'.$i,
																			 'size' => '36'
												));
												?>
											</td>
											<?php } ?>
										</tr>
										</table>
										</div>
									</div>
									<div class="panel-footer">
										<font color="red"><b>Rekomendasi :</b></font>
										<br/>
										<i><font size="2px">*Logo transparant putih 236x54</font></i>
										<br/>
										<i><font size="2px">*Background ukuran 1920x1080</font></i>
									</div>
								</div>
							</div>
							<input type="hidden" name="temp_pic1" value="<?php echo $w->row('logo_web'); ?>" />
							<input type="hidden" name="temp_pic2" value="<?php echo $w->row('bg_web'); ?>" />
							<input type="submit" value="Simpan" style="margin-bottom:5px;width:200px;" class="btn btn-default" name="go_upload" />
                        <?php echo form_close(); ?>
							<a href="<?php echo base_url('umum'); ?>"><button style="width:200px;" class="btn btn-danger"> Batal</button></a>
						</div>
                    </div>
                </div>
			</div>							
							