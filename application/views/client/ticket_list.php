        

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
                            <h1 class="title-4">WTC Tickets
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
									<a href="<?=base_url();?>client/add_ticket"><button class="au-btn au-btn-icon au-btn--green btn-theme au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add ticket</button></a>
                                    
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
                                            <th>Ticket title</th>
                                            <th>Ticket code</th>
                                            <th>Ticket Status</th>                                            
                                            <th>Ticket Created Date</th>                                            
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 
										if(!empty($tickets)){
										foreach($tickets as $tickets) { ?>
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
                                            <td class="desc"><?=$tickets['t_status'];?></td>
                                          
                                            <td>
                                                <span class="status--process"><?=$tickets['t_created_date'];?></span>
                                            </td>
                                           
                                            <td>
                                                <div class="table-data-feature">
                                                    <a href="<?=base_url();?>client/view_ticket/<?=$tickets['t_id'];?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Detail View">
														<i class="zmdi zmdi-mail-send"></i>
													</button></a>    
                                                    <a href="<?=base_url();?>client/edit_ticket/<?=$tickets['t_id'];?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Respond">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button></a>
                                                                                                     
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <?php } } else { ?>
										<tr>You don't have any tickets</tr>
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

