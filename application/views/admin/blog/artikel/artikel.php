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
											<th>Judul</th>
											<th>Tanggal</th>
											<th>Kategori</th>
											<th>Penulis</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
									<?php
									$i = 1;
									foreach($query as $row){
									?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['id_blog_a']; ?></td>
											<td><?php echo $row['judul_artikel']; ?></td>
											<td><?php echo $row['tgl_artikel']; ?></td>
											<td><?php echo $row['kategori_artikel']; ?></td>
											<td><?php echo $row['penulis_artikel']; ?></td>
											<td align="center">
												<a href="<?php echo base_url().'artikel/edit/'.$row['id_blog_a']; ?>"><button class="btn btn-primary"> Edit</button></a>
												<a href="<?php echo base_url().'artikel/hapus/'.$row['id_blog_a']; ?>"><button onclick="return confirm('Yakin mau hapus ?');" class="btn btn-danger"> Delete</button></a>
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
								<a href="<?php echo base_url('artikel/tambah/'); ?>"><button class="btn btn-success"> Tambah</button></a>
                            </div>
                        </div>
                    </div>
				</div>