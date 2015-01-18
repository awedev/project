<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../../img/avatar3.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, Jane</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="../../index.html">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>{{{ Lang::get('title.post') }}}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
                    <li><a href="../charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
                    <li><a href="../charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
                </ul>
            </li>
            <li>
                <a href="../widgets.html">
                    <i class="fa fa-th"></i> <span>{{{ Lang::get('title.lucky') }}}</span> <small class="badge pull-right bg-green">new</small>
                </a>
            </li>
            <li>
                <a href="../calendar.html">
                    <i class="fa fa-calendar"></i> <span>{{{ Lang::get('title.nearby') }}}</span>
                    <small class="badge pull-right bg-red">3</small>
                </a>
            </li>
            <li>
                <a href="{{ URL::to('messenger') }}">
                    <i class="fa fa-envelope"></i> <span>{{{ Lang::get('title.mailbox') }}}</span>
                    <small class="badge pull-right bg-yellow">12</small>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>{{{ Lang::get('title.settings') }}}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('user') }}"><i class="fa fa-angle-double-right"></i> {{{ Lang::get('title.profile') }}}</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>{{{ Lang::get('title.developer') }}}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('api')}}"><i class="fa fa-angle-double-right"></i> {{{ Lang::get('user/user.sidebar_developer_api_index') }}}</a></li>
                    <li><a href="{{ URL::to('api/create')}}"><i class="fa fa-angle-double-right"></i> {{{ Lang::get('user/user.sidebar_developer_api_create') }}}</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>