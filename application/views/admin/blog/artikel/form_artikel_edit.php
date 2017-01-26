<div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Artikel Blog
                        </h1>
                    </div>
                </div>
				
                <!-- /. ROW  -->
				
				<div class="panel panel-default">
				<div class="panel-heading">
				List Artikel
				</div>    
				<form role="form" action="<?php echo base_url('artikel/prosesedit'); ?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id_blog_a" value="<?php echo $at->row('id_blog_a'); ?>">
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Judul</label>
                            <input style="width: 200px;" name="judul_artikel" value="<?php echo $at->row('judul_artikel'); ?>" class="form-control">
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Tanggal</label>
							<input style="width: 200px;" type="text" id="datepicker" name="tgl_artikel" value="<?php echo $at->row('tgl_artikel'); ?>" class="form-control">
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Kategori</label>
							<select name="kategori_artikel">
							<?php
							foreach($tg as $tags){
							?>
								<option value="<?php echo $tags->nama_tags; ?>"><?php echo $tags->nama_tags; ?></option>
							<?php
							}
							?>
							</select>
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Isi Artikel</label>
                            <textarea class="tinyMCE" name="isi_artikel" rows="3"><?php echo $at->row('isi_artikel'); ?></textarea>
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Penulis Artikel</label>
                            <input style="width: 200px;" name="penulis_artikel" value="<?php echo $at->row('penulis_artikel'); ?>" class="form-control">
                    </div>
					<button name="submit" style="margin:5px;margin-left:15px;width:200px;" class="btn btn-default"> Simpan</button>
				</form>
				<a href="<?php echo base_url('artikel'); ?>"><button style="margin:5px;margin-left:15px;width:200px;" class="btn btn-danger"> Batal</button></a>
				</div>
			</div>