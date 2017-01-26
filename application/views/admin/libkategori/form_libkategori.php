<div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Kategori Library
                        </h1>
                    </div>
                </div>
				
                <!-- /. ROW  -->
				
				<div class="panel panel-default">
				<div class="panel-heading">
				List Kategori Library
				</div>    
				<?php echo $error; ?>
				<?php echo form_open_multipart('libkategori/prosesedit'); ?>
				<input type="hidden" name="id_kategori" value="<?php echo $k->row('id_kategori'); ?>">
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Nama</label>
                            <input style="width: 200px;" name="nama_kategori" value="<?php echo $k->row('nama_kategori'); ?>" class="form-control">
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Gambar</label>
                            <input style="width: 200px;" type="file" name="userfile" size="20" />
                    </div>
					<input class="btn btn-default" style="margin:5px;margin-left:15px;width:200px;" type="submit" value="Simpan" name="go_update" class="btn btn-default" />
				<?php echo form_close(); ?>
				<a href="<?php echo base_url('libkategori'); ?>"><button style="width:200px;margin:5px;margin-left:15px;" class="btn btn-danger"> Batal</button></a>
				</div>
			</div>