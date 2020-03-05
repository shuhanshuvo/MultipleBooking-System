
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar" style="background-color: {{$gnrlstng->color}}"; >
      <div class="app-sidebar__user" ><img class="app-sidebar__user-avatar" src="{{ asset('backend/photo/'.Auth::user()->photo) }}" height="48px" width="48px" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{route('user.dashboard')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Website Controls</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            
            <li><a class="treeview-item" href="" rel="noopener"><i class="icon fa fa-envelope"></i> Email Setting</a></li>
            
          </ul>
        </li> -->
       <!--  <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li> -->
       <!--  <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Package Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href=""><i class="icon fa fa-plus"></i>Add Package</a></li>
            <li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>All Package</a></li>
            <li><a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i> Form Samples</a></li>
            <li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i> Form Notifications</a></li>
          </ul>
        </li> -->
        <!-- <li><a class="app-menu__item" href="{{route('show.package')}}"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">All Management</span></a></li> -->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">All Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('user.all.package')}}"><i class="icon fa fa-circle-o"></i> All Package</a></li>
            <li><a class="treeview-item" href="{{route('user.all.hotel')}}"><i class="icon fa fa-circle-o"></i>All Hotel</a></li>
            <li><a class="treeview-item" href="{{route('user.all.lounge')}}"><i class="icon fa fa-circle-o"></i>All Lounge</a></li>
            <li><a class="treeview-item" href="{{route('user.all.pickup')}}"><i class="icon fa fa-circle-o"></i>All Pickup Car</a></li>
            <li><a class="treeview-item" href="{{route('user.all.rentCar')}}"><i class="icon fa fa-circle-o"></i>All Rent Car</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="blank-page.html"><i class="icon fa fa-circle-o"></i> Blank Page</a></li>
            <li><a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i> Login Page</a></li>
            
          </ul>
        </li>
        <li><a class="app-menu__item" href="docs.html"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">Docs</span></a></li>
      </ul>
    </aside>