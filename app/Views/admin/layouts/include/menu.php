<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><b><img src="<?php echo base_url(); ?>/admin/images/logo-wide.png" alt="home" style="width: 220px;" /></b><span class="hidden-xs"></span></div>
                
                <!-- <ul class="nav navbar-top-links navbar-right pull-right"> -->
                    <!-- /.dropdown -->
                    <!-- <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><b class="hidden-xs" style="font-size:18px">User</b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li> -->
                            <!-- <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li> -->
                            <!-- <li><a href="#"><i class="ti-email"></i> Inbox</a></li> -->
                            <!-- <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li> -->
                        <!-- </ul> -->
                        <!-- /.dropdown-user -->
                    <!-- </li> -->
                     
                    <!-- /.dropdown -->
                <!-- </ul> -->
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    
                    <li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="<?php echo site_url('admin')?>" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span></span></a>
                        
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw " data-icon="7"></i> <span class="hide-menu "> Card Members <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo site_url('admin/card-member-new')?>">New</a> </li>
                            <li> <a href="<?php echo site_url('admin/card-members')?>">Manage</a> </li>
                            <li role="separator" class="divider"></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw " data-icon="7"></i> <span class="hide-menu ">Banner<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo site_url('admin/banner-add')?>">New</a> </li>
                            <li> <a href="<?php echo site_url('admin/banner')?>">Manage</a> </li>
                            <li role="separator" class="divider"></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw " data-icon="7"></i> <span class="hide-menu ">Events<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo site_url('admin/events-add')?>">New</a> </li>
                            <li> <a href="<?php echo site_url('admin/events')?>">Manage</a> </li>
                            <li role="separator" class="divider"></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw " data-icon="7"></i> <span class="hide-menu ">Quote<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo site_url('admin/quote')?>">Manage</a> </li>
                            <li role="separator" class="divider"></li>
                        </ul>
                    </li>
                    <hr style="width: 96%">
                    <li><a href="<?php echo site_url('admin/logout')?>" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                    <hr style="width: 96%">
                    
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->