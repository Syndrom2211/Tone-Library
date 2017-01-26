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
				<form role="form" action="<?php echo base_url('artikel/prosestambah'); ?>" method="POST" enctype="multipart/form-data">
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Judul</label>
                            <input style="width: 200px;" name="judul_artikel" placeholder="Judul Artikel..." class="form-control">
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Tanggal</label>
							<input style="width: 200px;" type="text" id="datepicker" name="tgl_artikel">
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Kategori</label>
							<select>
							<?php
							foreach($tg as $tags){
							?>
								<option value="<?php echo $tags->nama_tags; ?>"><?php echo $tags->nama_tags; ?></option>
							<?php
							}
							?>
							</select>
                    </div>
					<div class="form-group">
                            <label>Isi Artikel</label>
                            <textarea name="isi_artikel" class="tinyMCE" rows="3"></textarea>
                    </div>
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Penulis Artikel</label>
                            <input style="width: 200px;" name="penulis_artikel" placeholder="Penulis Artikel..." class="form-control">
                    </div>
					<button name="submit" style="margin:5px;margin-left:15px;width:200px;" class="btn btn-default"> Tambah</button>
				</form>
				<a href="<?php echo base_url('artikel'); ?>"><button style="margin:5px;margin-left:15px;width:200px;" class="btn btn-danger"> Batal</button></a>
				</div>
			</div>