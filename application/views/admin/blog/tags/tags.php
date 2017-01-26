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
                           List Tags
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
											<th>Nama</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
									<?php
									$i = 1;
									foreach($query as $row){
									?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['id_blog_t']; ?></td>
											<td><?php echo $row['nama_tags']; ?></td>
											<td align="center">
												<a href="<?php echo base_url().'tags/edit/'.$row['id_blog_t']; ?>"><button class="btn btn-primary"> Edit</button></a>
												<a href="<?php echo base_url().'tags/hapus/'.$row['id_blog_t']; ?>"><button onclick="return confirm('Yakin mau hapus ?');" class="btn btn-danger"> Delete</button></a>
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
								<a href="<?php echo base_url('tags/tambah/'); ?>"><button class="btn btn-success"> Tambah</button></a>
                            </div>
                        </div>
                    </div>
				</div>