
    <!-- ==========Header-Section========== -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{asset('frontend/assets/images/logo/logo.png')}}" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="{{url('/')}}" class="active">Home</a>
                        
                    </li>
                    <li>
                        <a href="#0">Package</a>

                        <?php
                        
                        $packages =App\Package::all();

                        ?>
                        <ul class="submenu">

                            @foreach($packages as $package)
                            <li>
                                <a href="{{route('home.package.details',$package->id)}}">{{$package->pkg_name}}</a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#0">HOTELS</a>

                        <?php
                        
                        $hotels =App\Hotel::all();

                        ?>
                        <ul class="submenu">
                            @foreach($hotels as $hotel)
                            <li>
                                <a href="{{route('home.hotel.details',$hotel->id)}}">{{$hotel->htl_name}}</a>
                            </li>
                            @endforeach
                           
                        </ul>
                    </li>

                    <li>
                        <a href="#0">blog</a>
                        <ul class="submenu">
                            <li>
                                <a href="blog.html">Blog</a>
                            </li>
                            <li>
                                <a href="blog-details.html">Blog Single</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('contact.page')}}">contact</a>
                    </li>

                      @guest

                      <li>
                        <a href="{{ route('login') }}">Login</a>
                     </li>

                    @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}">Register</a>
                    </li>

                    @endif

                    @else

                    <li>

                        <a>
                            {{ Auth::user()->name }}</span>
                        </a>
                        <ul class="submenu">
                            <li>
                            <a href="{{route('user.dashboard')}}">
                            profile
                             </a>
                             </li>
                            <li>
                            <a class="text-dark" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                           </a>
                           </li>
                        </ul>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    

                    </li>

                    @endguest
                       
                    </ul>
                
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>


    <!-- ==========Header-Section========== -->

