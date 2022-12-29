

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
                                        <li class="list-inline-item">Tickets</li>
										 <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
										 <li class="list-inline-item">New Ticket</li>
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
                            <h1 class="title-4">Create - New Ticket
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
                                        <center><strong>WTC </strong> - Ticket Details</center>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">                                           
                                            
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Choose Project</label>
                                                </div>
                                                <div class="col-12 col-md-9">
												<select name="p_id" id="select" class="form-control">                 
													<option value="">Please Select a Project</option>
													<?php
													foreach($projects as $projects)
													{
														?>
														<option value="<?=$projects['p_id'];?>"><?=$projects['p_title'];?></option>
														<?php
													}
													?>
                                                </select>  
												</div>												 
                                            </div>
											
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Ticket Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="t_title" class="form-control" placeholder="Enter the Ticket title">                                                    
                                                </div>  
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Ticket Code</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" id="text-input" name="t_code" class="form-control" value="<?='WTCTIC'.rand(1000,9999);?>" readonly>
                                                    
                                                </div>
												 <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Ticket Created By</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" id="text-input" name="t_created_by_1" class="form-control" value="<?=$this->session->userdata('user_name');?>" readonly>
                                                    <input type="hidden" id="text-input" name="t_created_by" class="form-control" value="<?=$this->session->userdata('u_id');?>" readonly>
                                                </div>
                                            </div>
											
											
											<div class="row form-group">
                                               
												<div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tickted Status</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                   <input type="text" id="text-input" name="text-input" class="form-control" value="Ticket Created" readonly>
                                                    <input type="hidden" id="text-input" name="t_status_id" class="form-control" value="1" readonly>                                                    
                                                </div>
												 <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tickted Created Date</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" id="text-input" name="t_created_date" class="form-control" value="<?=date('Y-m-d')?>" readonly>                                                    
                                                </div>
                                            </div>
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Ticket Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="t_description" id="textarea-input" rows="3" placeholder="Content..." class="form-control"></textarea>
                                                </div>
                                            </div>
											<input type="hidden" name="add_ticket">
                                           <div class="card-footer">
												<center><button type="submit" class="btn btn-theme btn-sm">
													<i class="fa fa-dot-circle-o"></i> Submit
												</button>
												</center>
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