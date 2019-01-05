<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/admin/home') }}" class="logo"
       style="font-size: 16px;">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
           @lang('global.global_title')</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
           @lang('global.global_title')</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <ul class="nav"  style="">
            <li><a href="#" class="selected"><img src="{{asset('images/lefticon020.png')}}" title="客户列表" /><span>客户列表</span></a></li>
            <li><a href="#" ><img src="{{asset('images/icon020.png')}}" title="分类列表" /><span>分类列表</span></a></li>
            <li><a href="#" ><img src="{{asset('images/icon030.png')}}" title="商品列表" /><span>商品列表</span></a></li>
            <li><a href="#" ><img src="{{asset('images/icon040.png')}}" title="施工列表" /><span>施工列表</span></a></li>
            <li><a href="#" ><img src="{{asset('images/icon050.png')}}" title="财务列表" /><span>财务列表</span></a></li>
            <li><a href="#" ><img src="{{asset('images/icon060.png')}}" title="数据分析" /><span>数据分析</span></a></li>
            <ul  class="user">
                <li><span>admin</span></li>
                <li>消息</li>
                <li>5</li>
            </ul>

        </ul>
    </nav>
</header>


