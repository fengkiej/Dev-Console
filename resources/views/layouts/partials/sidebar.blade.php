<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">

            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-dashboard'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>

            <li class="header">{{ trans('message.projects') }}</li>
            <li class="treeview">
                <a href="#"><i class='fa fa-code'></i> <span> Project 1 </span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class='fa fa-gears'></i> Settings </a></li>
                    <li><a href="#"><i class='fa fa-certificate'></i> Consent Screen </a></li>
                    <li><a href="#"><i class='fa fa-key'></i> Credentials </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class='fa fa-code'></i> <span> Project 2 </span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class='fa fa-gears'></i> Settings </a></li>
                    <li><a href="#"><i class='fa fa-certificate'></i> Consent Screen </a></li>
                    <li><a href="#"><i class='fa fa-key'></i> Credentials </a></li>
                </ul>
            </li>

            <!-- TODO: Make the projects dynamics by using loop -->
            <!-- Optionally, you can add icons to the links -->
            
            <li><a href="#"><i class='fa fa-plus'></i> <span>{{ trans('message.createproj') }}</span></a></li>

            <li><a href="#"><i class='fa fa-gear'></i> <span>{{ trans('message.settings') }}</span></a></li>


        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
