
        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
           

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <center><h1 class="title-4">Welcome back
                                <span>WTC Admin Login!</span>
                            </h1></center>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

          

            <!-- STATISTIC CHART-->
            <section class="statistic-chart">
                <div class="container">                  
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <!-- TOP CAMPAIGN-->
                            <div class="top-campaign">
                                <center><img src="<?=base_url();?>images/wtc_logo.png" alt="CoolAdmin" /></center>
                                 <form action="<?=base_url();?>admin/admin_login_check" method="post" enctype="multipart/form-data" class="form-horizontal">                                           
										
										  <?=isset($error) ? '<center><h4 class="text-danger"><b>In-valid Credentials</b></h4></center>' : ''?> 
										
											<div class="row form-group">
                                               
                                                <div class="col-12 col-md-12">
													 <label for="text-input" class=" form-control-label">Admin Email</label>
                                                    <input type="text" id="text-input" name="admin_email" class="form-control" placeholder="Enter Admin Login Email Id">                                                    
                                                </div>
                                            </div>
											<div class="row form-group">
                                               
                                                <div class="col-12 col-md-12">
													 <label for="text-input" class=" form-control-label">Admin Password</label>
                                                    <input type="password" id="text-input" name="admin_password" class="form-control" placeholder="Enter Admin Login Password">                                                    
                                                </div>
                                            </div>
											
											
											<center><button type="submit" class="btn btn-theme btn-sm shadow">
                                            <i class="fa fa-dot-circle-o"></i> Login
                                        </button>
                                        
										</center>
											
											
                                        </form>
                                   
                            </div>
                            <!-- END TOP CAMPAIGN-->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC CHART-->

        </div>

    </div>
