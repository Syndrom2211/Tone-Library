<div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Tags Blog
                        </h1>
                    </div>
                </div>
				
                <!-- /. ROW  -->
				
				<div class="panel panel-default">
				<div class="panel-heading">
				Tambah Tags
				</div>    
				<form role="form" action="<?php echo base_url('tags/prosestambah'); ?>" method="POST" enctype="multipart/form-data">
					<div class="form-group" style="margin:25px 0px 25px 15px;">
                            <label>Nama</label>
                            <input style="width: 200px;" name="nama_tags" placeholder="Isi nama tags.." class="form-control">
                    </div>
					<button style="margin:5px;margin-left:15px;width:200px;" name="submit" class="btn btn-default"> Tambah</button>
				</form>
				<a href="<?php echo base_url('tags'); ?>"><button style="margin:5px;margin-left:15px;width:200px;" class="btn btn-danger"> Batal</button></a>
				</div>
			</div>