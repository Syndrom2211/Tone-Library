        <div id="page-wrapper">
            <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
							Kontak Kami
                        </h1>
                    </div>
                </div>
				
                <!-- /. ROW  -->
				<div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Info Kontak<span style="float:right;" class="fa fa-arrow-circle-down"></span></a>
                        </h4>
                    </div>
					<?php
					foreach($kn as $infokontak){
					?>
                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
						<div class="panel-body">
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									No Telepon
								</div>
									<div class="panel-body">
										<p><input style="margin-top:5px;" class="form-control" id="disabledInput" type="text" placeholder="<?php echo $infokontak->telepon_infokontak; ?>" disabled=""></p>
									</div>
									<div class="panel-footer"><i><font size="2px">*Input disable sebelum diedit</font></i></div>
								</div>
							</div>
							
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Alamat
								</div>
									<div class="panel-body">
										<p><input style="margin-top:5px;" class="form-control" id="disabledInput" type="text" placeholder="<?php echo $infokontak->alamat_infokontak; ?>" disabled=""></p>
									</div>
									<div class="panel-footer"><i><font size="2px">*Input disable sebelum diedit</font></i></div>
								</div>
							</div>
							
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-info">
								<div class="panel-heading">
									Email
								</div>
									<div class="panel-body">
										<p><input style="margin-top:5px;" class="form-control" id="disabledInput" type="text" placeholder="<?php echo $infokontak->email_infokontak; ?>" disabled=""></p>
									</div>
									<div class="panel-footer"><i><font size="2px">*Input disable sebelum diedit</font></i></div>
								</div>
							</div> 
							<a href="<?php echo base_url().'infokontak/edit/'.$infokontak->id_infokontak; ?>"><button style="width:170px;float:left;margin-left:15px;" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>							
                        </div>
                    </div>
					<?php
					}
					?>
                </div>
			</div>