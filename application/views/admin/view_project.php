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
                                        <li class="list-inline-item">Projects</li>
										 <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
										 <li class="list-inline-item">View Project</li>
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
                            <h1 class="title-4">View - WTC Project
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
                                        <center><strong>View </strong> - WTC Project</center>
                                    </div>
                                    <div class="card-body card-block">
                                        <form  method="post" enctype="multipart/form-data" class="form-horizontal">                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Project Type</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check-inline form-check">
														<div class="col-md-12">
                                                        <label for="inline-radio1" class="form-check-label ">
                                                            <input type="radio" id="inline-radio1" <?=$p_details->p_type==1 ? 'checked' : ''?> name="project_type" value="1" class="form-check-input" readonly>Individual Project 
                                                        </label>
														</div>
														<div class="col-md-12">
                                                        <label for="inline-radio2" class="form-check-label ">
                                                            <input type="radio" id="inline-radio2" <?=$p_details->p_type==2 ? 'checked' : ''?> name="project_type" value="2" class="form-check-input" readonly>Corporate Project
                                                        </label>            
														</div>
                                                    </div>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Project Category</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select id="select" name="project_category" class="form-control" readonly>
                                                        <option value="0">Please select</option>
                                                        <option value="1" <?=$p_details->p_id==1 ? 'selected' : ''?>>CRM (CUSTOMER RELATION MANAGEMENT)</option>
                                                        <option value="2" <?=$p_details->p_id==2 ? 'selected' : ''?>>SOFETWARE DESIGN & DEVELOPMENT</option>
                                                        <option value="3" <?=$p_details->p_id==3 ? 'selected' : ''?>>ACADEMIC & CONTENT WRITTING</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Project Interior-Category</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="project_title" class="form-control" value="<?=$p_details->pi_category?>" readonly>                                                    
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Project Code</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="project_code" class="form-control" value="WTCPR101" readonly>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Project Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="project_title" class="form-control" value="<?=$p_details->p_title?>" readonly>                                                    
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Project Start Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="project_startdate" class="form-control" value="<?=$p_details->p_startdate?>" readonly>                                                    
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Project End Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="project_enddate" class="form-control" value="<?=$p_details->p_enddate?>" readonly>                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Project Status</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="project_title" class="form-control" value="<?=$p_details->p_status?>" readonly>                            
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Project Compelted Percentage</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="project_percentage" class="form-control" value="<?=$p_details->p_percentage;?>" readonly>                                                    
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Project Duration</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="project_duration" class="form-control" value="<?=$p_details->p_duration;?>" readonly>                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Project Description/Notes</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="project_description" id="textarea-input" rows="9" class="form-control" readonly><?=$p_details->p_description;?></textarea>
                                                </div>
                                            </div>
                                           
                                         
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-multiple-input" class=" form-control-label">Project - Related Files</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<?php
													if(!empty($p_details->p_files)) {
													$filedata = explode(',',$p_details->p_files);
													for($i=0;$i<count($filedata);$i++){ ?>
                                                    <input type="text"  name="project_files" class="form-control" value="<?=$filedata[$i];?>" readonly>
													<?php } } else { ?>
													<input type="text"  name="project_files" class="form-control" value="You don't have any project files attchment for this project" readonly>
													
													<?php } ?>
												</div>
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Client/Company Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="client_or_company_name" class="form-control" value="<?=$p_details->p_client_id;?>" readonly>                                                    
                                                </div>
                                            </div>
                                          
                                        </form>
                                    </div>
									<?php if(!empty($tickets)){
									foreach($tickets as $tickets){
										?>
                                     <div class="card-header">
                                        <center><strong>View </strong> - WTC Project Ticket Details</center>
                                    </div>
									 <div class="card-body card-block">
										<div class="table-responsive table-responsive-data2">
											<table class="table table-data2">
											<thead>
											<tr>
												<th>
													<label class="au-checkbox">
														<input type="checkbox">
														<span class="au-checkmark"></span>
													</label>
												</th>
												<th>Ticket title</th>
												<th>Ticket code</th>
												<th>Ticket Raised By</th>                                            
												<th>Ticket status</th>                                            
												<th></th>
											</tr>
										</thead>
										<tbody>
										 <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td><?=$tickets['t_title'];?></td>
                                            <td>
                                                <span class="block-email"><?=$tickets['t_code'];?></span>
                                            </td>
                                            <td class="desc"><?=$tickets['user_name'];?></td>
                                          
                                            <td>
                                                <span class="status--process"><?=$tickets['t_status'];?></span>
                                            </td>
                                           
                                            <td>
                                                <div class="table-data-feature">
                                                    <a href="<?=base_url();?>admin/view_ticket/<?=$tickets['t_id'];?>">
													<button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button></a>
                                                    <a href="<?=base_url();?>admin/edit_ticket/<?=$tickets['t_id'];?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Respond">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button></a>
                                                                                                     
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
										</tbody>
										</table>
										</div>
									 </div>
									<?php } } ?>
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

   