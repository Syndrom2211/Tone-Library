<div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Setting Admin
                        </h1>
                    </div>
                </div>
				
                <!-- /. ROW  -->
				
				<div class="panel panel-default">
				<div class="panel-heading">
				 Panel Admin
				</div>        
				<?php
				foreach($s as $setting){
				?>
					<div class="panel-body">
						Username : <input style="margin-top:5px;width:250px;" class="form-control" id="disabledInput" type="text" placeholder="<?php echo $setting->username; ?>" disabled="">
						Password : <input style="margin-top:5px;width:250px;" class="form-control" id="disabledInput" type="password" placeholder="<?php echo $setting->password; ?>" disabled="">
						<p class="help-block"><i><font size="2px">*Input disable sebelum di edit.</font></i></p>
						<a href="<?php echo base_url().'setting/edit/'.$setting->id_admin; ?>"><button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>
					</div>
				<?php
				}
				?>
				</div>
			</div>