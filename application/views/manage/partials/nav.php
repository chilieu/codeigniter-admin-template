
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('manage/cards');?>">Giftcard Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administartor <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo site_url("manage/auth/logout/");?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <!--li class="active">
                        <a href="<?php echo site_url('manage');?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li-->
                    <li>
                        <a href="<?php echo site_url('manage/cards');?>"><i class="fa fa-fw fa-table"></i> Cards</a>
                    </li>
                    <!--li>
                        <a href="<?php echo site_url('manage/customers');?>"><i class="fa fa-fw fa-bar-chart-o"></i> Customers</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('manage/staffs');?>"><i class="fa fa-fw fa-bar-chart-o"></i> Staffs</a>
                    </li-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>