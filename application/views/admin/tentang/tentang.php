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
                        <div class="panel-body">
                            <div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
							<style type="text/css">
							th{
								text-align:center;
							}
							td{
								text-align:justify;
							}
							</style>
                                    <thead>
                                        <tr>
                                            <th>No</th>
											<th>Nama</th>
											<th>Deskripsi</th>
											<th>Motto</th>
											<th>Gambar</th>
											<th>Link FB</th>
											<th>Link Twitter</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
									<?php
									$i = 1;
									foreach($t as $tentang){
									?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $i; ?></td>
											<td><?php echo $tentang->nama_ttg; ?></td>
											<td><?php echo $tentang->deskripsi_ttg; ?></td>
											<td><?php echo $tentang->motto_ttg; ?></td>
											<td><img src="<?php echo base_url('images/team/'.$tentang->gambar_ttg); ?>" width="100px" /></td>
											<td><?php echo $tentang->link_fb_ttg; ?></td>
											<td><?php echo $tentang->link_twitter_ttg; ?></td>
											<td><a href="<?php echo base_url().'tentang/edit/'.$tentang->id_ttg; ?>"><button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a></td>
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