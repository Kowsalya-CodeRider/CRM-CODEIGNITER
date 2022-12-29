

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
                            <h1 class="title-4">WTC Projects
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

			 <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!--<h3 class="title-5 m-b-35">data table</h3>-->
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    
                                </div>
                                <div class="table-data__tool-right">
                                     <a href="add_projects"><button class="au-btn au-btn-icon au-btn--green btn-theme au-btn--small shadow">
                                        <i class="zmdi zmdi-plus"></i>add project</button></a>
                                    
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2 shadow">
                                <table class="table table-data2">
                                    <thead>
                                        <tr class="tr-shadow">
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>project title</th>
                                            <th>project code</th>
                                            <th>clint/company name</th>
                                            <th>Project Type</th>
											<th>Project category</th>
                                            <th>Project status</th>
                                            <th>price</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($projects as $project) {
											$p_type = $project['p_type'];
											if($p_type==1)
											{
												$p_type_1 = 'Individual';
											}
											else
											{
												$p_type_1 = 'Corporate';
											}
											$p_category = $project['p_category'];
											if($p_category==1)
											{
												$p_category_1 = 'CRM (CUSTOMER RELATION MANAGEMENT)';
											}
											else if($p_category==2)
											{
												$p_category_1 = 'SOFTWARE DESIGN AND DEVELOPMENT';
											}
											else
											{
												$p_category_1 = 'ACADEMIC AND CONTENT WRITING';
											}
										?>
										<tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td><?=$project['p_title'];?></td>
                                            <td>
                                                <span class="block-email"><?=$project['p_code'];?></span>
                                            </td>
                                            <td class="desc"><?=$project['user_name'].'/'.$project['user_organization'];?></td>
                                            <td><?=$p_type_1;?></td>
											<td><?=$p_category_1;?></td>
                                            <td>
                                                <span class="status--process"><?=$project['p_status'];?></span>
                                            </td>
                                            <td>Rs.<?=$project['p_cost'];?></td>
                                            <td>
                                                <div class="table-data-feature">
                                                     <a href="<?=base_url();?>admin/view_project/<?=$project['p_id'];?>"><button class="item shadow" data-toggle="tooltip" data-placement="top" title="View">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button></a>
                                                    <a href="<?=base_url();?>admin/edit_project/<?=$project['p_id'];?>"><button class="item shadow" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button></a>
                                                    <button class="item shadow" onclick="deleteproject(<?=$project['p_id'];?>)" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button> 
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
           
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
function deleteproject(p_id)
{
	if (confirm("Are you sure want to delete this project?")) {
        $.ajax({
                url: "<?=base_url();?>admin/delete_project",
                type: "post",
				data: {p_id:p_id},
                success: function(data) { 
					if(data==1)
					{
						alert('Your Product Deleted Successfully!');
						location.reload();
					}
					else
					{
						alert('Sorry! Your data having an Error!');
					}				
                }
            });
	
    }
}
</script>