<div class="page-body-wrapper">
    <div>
        <div class="page-sidebar custom-scrollbar page-sidebar-open"><!--Page Sidebar Start-->
            <div class="sidebar-user text-center">
                <div><img class="img-50 rounded-circle" src="{{asset('/')}}assets/backend/1.jpg" alt="#"></div>
                <h6 class="mt-3 f-12">Admin</h6>
            </div>
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="javascript:void(0)" class="sidebar-header">
                        <i class="icon-desktop"></i><span>User</span>
                        <i class="fa fa-angle-right pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{route('admin.user.create')}}"><i class="fa fa-angle-right"></i>create</a></li>
                        
                    </ul>
                </li>
   
            </ul>
        </div>