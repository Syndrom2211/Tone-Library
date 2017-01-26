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
                           List Music
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
							<style type="text/css">
							th{
								text-align:center;
							}
							</style>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
											<th>Artist</th>
											<th>Judul</th>
											<th>Album</th>
											<th>Link</th>
											<th>Kategori</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
									<?php
									$i = 1;
									foreach($query as $row){
									?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['id_music']; ?></td>
											<td><?php echo $row['artist_music']; ?></td>
											<td><?php echo $row['judul_music']; ?></td>
											<td><?php echo $row['album_music']; ?></td>
											<td><?php echo $row['link_music']; ?></td>
											<td><?php echo $row['kategori_music']; ?></td>
											<td align="center">
												<a href="<?php echo base_url().'libmusic/edit/'.$row['id_music']; ?>"><button class="btn btn-primary"> Edit</button></a>
												<a href="<?php echo base_url().'libmusic/hapus/'.$row['id_music']; ?>"><button onclick="return confirm('Yakin mau hapus ?');" class="btn btn-danger"> Delete</button></a>
											</td>
										</tr>
									<?php
									$i++;
									}
									?>
                                    </tbody>
                                </table>
								<div class="pagination">
									<?php echo $this->pagination->create_links(); ?>
								</div>
								<br/>
								<a href="<?php echo base_url('libmusic/tambah/'); ?>"><button class="btn btn-success"> Tambah</button></a>
                            </div>
                        </div>
                    </div>
				</div>