<div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Tentang Kami
                        </h1>
                    </div>
                </div>
				
                <!-- /. ROW  -->
				
				<div class="panel panel-default">
				<div class="panel-heading">
				Profile
				</div>    
				<?php echo $error; ?>
				<?php echo form_open_multipart('tentang/prosesedit'); ?>
				<input type="hidden" name="id_ttg" value="<?php echo $t->row('id_ttg'); ?>">
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Nama</label>
                            <input style="width: 200px;" name="nama_ttg" value="<?php echo $t->row('nama_ttg'); ?>" class="form-control">
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Deskripsi</label>
                            <input style="width: 200px;" name="deskripsi_ttg" value="<?php echo $t->row('deskripsi_ttg'); ?>" class="form-control">
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Motto</label>
                            <input style="width: 200px;" name="motto_ttg" value="<?php echo $t->row('motto_ttg'); ?>" class="form-control">
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Gambar</label>
                            <input type="file" name="userfile" size="20" />
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Link Facebook</label>
                            <input style="width: 200px;" name="link_fb_ttg" value="<?php echo $t->row('link_fb_ttg'); ?>" class="form-control">
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Link Twitter</label>
                            <input style="width: 200px;" name="link_twitter_ttg" value="<?php echo $t->row('link_twitter_ttg'); ?>" class="form-control">
                    </div>
					<input type="submit" style="margin:5px;margin-left:15px;width:200px;" value="Simpan" name="go_update" class="btn btn-default" />
				<?php echo form_close(); ?>
				<a href="<?php echo base_url('tentang'); ?>"><button style="width:200px;margin:5px;margin-left:15px;" class="btn btn-danger"> Batal</button></a>
				</div>
			</div>