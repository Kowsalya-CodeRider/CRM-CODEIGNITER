

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
                                        <li class="list-inline-item">Users</li>
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
                            <h1 class="title-4">WTC Clients
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
                                     <a href="add_users"><button class="au-btn au-btn-icon au-btn--green btn-theme au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add Clients</button></a>
                                   
                                </div>
                            </div>
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
                                            <th>Cliet Name</th>
                                            <th>Client Contact Number</th>
                                            <th>Client Organization Name</th>
                                            <th>Client Email</th>											
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($users as $user) {
											
										?>
										<tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td><?=$user['user_name'];?></td>
                                            <td>
                                                <span class="block-email"><?=$user['user_contact'];?></span>
                                            </td>
                                            <td class="desc"><?=$user['user_organization'];?></td>
                                            <td><?=$user['user_email'];?></td>
											
                                            <td>
                                                <div class="table-data-feature">
                                                     
                                                    <a href="<?=base_url();?>admin/edit_users/<?=$user['u_id'];?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button></a>
                                                    <button class="item" onclick="deleteproject(<?=$user['u_id'];?>)" data-toggle="tooltip" data-placement="top" title="Delete">
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
function deleteproject(u_id)
{
	if (confirm("Are you sure want to delete this User?")) {
	 $.ajax({
                url: "<?=base_url();?>admin/delete_user",
                type: "post",
				data: {u_id:u_id},
                success: function(data) { 
					if(data==1)
					{
						alert('WTC User Deleted Successfully!');
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