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
					<div class="panel panel-default">
                        <div class="panel-heading">
                            List Software DAW
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
											<th>Judul</th>
											<th>Penjelasan</th>
                                            <th>Nama</th>
                                            <th>Deskripsi 1</th>
                                            <th>Deskripsi 2</th>
											<th>Gambar</th>
											<th>NamaID</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
									<?php
									$i = 1;
									foreach($s as $software){
									?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $i; ?></td>
											<td><?php echo $software->judul_software; ?></td>
											<td><?php echo $software->penjelasan_software; ?></td>
                                            <td><?php echo $software->nama_software; ?></td>
                                            <td><?php echo $software->deskripsi_software1; ?></td>
                                            <td><?php echo $software->deskripsi_software2; ?></td>
											<td><img src="<?php echo base_url('images/daw/'.$software->gambar_software); ?>" width="100px" /></td></td>
											<td><?php echo $software->nama_id; ?></td>
											<td><a href="<?php echo base_url().'software/edit/'.$software->id_software; ?>"><button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a></td>
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