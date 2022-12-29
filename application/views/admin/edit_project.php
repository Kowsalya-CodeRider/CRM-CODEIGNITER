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
                            <h1 class="title-4">Update - WTC Project
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
                                        <center><strong>Update </strong> - WTC Project</center>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="<?=base_url();?>admin/edit_project"  method="post" enctype="multipart/form-data" class="form-horizontal">                                           
                                            <input type="hidden" name="p_id" value="<?=$p_details->p_id;?>">
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Project Type</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check-inline form-check">
														<div class="col-md-12">
                                                        <label for="inline-radio1" class="form-check-label ">
                                                            <input type="radio" id="inline-radio1" <?=$p_details->p_type==1 ? 'checked' : ''?> name="project_type" value="1" class="form-check-input" >Individual Project 
                                                        </label>
														</div>
														<div class="col-md-12">
                                                        <label for="inline-radio2" class="form-check-label ">
                                                            <input type="radio" id="inline-radio2" <?=$p_details->p_type==2 ? 'checked' : ''?> name="project_type" value="2" class="form-check-input" >Corporate Project
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
                                                    <select id="select" name="project_category" class="form-control" >
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
                                                    <select id="select" name="project_inter_category" class="form-control" >
                                                       <?php foreach($pi_category as $pi_category) { ?>
													   <option value="<?=$pi_category['pi_id'];?>" <?=$pi_category['pi_id']==$p_details->p_category ? 'selected' : ''?>><?=$pi_category['pi_category'];?></option>
													   <?php } ?>
                                                    </select>                                                 
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Project Code</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="project_code" class="form-control" value="<?=$p_details->p_code;?>" readonly>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Project Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="project_title" class="form-control" value="<?=$p_details->p_title?>" >                                                    
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Project Start Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="project_startdate" class="form-control" value="<?=$p_details->p_startdate?>" >                                                    
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Project End Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="project_enddate" class="form-control" value="<?=$p_details->p_enddate?>" >                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Project Status</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select id="select" name="project_status" class="form-control" >
                                                       <?php foreach($project_status as $project_status) { ?>
													   <option value="<?=$project_status['ps_id'];?>" <?=$project_status['ps_id']==$p_details->p_status_id ? 'selected' : ''?>><?=$project_status['p_status'];?></option>
													   <?php } ?>
                                                    </select>                            
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Project Compelted Percentage</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="project_percentage" class="form-control" value="<?=$p_details->p_percentage;?>" >                                                    
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Project Duration</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="project_duration" class="form-control" value="<?=$p_details->p_duration;?>" >                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Project Description/Notes</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="project_description" id="textarea-input" rows="9" class="form-control"><?=$p_details->p_description;?></textarea>
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
                                                    <input type="text"  name="project_file" class="form-control" value="<?=$filedata[$i];?>" readonly>
													 <input type="hidden"  name="project_files[]" class="form-control" value="<?=$filedata[$i];?>">
													<?php } } else { ?>
													<input type="text"  name="project_file" class="form-control" value="You don't have any project files attchment for this project if you want you can add  project files here!" readonly>
													
													<?php } ?>
                                                    <input type="file" id="file-multiple-input" name="project_files[]" multiple="" class="form-control-file">
                                                </div>
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Client/Company Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<select id="select" name="client_or_company_name" class="form-control" >
                                                       <?php foreach($users as $users) { ?>
													   <option value="<?=$users['u_id'];?>" <?=$users['u_id']==$p_details->p_client_id ? 'selected' : ''?>><?=$users['user_name'];?></option>
													   <?php } ?>
                                                    </select> 
                                                </div>
                                            </div>
											<div class="card-footer">
											   <input type="hidden" name="edit_project">
													 <center><button type="submit" class="btn btn-theme btn-sm">
													<i class="fa fa-dot-circle-o"></i> Update
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

   