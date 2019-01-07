@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('global.app_dashboard')</span>
                </a>
            </li>
            {{--用户管理--}}
            <li class="treeview">
                <a href="#">
                    <span class="usermangager"><img src="{{asset('images/icon010.png')}}" /></span>
                    {{--<i class="fa fa-users"></i>--}}
                    <span class="title">@lang('global.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.permissions.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.roles.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.users.title')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>


            {{--客户管理--}}
            <li class="treeview">
                <a href="#">
                    <span class="usermangager"><img src="{{asset('images/lefticon020.png')}}" /></span>
                    {{--<i class="fa fa-users"></i>--}}
                    <span class="title">@lang('global.customer-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(1) == 'customers' ? 'active active-sub' : '' }}">
                        <a href="{{ route('customers.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.customer-list.title')
                            </span>
                        </a>
                    </li>

                    <li class="{{ $request->segment(1) == 'complete' ? 'active active-sub' : '' }}">
                        <a href="{{ route('customers.complete') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.customer-complete-fee.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(1) == 'uncomplete' ? 'active active-sub' : '' }}">
                        <a href="{{ route('customers.uncomplete') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.customer-uncomplete-fee.title')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            {{--分类管理--}}

            <li class="treeview">
                <a href="#">
                    <span class="usermangager"><img src="{{asset('images/lefticon040.png')}}" /></span>
                    {{--<i class="fa fa-users"></i>--}}
                    <span class="title">@lang('global.category.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(1) == 'categorys' ? 'active active-sub' : '' }}">
                        <a href="{{ route('categorys.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.category-list.title')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            {{--商品管理--}}

            <li class="treeview">
                <a href="#">
                    <span class="usermangager"><img src="{{asset('images/lefticon030.png')}}" style="background-color: #12b1e0"/></span>
                    {{--<i class="fa fa-users"></i>--}}
                    <span class="title">@lang('global.goods-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.goods-list.title')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            {{--施工管理--}}

            <li class="treeview">
                <a href="#">
                    <span class="usermangager"><img src="{{asset('images/lefticon050.png')}}" /></span>
                    {{--<i class="fa fa-users"></i>--}}
                    <span class="title">@lang('global.construction-mangagement.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.construction-list.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.construction-complete.title')
                            </span>
                        </a>
                    </li><li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.construction-uncomplete.title')
                            </span>
                        </a>
                    </li><li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.construction-no.title')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            {{--财务管理--}}

            <li class="treeview">
                <a href="#">
                    <span class="usermangager"><img src="{{asset('images/lefticon060.png')}}"  style="background-color: white"/></span>
                    {{--<i class="fa fa-users"></i>--}}
                    <span class="title">@lang('global.money-mangagement.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.money-cost-list.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.money-profit-list.title')
                            </span>
                        </a>
                    </li><li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.money-person-fee.title')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            {{--数据分析--}}
            <li class="treeview">
                <a href="#">
                    <span class="usermangager"><img src="{{asset('images/lefticon070.png')}}"  style="background-color: white"/></span>
                    {{--<i class="fa fa-users"></i>--}}
                    <span class="title">@lang('global.data-analysis.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.profit-analisis.title')
                            </span>
                        </a>
                    </li>

                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.product-analysis.title')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            {{--修改密码--}}

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">Change password</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('global.app_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('global.logout')</button>
{!! Form::close() !!}
