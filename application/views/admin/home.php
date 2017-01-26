        <div id="page-wrapper">
            <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Dashboard 
                        </h1>
                    </div>
                </div>
				
                <!-- /. ROW  -->
				
				<div class="panel panel-default">
				<div class="panel-heading">
				 Pesan
				</div>        
					<div class="panel-body"> 
						<div class="alert alert-success">
						<?php
						foreach($s as $setting){
							echo "Selamat datang ".$setting->username." di halaman administrator.";
						}
						?>
						</div>
					</div>
				</div>
			</div>