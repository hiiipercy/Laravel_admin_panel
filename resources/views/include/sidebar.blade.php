<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">DASHBOARD</li>
            <li>
                <a href="{{ url('/') }}">
                    <i class="fa fa-home"></i> <span>Dashboard</span>
                </a>
            </li>

            {{-- <li class="header">USER MANAGEMENT</li>
            <li class="{{ request()->is('user*') ? 'active' : '' }}">
                <a href="{{ route('app.user.index') }}">
                    <i class="fa fa-users"></i> <span>Users</span>
                </a>
            </li>

            <li class="header">FORM FIELD DATA</li>
            <li class="{{ request()->is('branchs*') ? 'active' : '' }}">
                <a href="{{ route('app.branch.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Branchs</span>
                </a>
            </li>

            <li class="{{ request()->is('districts*') ? 'active' : '' }}">
                <a href="{{ route('app.district.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Districts</span>
                </a>
            </li>
            <li class="{{ request()->is('upazila*') ? 'active' : '' }}">
                <a href="{{ route('app.upazila.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Upazila</span>
                </a>
            </li>
            <li class="{{ request()->is('categories*') ? 'active' : '' }}">
                <a href="{{ route('app.category.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Categories</span>
                </a>
            </li>
            <li class="{{ request()->is('products*') ? 'active' : '' }}">
                <a href="{{ route('app.product.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Products</span>
                </a>
            </li>
            <li class="{{ request()->is('query_type*') ? 'active' : '' }}">
                <a href="{{ route('app.query_type.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Query Type</span>
                </a>
            </li>
            <li class="{{ request()->is('query_mail*') ? 'active' : '' }}">
                <a href="{{ route('app.query_mail.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Query Mail</span>
                </a>
            </li>
            <li class="{{ request()->is('professions*') ? 'active' : '' }}">
                <a href="{{ route('app.profession.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Profession</span>
                </a>
            </li>
            <li class="header">CRM DATA</li>
            <li class="{{ request()->is('reports*') ? 'active' : '' }}">
                <a href="{{ route('app.reports.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Reports</span>
                </a>
            </li> --}}
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
