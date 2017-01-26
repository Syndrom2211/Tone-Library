<div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Software DAW
                        </h1>
                    </div>
                </div>
				
                <!-- /. ROW  -->
				
				<div class="panel panel-default" style="overflow-x:scroll;">
				<div class="panel-heading">
				List Software DAW
				</div>    
				<?php echo $error; ?>
				<?php echo form_open_multipart('software/prosesedit'); ?>
				<input type="hidden" name="id_software" value="<?php echo $s->row('id_software'); ?>">
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Judul</label>
                            <input style="width: 200px;" name="judul_software" value="<?php echo $s->row('judul_software'); ?>" class="form-control">
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Penjelasan</label>
                            <textarea name="penjelasan_software" class="tinyMCE" rows="3"><?php echo $s->row('penjelasan_software'); ?></textarea>
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Nama</label>
                            <input style="width: 200px;" name="nama_software" value="<?php echo $s->row('nama_software'); ?>" class="form-control">
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Deskripsi 1</label>
                            <textarea name="deskripsi_software1" class="tinyMCE" rows="3"><?php echo $s->row('deskripsi_software1'); ?></textarea>
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Deskripsi 2</label>
                            <textarea name="deskripsi_software2" class="tinyMCE" rows="3"><?php echo $s->row('deskripsi_software1'); ?></textarea>
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Gambar</label>
                            <input style="width: 200px;" type="file" name="userfile" size="20" />
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Nama ID</label>
                            <input style="width: 200px;" name="nama_id" value="<?php echo $s->row('nama_id'); ?>" class="form-control">
                    </div>
					<input class="btn btn-default" style="margin:5px;margin-left:15px;width:200px;" type="submit" value="Simpan" name="go_update" class="btn btn-default" />
				<?php echo form_close(); ?>
				<a href="<?php echo base_url('software'); ?>"><button style="width:200px;margin:5px;margin-left:15px;" class="btn btn-danger"> Batal</button></a>
				</div>
			</div>