<div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Setting Admin
                        </h1>
                    </div>
                </div>
				
                <!-- /. ROW  -->
				
				<div class="panel panel-default">
				<div class="panel-heading">
				 Panel Admin
				</div>   
					<div class="panel-body">
					<form role="form" action="<?php echo base_url('setting/prosesedit'); ?>" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id_admin" value="<?php echo $s->row('id_admin'); ?>">
						Username : <input name="username" style="margin-top:5px;width:250px;" class="form-control" id="disabledInput" type="text" value="<?php echo $s->row('username'); ?>">
						Password : <input name="password" style="margin-top:5px;width:250px;" class="form-control" id="disabledInput" type="password" placeholder="Ketik Password..">
						<p class="help-block"><i><font size="2px">*Password isi teks biasa saja tidak usah md5.</font></i></p>
						<button name="submit" class="btn btn-default"><i class=" fa fa-refresh "></i> Simpan</button>
					</form>
						<a href="<?php echo base_url('setting'); ?>"><button style="float:right;" class="btn btn-danger"> Batal</button></a>
					</div>
				</div>
			</div>