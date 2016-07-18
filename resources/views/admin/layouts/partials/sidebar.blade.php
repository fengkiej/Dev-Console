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

            <li class="header">{{ trans('message.admin-panel') }}</li>
            <li><a href="#"><i class='fa fa-user'></i> <span>{{ trans('message.user') }}</span></a></li>
            <li><a href="#"><i class='fa fa-laptop'></i> <span>{{ trans('message.projects') }}</span></a></li>
            <li><a href="#"><i class='fa fa-group'></i> <span>{{ trans('message.group') }}</span></a></li>
            <li><a href="#"><i class='fa fa-cloud'></i> <span>{{ trans('message.api-list') }}</span></a></li>

            <!-- TODO: Make the projects dynamics by using loop -->

            <li><a href="#"><i class='fa fa-gear'></i> <span>{{ trans('message.settings') }}</span></a></li>


        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
