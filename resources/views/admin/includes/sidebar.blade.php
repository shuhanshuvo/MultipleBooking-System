
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar" style="background-color: {{$gnrlstng->color}}; ">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{ asset('backend/photo/'.Auth::user()->photo) }}" height="48px" width="48px" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{route('admin.dashbord')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        
        <li><a class="app-menu__item" href="{{route('admin.all.ameniti')}}"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Amenities Management</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Website Controls</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('admin.general.settings')}}"><i class="icon fa fa-cogs"></i> General Settings</a></li>
            <li><a class="treeview-item" href="{{route('admin.frontend.settings')}}"><i class="icon fa fa-cogs"></i> Frontend</a></li>
            <li><a class="treeview-item" href="{{route('admin.Email.settings')}}" rel="noopener"><i class="icon fa fa-envelope"></i> Email Setting</a></li>
            
          </ul>
        </li>
       <!--  <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li> -->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-plane"></i><span class="app-menu__label">Package Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('admin.create.package')}}"><i class="icon fa fa-plus"></i>Add Package</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.package')}}"><i class="icon fa fa-circle-o"></i>All Package</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.package.booking')}}"><i class="icon fa fa-circle-o"></i> All Bookings</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.approve.package')}}"><i class="icon fa fa-circle-o"></i>Approve Bookings</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.reject.package')}}"><i class="icon fa fa-circle-o"></i>Rejected Bookings</a></li>
            
          </ul>
        </li>

    <!-- Hotel Management -->


         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-hotel"></i><span class="app-menu__label">Hotel Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('admin.create.hotel')}}"><i class="icon fa fa-plus"></i>Add Hotel</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.hotel')}}"><i class="icon fa fa-circle-o"></i>All Hotel</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.room.booking')}}"><i class="icon fa fa-circle-o"></i> All Bookings</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.approve.room')}}"><i class="icon fa fa-circle-o"></i>Approve Bookings</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.reject.room')}}"><i class="icon fa fa-circle-o"></i>Rejected Bookings</a></li>
            
          </ul>
        </li>

      <!-- Lounge Management -->

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-coffee"></i><span class="app-menu__label">Lounge Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('admin.create.lounge')}}"><i class="icon fa fa-plus"></i>Add Lounge</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.lounge')}}"><i class="icon fa fa-circle-o"></i>All Lounge</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.lounge.booking')}}"><i class="icon fa fa-circle-o"></i> All Bookings</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.approve.lounge')}}"><i class="icon fa fa-circle-o"></i>Approve Bookings</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.reject.lounge')}}"><i class="icon fa fa-circle-o"></i>Rejected Bookings</a></li>
          </ul>
        </li>


 <!-- Pickup Cars Management -->

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Pickup Cars Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('admin.create.pickup')}}"><i class="icon fa fa-plus"></i>Add Pickup Car</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.pickup')}}"><i class="icon fa fa-circle-o"></i>All Pickup Cars</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.pickup.booking')}}"><i class="icon fa fa-circle-o"></i> All Bookings</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.approve.pickup')}}"><i class="icon fa fa-circle-o"></i>Approve Bookings</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.reject.pickup')}}"><i class="icon fa fa-circle-o"></i>Rejected Bookings</a></li>
          </ul>
        </li>

 <!-- Rent Cars Management -->

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Rent Cars Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('admin.create.rentCar')}}"><i class="icon fa fa-plus"></i>Add Rent Car</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.rentCar')}}"><i class="icon fa fa-circle-o"></i>All Rent Cars</a></li>
           
            <li><a class="treeview-item" href="{{route('admin.all.rentCar.booking')}}"><i class="icon fa fa-circle-o"></i> All Bookings</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.approve.rentCar')}}"><i class="icon fa fa-circle-o"></i>Approve Bookings</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.reject.rentCar')}}"><i class="icon fa fa-circle-o"></i>Rejected Bookings</a></li>
          </ul>
        </li>



         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">User Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('admin.all.user')}}"><i class="icon fa fa-plus"></i>All Users</a></li>
            <li><a class="treeview-item" href="{{route('admin.all.verified.user')}}"><i class="icon fa fa-plus"></i>Verified Users</a></li>
            <li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Banned User</a></li>
            
          </ul>
        </li>    
        <li><a class="app-menu__item" href="{{route('admin.all.tran')}}"><i class="app-menu__icon fa fa-exchange"></i><span class="app-menu__label">Transaction Log</span></a></li>
        <li><a class="app-menu__item" href="{{route('admin.all.subscriber')}}"><i class="app-menu__icon fa fa-exchange"></i><span class="app-menu__label">All Subscriber</span></a></li>
      </ul>
    </aside>