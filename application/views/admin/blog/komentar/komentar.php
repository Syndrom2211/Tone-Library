<div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Komentar Blog
                        </h1>
                    </div>
                </div>
				
                <!-- /. ROW  -->
					<div class="panel panel-default">
                        <div class="panel-heading">
                           List Komentar
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
                                            <th>ID Komen</th>
											<th>ID Artikel</th>
											<th>Nama</th>
											<th>Email</th>
											<th>Pesan</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
									<?php
									$i = 1;
									foreach($query as $row){
									?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['id_blog_k']; ?></td>
											<td><?php echo $row['id_blog_a']; ?></td>
											<td><?php echo $row['nama_komentar']; ?></td>
											<td><?php echo $row['email_komentar']; ?></td>
											<td><?php echo $row['pesan_komentar']; ?></td>
											<td align="center">
												<a href="<?php echo base_url().'komentar/hapus/'.$row['id_blog_k']; ?>"><button onclick="return confirm('Yakin mau hapus ?');" class="btn btn-danger"> Delete</button></a>
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
                            </div>
                        </div>
                    </div>
				</div>