   <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                       <li class="list-inline-item active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Clients</li>
										 <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
										 <li class="list-inline-item">New Client</li>
                                    </ul>
                                </div>
                                <form class="au-form-icon--sm" action="" method="post">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                                    <button class="au-btn--submit2" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Add - New WTC Client
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

		<div class="container">
		<div class="row">
			<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <center><strong>New </strong> - WTC Client</center>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="<?=base_url();?>admin/add_users" method="post" enctype="multipart/form-data" class="form-horizontal">                                           
                                            
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Client Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="user_name" class="form-control" placeholder="Enter the Client Name">                                                    
                                                </div>
                                            </div>
											
                                           
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Client Contact Number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="user_contact" class="form-control" placeholder="Enter the Client Contact Number">                                                    
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Client - Organization Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="user_organization" class="form-control" placeholder="Enter the Client Organization Name">                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Client Email ID</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="user_email" class="form-control" placeholder="Enter the Client Email Id">                                                    
                                                </div>
                                            </div>
                                           
                                          
											<div class="card-footer">
                                       <input type="hidden" name="add_users">
											 <center><button type="submit" class="btn btn-theme btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button></center>
                                    </div>
											
                                        
										
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
           </div>
		</div>  
		   
		   
            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="http://www.worldtechnologycorporate.com/">World Technology Corporate</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

   