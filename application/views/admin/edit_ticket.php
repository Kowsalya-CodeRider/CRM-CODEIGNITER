

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
                            <h1 class="title-4">Edit - Ticket Details
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
									<?php foreach($ticket as $ticket){?>
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">                                           
                                            <input type="hidden" id="t_id" value="<?=$ticket['t_id'];?>">
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Choose Project</label>
                                                </div>
                                                <div class="col-12 col-md-9">
												<input type="text" id="text-input" name="text-input" class="form-control" value="<?=$ticket['p_title'];?>" readonly> 
												</div>												 
                                            </div>
											
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Ticket Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="text-input" class="form-control" value="<?=$ticket['t_title'];?>" readonly>                                                    
                                                </div>  
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Ticket Code</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" id="t_code" name="text-input" class="form-control" value="<?=$ticket['t_code'];?>" readonly>
                                                    
                                                </div>
												 <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Ticket Created By</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" id="user_name" name="text-input" class="form-control" value="<?=$ticket['user_name'];?>" readonly>
                                                    <input type="hidden" id="u_id" value="<?=$ticket['u_id'];?>">
													 <input type="hidden" id="user_email" value="<?=$ticket['user_email'];?>">
													
												</div>
                                            </div>
											
											
											<div class="row form-group">                                               
												<div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tickted Status</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                  <select class="form-control" id="ticket_status" name="ticket_status" onchange="updateticket()">
													<?php foreach($ticket_status as $ticket_status) { ?>
													<option value="<?=$ticket_status['ts_id'];?>" <?=$ticket['t_status_id']==$ticket_status['ts_id'] ? 'selected' : ''?>><?=$ticket_status['t_status'];?></option>
													<?php } ?>
													</select>
                                                </div>
												 <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tickted Created Date</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" id="text-input" name="text-input" class="form-control" value="<?=$ticket['t_created_date'];?>" readonly>                                                    
													
												</div>
                                            </div>
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Ticket Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="textarea-input" id="textarea-input" rows="3" placeholder="Content..." class="form-control" readonly><?=$ticket['t_description'];?></textarea>													
                                                </div>
                                            </div>
											
											  
                                         
                                        </form>
									<?php }?>
                                    </div>
									<div class="card-footer">
									<center><strong>WTC </strong> - Ticket Conversations</center>
									</div>
									<div class="card-body card-block">
										<?php 
										if(!empty($ticketchat))
										{
											foreach($ticketchat as $ticketchat)
											{
												if($ticketchat['a_id']==0)
												{
											?>
											<div class="row form-group">
											<div class="col col-md-3">	
											<?php if(!empty($ticketchat['t_response'])) {?>
											<textarea name="t_response" rows="2" class="form-control" readonly><?=$ticketchat['t_response'];?></textarea>													
											<?php } 
											if(!empty($ticketchat['tc_files'])) {
											?>
											<table class="table">
												<tbody>
												<?php
												$files = explode(',',$ticketchat['tc_files']);
												$filecount = count($files);
												for($i=0;$i<$filecount;$i++)
												{
													$filename = explode('/',$files[$i]);
													$filename = $filename[2];
													?>
												
												<tr>
												<td><?=$i+1;?></td>
												<td><button class="btn btn-success"><?=$filename;?></button></td> 
												<td><a href="<?=base_url()?><?=$files[$i];?>" class="btn btn-info" download>Click to download</a></td> 
												</tr>
												
													<?php
												}
												?>
											</tbody>
												</table>
											<?php } ?>
											</div>
											<div class="col-12 col-md-9">
												</div>
											</div>
											<?php
												}
												else
												{
											?>
											<div class="row form-group">
											<div class="col col-md-3">							
											</div>
											<div class="col-12 col-md-9">
												<?php if(!empty($ticketchat['t_response'])) {?>
												<textarea name="t_response" rows="2" class="form-control" readonly><?=$ticketchat['t_response'];?></textarea>													
												<?php }
												if(!empty($ticketchat['tc_files'])) {
												?>
												<table class="table">
												<tbody>
												<?php
												$files = explode(',',$ticketchat['tc_files']);
												$filecount = count($files);
												for($i=0;$i<$filecount;$i++)
												{
													$filename = explode('/',$files[$i]);
													$filename = $filename[2];
													?>
												
												<tr>
												<td><?=$i+1;?></td>
												<td><button class="btn btn-success"><?=$filename;?></button></td> 
												<td><a href="<?=base_url()?><?=$files[$i];?>" class="btn btn-info" download>Click to download</a></td> 
												</tr>
												
													<?php
												}
												?>
												</tbody>
												</table>
												<?php } ?>
											</div>
											</div>
											<?php
												}
											}
										}
										?>
										<form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> 
										<div class="row form-group">
											<div class="col col-md-3">
												<label for="textarea-input" class=" form-control-label">Your Response</label>
											</div>
											<div class="col-12 col-md-9">
												<textarea name="t_response" id="t_response" rows="3" placeholder="Your Response..." class="form-control"></textarea>													
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-3">
												<label for="textarea-input" class=" form-control-label">Your Response File Attachments</label>
											</div>
											<div class="col-12 col-md-9">
												<input type="file" name="tc_files" id="tc_files" class="form-control" multiple>											
											</div>
										</div>
										</form>
									</div>
									<div class="card-footer">							
										<center><button onclick="ticketchat()" class="btn btn-theme btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Send
                                        </button></center>
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
<script>
function updateticket()
{
	 var ticket_status = $('#ticket_status').val();
	 var t_id 		   = $('#t_id').val();
	 var u_id		   = $('#u_id').val();
	 var t_code		   = $('#t_code').val();
	 var user_email    = $('#user_email').val();
	 var user_name     = $('#user_name').val();
	 $.ajax({
                url: "<?=base_url();?>admin/ticketstatusupdate",
                type: "post",
				data: {ticket_status:ticket_status,t_id:t_id,u_id:u_id,t_code:t_code,user_email:user_email,user_name:user_name},
                success: function(data) { 
					if(data==1)
					{
						alert('Ticket Status Update Successfully!');						
					}
					else
					{
						alert('Sorry! Your data having an Error!');
					}				
                }
            });
	
}

function ticketchat()
{
	var t_id = $('#t_id').val();
	var t_response = $('#t_response').val();
	var u_id = $('#u_id').val();
	var a_id = 1;
	var t_code		   = $('#t_code').val();
	var user_email    = $('#user_email').val();
	var user_name     = $('#user_name').val();
	var form_data = new FormData();
	var totalfiles = document.getElementById('tc_files').files.length;
    for (var index = 0; index < totalfiles; index++) {
      form_data.append("tc_files[]", document.getElementById('tc_files').files[index]);
    }
	form_data.append("t_id",t_id);
	form_data.append("t_response",t_response);
	form_data.append("u_id",u_id);
	form_data.append("a_id",a_id);
	form_data.append("t_code",t_code);
	form_data.append("user_email",user_email);
	form_data.append("user_name",user_name);
	$.ajax({
                url: "<?=base_url();?>admin/ticketchat",
                type: "post",
				data: form_data,
				dataType: 'json',
				contentType: false,
				processData: false,
				success: function(data) { 
					if(data==1)
					{
						alert('Ticket Chat Update Successfully!');	
						location.reload();
					}
					else
					{
						alert('Sorry! Your data having an Error!');
					}				
                }
            });
}
</script>