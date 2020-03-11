 <header class="app-header" style="background-color: {{ $gnrlstng->navbar_color }};">
  <a class="app-header__logo" style="background-color: {{ $gnrlstng->navbar_color }};" href="{{route('admin.dashbord')}}">{{$gnrlstng->logo_name}}</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->

        <?php
          $pendings = App\Subscriber::where('status',0)->count();               
          ?>

        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i>{{$pendings}}</a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have {{$pendings}} new notifications.</li>

             <?php

             $subscribers = App\Subscriber::where('subscribers.status','=',0)
                      ->orderBy('subscribers.id','DESC')
                      ->take(5)
                      ->get();

              ?>
            <div class="app-notification__content">

               @foreach($subscribers as $pending)

              <li>
                <a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">{{$pending->subs_mail}} has subscribed</p>
                    <p class="app-notification__meta">
                      <?php
                          $mytime = new Carbon\Carbon();
                          
                          echo $mytime ->diffForHumans($pending->created_at); 
                          

                          ?>
                       
                    </p>
                  </div></a>

                </li>

                @endforeach

         
            </div>
            <li class="app-notification__footer"><a href="{{route('admin.all.subscriber')}}">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="{{route('admin.profile')}}"><i class="fa fa-user fa-lg"></i> Profile</a>
              <li><a class="dropdown-item" href="{{route('admin.change.pass')}}"><i class="fa fa-user fa-lg"></i> Change Password</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>