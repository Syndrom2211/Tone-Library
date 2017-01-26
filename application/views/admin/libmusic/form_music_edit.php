<div id="page-wrapper">
            <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Library Music
                        </h1>
                    </div>
                </div>
				
                <!-- /. ROW  -->
				
				<div class="panel panel-default">
				<div class="panel-heading">
				Edit Music
				</div>    
				<form role="form" action="<?php echo base_url('libmusic/prosesedit'); ?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id_music" value="<?php echo $mc->row('id_music'); ?>">
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Artist Music</label>
                            <input style="width: 200px;" name="artist_music" value="<?php echo $mc->row('artist_music'); ?>" class="form-control">
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Judul Music</label>
                            <input style="width: 200px;" name="judul_music" value="<?php echo $mc->row('judul_music'); ?>" class="form-control">
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Album Music</label>
                            <input style="width: 200px;" name="album_music" value="<?php echo $mc->row('album_music'); ?>" class="form-control">
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Link Music</label>
                            <input style="width: 200px;" name="link_music" value="<?php echo $mc->row('link_music'); ?>" class="form-control">
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Kategori Music</label>
							<select name="kategori_music">
							<?php
							foreach($k as $kategori){
							?>
								<option value="<?php echo $kategori->nama_kategori; ?>"><?php echo $kategori->nama_kategori; ?></option>
							<?php
							}
							?>
							</select>
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Cover Kategori</label>
							<select name="cover_kategori">
							<?php
							foreach($k as $kategori){
							?>
								<option value="<?php echo $kategori->gambar_kategori; ?>">
								<?php echo $kategori->gambar_kategori; ?></option>
							<?php
							}
							?>
							</select>
                    </div>
					<button style="margin:5px;margin-left:15px;width:200px;" name="submit" class="btn btn-default"> Simpan</button>
				</form>
				<a href="<?php echo base_url('libmusic'); ?>"><button style="margin:5px;margin-left:15px;width:200px;" class="btn btn-danger"> Batal</button></a>
				</div>
			</div>