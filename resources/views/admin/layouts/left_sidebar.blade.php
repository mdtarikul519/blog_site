<div class="page-sidebar custom-scrollbar page-sidebar-open">
    <!--Page Sidebar Start-->
    <div class="sidebar-user text-center">
        <div><img class="img-50 rounded-circle" src="/assets/backend/1.jpg" alt="#" /></div>
        <h6 class="mt-3 f-12">Admin</h6>
    </div>
    <ul class="sidebar-menu">
    

        <li class="active">
            <a href="javascript:void(0)" class="sidebar-header">
                <i class="icon-desktop"></i><span>User Role</span>
                <i class="fa fa-angle-right pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{route('admin.user_role.create')}}"><i class="fa fa-angle-right"></i>create</a></li>
                <li><a href="{{route('admin.user_role.all')}}"><i class="fa fa-angle-right"></i>all</a></li>

              
            </ul>
        </li>

        <li class="active">
            <a href="javascript:void(0)" class="sidebar-header">
                <i class="icon-desktop"></i><span>User</span>
                <i class="fa fa-angle-right pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{route('admin.user.create')}}"><i class="fa fa-angle-right"></i>create</a></li>
                <li><a href="{{route('admin.user.all')}}"><i class="fa fa-angle-right"></i>All</a></li>
              
            </ul>
        </li>



    </ul>
    
</div>
