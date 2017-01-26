<div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Library
                        </h1>
                    </div>
                </div>
				
                <!-- /. ROW  -->
					<div class="panel panel-default">
                        <div class="panel-heading">
                           Kategori Library
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
							<style type="text/css">
							th{
								text-align:center;
							}
							td{
								text-align:center;
							}
							</style>
                                    <thead>
                                        <tr>
                                            <th>No</th>
											<th>Kategori</th>
											<th>Gambar</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
									<?php
									$i = 1;
									foreach($k as $kategori){
									?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $i; ?></td>
											<td><?php echo $kategori->nama_kategori; ?></td>
											<td><img src="<?php echo base_url("images/portfolio/".$kategori->gambar_kategori); ?>" width="100px" /></td>
											<td><a href="<?php echo base_url().'libkategori/edit/'.$kategori->id_kategori; ?>"><button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a></td>
										</tr>
									<?php
									$i++;
									}
									?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
				</div>