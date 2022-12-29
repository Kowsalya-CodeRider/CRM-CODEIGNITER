<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="<?=base_url();?>images/wtc_logo.png" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub <?=$url=='admin_dashbaord' || $url=='admin_login_check' ? 'active' : ''?>">
                                <a href="<?=base_url();?>admin/admin_dashbaord">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>                               
                            </li>
                            <li class="<?=$url=='admin_projects' || $url=='add_projects' || $url=='view_project' || $url=='edit_project' ? 'active' : ''?>">
                                <a href="<?=base_url();?>admin/admin_projects">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span class="bot-line"></span>Projects</a>
                            </li>
                            <li class="<?=$url=='admin_tickets' ||  $url=='view_ticket' || $url=='edit_ticket' ? 'active' : ''?>">
                                <a href="<?=base_url();?>admin/admin_tickets">
                                    <i class="fas fa-trophy"></i>
                                    <span class="bot-line"></span>Tickets</a>
                            </li>                       
                            <li class="<?=$url=='admin_users' || $url=='add_users' || $url=='edit_users' ? 'active' : ''?>">
                                <a href="<?=base_url();?>admin/admin_users">
                                    <i class="fas fa-desktop"></i>
                                    <span class="bot-line"></span>Users</a>                             
                            </li>
							<li class="<?=$url=='calender' ? 'active' : ''?>">
                                <a href="<?=base_url();?>admin/calender">
                                    <i class="fa fa-calendar"></i>
                                    <span class="bot-line"></span>Calender</a>                             
                            </li>
							
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="header-button-item has-noti js-item-menu">
							<?php $notification_count = count($notifications); ?>
                            <i class="zmdi zmdi-notifications"></i>
                            <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                                <?php 
									
									if($notification_count==0)
									{
									?>
								<div class="notifi__title">
                                    <p>You don't have any Notifications</p>
                                </div>
								<?php } else {?>
								<div class="notifi__title">
                                    <p>You have <?=$notification_count;?> Notifications</p>
                                </div>
								<?php
								foreach($notifications as $notifications) 
								{	
								 if($notifications['n_type']=='add_ticket'){ ?>
                                <a href="<?=base_url();?>admin/edit_ticket/<?=$notifications['t_id'];?>">
								<div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p><?=$notifications['n_data'];?></p>
                                        <span class="date"><?=$notifications['t_created_on'];?></span>
                                    </div>
                                </div>
								</a>
								<?php } else if($notifications['n_type']=='ticket_chat'){ ?>
                                <a href="<?=base_url();?>admin/edit_ticket/<?=$notifications['t_id'];?>">
								<div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p><?=$notifications['n_data'];?></p>
                                        <span class="date"><?=$notifications['t_created_on'];?></span>
                                    </div>
                                </div>
								</a>
								<?php } }?>
								<div class="notifi__footer">
                                    <a href="<?=base_url();?>admin/allnotifications">All notifications</a>
                                </div>
								<?php } ?>  
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="<?=base_url();?>images/wtc_logo.png" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#"><?=$this->session->userdata('admin_name');?>  </a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="<?=base_url();?>images/wtc_logo.png" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#"><?=$this->session->userdata('admin_name');?></a>
                                            </h5>
                                            <span class="email"><?=$this->session->userdata('admin_email');?></span>
                                        </div>
                                    </div>                                  
                                    <div class="account-dropdown__footer">
                                        <a href="<?=base_url();?>admin/admin_logout">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?=base_url();?>images/wtc_logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-tachometer-alt"></i>Admin Dashboard
                                    <span class="bot-line"></span>
                                </a>                               
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span class="bot-line"></span>Projects</a>
                            </li>
                            <li>
                                <a href="table.html">
                                    <i class="fas fa-trophy"></i>
                                    <span class="bot-line"></span>Tickets</a>
                            </li>                       
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-desktop"></i>
                                    <span class="bot-line"></span>Users</a>                             
                            </li>
                     
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="header-button-item has-noti js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                    <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                        <div class="notifi__title">
                            <p>You have 3 Notifications</p>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c1 img-cir img-40">
                                <i class="zmdi zmdi-email-open"></i>
                            </div>
                            <div class="content">
                                <p>You got a email notification</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c2 img-cir img-40">
                                <i class="zmdi zmdi-account-box"></i>
                            </div>
                            <div class="content">
                                <p>Your account has been blocked</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c3 img-cir img-40">
                                <i class="zmdi zmdi-file-text"></i>
                            </div>
                            <div class="content">
                                <p>You got a new file</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__footer">
                            <a href="#">All notifications</a>
                        </div>
                    </div>
                </div>
                <div class="header-button-item js-item-menu">
                    <i class="zmdi zmdi-settings"></i>
                    <div class="setting-dropdown js-dropdown">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-globe"></i>Language</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-pin"></i>Location</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-email"></i>Email</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-notifications"></i>Notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">john doe</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="<?=base_url();?>images/wtc_logo.png" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">john doe</a>
                                    </h5>
                                    <span class="email">johndoe@example.com</span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="#">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->
