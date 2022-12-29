

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
                                        <li class="list-inline-item">Admin Dashboard</li>
										 <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
										 <li class="list-inline-item">Notifications</li>
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

          

		<div class="container">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        <center><strong>WTC </strong> - Notification Details</center>
                                    </div>
                                    <div class="card-body card-block">
									<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">   
									<?php 
									$i=1;
									foreach($notifications as $notifications){?>
                                                                                
                                            
											<div class="row form-group">
                                                <div class="col col-md-1">
                                                    <label for="text-input" class=" form-control-label">
													<input type="text" id="text-input" name="text-input" class="form-control" value="<?=$i;?>" readonly> 
												</label>
                                                </div>
                                                <div class="col-12 col-md-9">
												<input type="text" id="text-input" name="text-input" class="form-control" value="<?=$notifications['n_data'];?>" readonly> 
												</div>
												<div class="col col-md-2">
                                                    <label for="text-input" class=" form-control-label">
													<a href="<?=base_url();?>admin/edit_ticket/<?=$notifications['t_id'];?>" class="btn btn-info">View</a> 
												</label>
                                                </div>
                                            </div>
											
									<?php $i++; }?>
									 </form>
                                    </div>
								
                                </div>
            </div>
			<div class="col-lg-2"></div>
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