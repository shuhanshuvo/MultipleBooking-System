@extends('layouts.frontend_master')

@section('content')
 


    <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <div class="banner-bg bg_img bg-fixed" data-background="{{ asset('/backend/background/img/'.$frontend['bg_img']) }}"></div>
        <div class="container">
            <div class="banner-content">
                <h1 class="title  cd-headline clip"><span class="d-block">book </span> for 
                    <span class="color-theme cd-words-wrapper p-0 m-0">
                        <b class="is-visible">Package</b>
                        <b>Hotel</b>
                        <b>Room</b>
                        <b>Lounge</b>
                        <b>Pickup Car</b>
                        <b>Rent Car</b>

                    </span>
                </h1>
                <p>{{$frontend->sub_title}}</p>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Ticket-Search========== -->
    <section class="search-ticket-section padding-top pt-lg-0">
        <div class="container">
            <div class="search-tab bg_img" data-background="{{asset('frontend/assets/images/ticket/ticket-bg01.jpg')}}">
                <div class="row align-items-center mb--20">
                    <div class="col-lg-6 mb-20">
                        <div class="search-ticket-header">
                            <h6 class="category">welcome to Boleto </h6>
                            <h3 class="title">what are you looking for</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-20">
                        <ul class="tab-menu ticket-tab-menu">
                            <li class="active">
                                <div class="tab-thumb">
                                    <img src="{{asset('frontend/assets/images/ticket/ticket-tab01.png')}}" alt="ticket">
                                </div>
                                <span>movie</span>
                            </li>
                            <li>
                                <div class="tab-thumb">
                                    <img src="{{asset('frontend/assets/images/ticket/ticket-tab02.png')}}" alt="ticket">
                                </div>
                                <span>events</span>
                            </li>
                            <li>
                                <div class="tab-thumb">
                                    <img src="{{asset('frontend/assets/images/ticket/ticket-tab03.png')}}" alt="ticket">
                                </div>
                                <span>sports</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-area">
                    <div class="tab-item active">
                        <form class="ticket-search-form">
                            <div class="form-group large">
                                <input type="text" placeholder="Search fo Movies">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/ticket/city.png')}}" alt="ticket">
                                </div>
                                <span class="type">city</span>
                                <select class="select-bar">
                                    <option value="london">London</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="rosario">rosario</option>
                                    <option value="madrid">madrid</option>
                                    <option value="koltaka">kolkata</option>
                                    <option value="rome">rome</option>
                                    <option value="khoksa">khoksa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/ticket/date.png')}}" alt="ticket">
                                </div>
                                <span class="type">date</span>
                                <select class="select-bar">
                                    <option value="26-12-19">23/10/2019</option>
                                    <option value="26-12-19">24/10/2019</option>
                                    <option value="26-12-19">25/10/2019</option>
                                    <option value="26-12-19">26/10/2019</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/ticket/cinema.png')}}" alt="ticket">
                                </div>
                                <span class="type">cinema</span>
                                <select class="select-bar">
                                    <option value="Awaken">Awaken</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="rosario">rosario</option>
                                    <option value="madrid">madrid</option>
                                    <option value="koltaka">kolkata</option>
                                    <option value="rome">rome</option>
                                    <option value="khoksa">khoksa</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="tab-item">
                        <form class="ticket-search-form">
                            <div class="form-group large">
                                <input type="text" placeholder="Search fo Events">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/ticket/city.png')}}" alt="ticket">
                                </div>
                                <span class="type">city</span>
                                <select class="select-bar">
                                    <option value="london">London</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="rosario">rosario</option>
                                    <option value="madrid">madrid</option>
                                    <option value="koltaka">kolkata</option>
                                    <option value="rome">rome</option>
                                    <option value="khoksa">khoksa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/ticket/date.png')}}" alt="ticket">
                                </div>
                                <span class="type">date</span>
                                <select class="select-bar">
                                    <option value="26-12-19">23/10/2019</option>
                                    <option value="26-12-19">24/10/2019</option>
                                    <option value="26-12-19">25/10/2019</option>
                                    <option value="26-12-19">26/10/2019</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/ticket/cinema.png')}}" alt="ticket">
                                </div>
                                <span class="type">event</span>
                                <select class="select-bar">
                                    <option value="angular">angular</option>
                                    <option value="startup">startup</option>
                                    <option value="rosario">rosario</option>
                                    <option value="madrid">madrid</option>
                                    <option value="koltaka">kolkata</option>
                                    <option value="Last-First">Last-First</option>
                                    <option value="wish">wish</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="tab-item">
                        <form class="ticket-search-form">
                            <div class="form-group large">
                                <input type="text" placeholder="Search fo Sports">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/ticket/city.png')}}" alt="ticket">
                                </div>
                                <span class="type">city</span>
                                <select class="select-bar">
                                    <option value="london">London</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="rosario">rosario</option>
                                    <option value="madrid">madrid</option>
                                    <option value="koltaka">kolkata</option>
                                    <option value="rome">rome</option>
                                    <option value="khoksa">khoksa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/ticket/date.png')}}" alt="ticket">
                                </div>
                                <span class="type">date</span>
                                <select class="select-bar">
                                    <option value="26-12-19">23/10/2019</option>
                                    <option value="26-12-19">24/10/2019</option>
                                    <option value="26-12-19">25/10/2019</option>
                                    <option value="26-12-19">26/10/2019</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/ticket/cinema.png')}}" alt="ticket">
                                </div>
                                <span class="type">sports</span>
                                <select class="select-bar">
                                    <option value="football">football</option>
                                    <option value="cricket">cricket</option>
                                    <option value="cabadi">cabadi</option>
                                    <option value="madrid">madrid</option>
                                    <option value="gadon">gadon</option>
                                    <option value="rome">rome</option>
                                    <option value="khoksa">khoksa</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <!-- ==========Ticket-Search========== -->

    <!-- ==========Movie-Section========== -->
    <section class="movie-section padding-top padding-bottom">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="left">
                        <h2 class="title">Package</h2>
                        <p>Be sure not to miss these Movies today.</p>
                    </div>
                    
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">

                            @foreach($packages as $package)
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="{{route('home.package.details',$package->id)}}">
                                            <img src="{{ asset('/backend/package/img/'.$package['img']) }}" alt="movie">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">Price</h6>
                                            <span>{{$package->price}} TK</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0"><a href="{{route('home.package.details',$package->id)}}">{{$package->pkg_name}} </a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                   
                                                </div>
                                               <a href="{{route('package.checkout', $package->id)}}" class="custom-button">Book </a>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <a href="{{route('home.package.details',$package->id)}}" class="custom-button">Details </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>

                            @endforeach
                          
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Movie-Section========== -->

    <!-- ==========Lounge-Section========== -->
    <section class="movie-section padding-top padding-bottom">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="left">
                        <h2 class="title">Lounge</h2>
                        <p>Be sure not to miss these Movies today.</p>
                    </div>
                    
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">

                            @foreach($lounges as $lounge)
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="{{route('home.lounge.details',$lounge->id)}}">
                                            <img src="{{ asset('/backend/Hotel/Lounge/img/'.$lounge['img']) }}" alt="movie">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">Price</h6>
                                            <span>{{$lounge->price}} TK</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0"><a href="{{route('lounge.details',$lounge->id)}}">{{$lounge->lounge_name}} </a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                   
                                                </div>
                                               <a href="{{route('lounge.checkout', $lounge->id)}}" class="custom-button">Book </a>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <a href="{{route('home.lounge.details',$lounge->id)}}" class="custom-button">Details </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>

                            @endforeach
                          
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Lounge-Section========== -->


     <!-- ==========Rent Car-Section========== -->
    <section class="movie-section padding-top padding-bottom">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="left">
                        <h2 class="title">Rent Car</h2>
                        <p>Be sure not to miss these Movies today.</p>
                    </div>
                    
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">

                            @foreach($rentCars as $rentCar)
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="{{route('home.rentCar.details',$rentCar->id)}}">
                                            <img src="{{ asset('/backend/Rentcar/img/'.$rentCar['img']) }}" alt="movie">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">Price</h6>
                                            <span>{{$rentCar->price}} TK</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0"><a href="{{route('home.rentCar.details',$rentCar->id)}}">{{$rentCar->rentCar_name}} </a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                   
                                                </div>
                                               <a href="{{route('rentCar.checkout', $rentCar->id)}}" class="custom-button">Book </a>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <a href="{{route('home.rentCar.details',$rentCar->id)}}" class="custom-button">Details </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>

                            @endforeach
                          
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Rent Car-Section========== -->


       <!-- ==========Event-Section========== -->
    <section class="event-section padding-top padding-bottom bg-four">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="left">
                        <h2 class="title">Hotel</h2>
                        <p>Be sure not to miss these Event today.</p>
                    </div>
                    
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">

                            @foreach($hotels as $hotel)
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="{{route('home.hotel.details',$hotel->id)}}">
                                            <img src="{{ asset('/backend/Hotel/img/'.$hotel['img']) }}" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="{{route('home.hotel.details',$hotel->id)}}">{{$hotel->htl_name}}</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                   
                                                </div>
                                               <a href="" class="custom-button">Book </a>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <a href="{{route('home.hotel.details',$hotel->id)}}" class="custom-button">Details </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                        </div>
                        @endforeach
                    </div>
                 
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Event-Section========== -->
  

@endsection