@extends('layouts.frontend_master')

@section('content')

    <section class="details-banner bg_img" data-background="{{asset('frontend/assets/images/banner/banner03.jpg')}}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-thumb">
                    <img src="{{ asset('/backend/package/img/'.$packages['img']) }}" alt="movie">
                    
                       
                    </a>
                </div>
                <div class="details-banner-content offset-lg-3">
                    <h3 class="title">{{$packages->pkg_name}}</h3>
                    <div class="tags">
                        <a href="#0">English</a>
                        <a href="#0">Hindi</a>
                        <a href="#0">Telegu</a>
                        <a href="#0">Tamil</a>
                    </div>
                    <a href="#0" class="button">horror</a>
                    <div class="social-and-duration">
                        <div class="duration-area">
                            <div class="item">
                                <i class="fas fa-calendar-alt"></i><span>06 Dec, 2020</span>
                            </div>
                            <div class="item">
                                <i class="far fa-clock"></i><span>2 hrs 50 mins</span>
                            </div>
                        </div>
                        <ul class="social-share">
                            <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#0"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Book-Section========== -->
    <section class="book-section bg-one">
        <div class="container">
            <div class="book-wrapper offset-lg-3">
                <div class="left-side">

                    <div class="item">
                        <div class="item-header">
                            <div class="thumb">
                                Price
                            </div>
                           
                        </div>
                        <p>{{$packages->price}} TK</p>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="thumb">
                                {{$packages->min_num}}
                            </div>
                            
                        </div>
                        <p>Minimum Number of Persons</p>
                    </div>
                
                 
                    <div class="item">
                        <div class="item-header">
                            <h5 class="title">{{ $avg_rating }}</h5>
                            <div class="rated">
                                   <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                            </div>
                        </div>
                        <p>Users Rating</p>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <!-- div class="rated rate-it">
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                            </div> -->

                               
                           <form class="rating" action="{{route('service.rating')}}" method="post">
                            @csrf

                                 <input type="hidden" name="pkg_id" value="{{$packages->id}}">
                                  <label>
                                    <input type="radio" name="stars" value="1" />
                                    <span class="icon">★</span>
                                  </label>
                                  <label>
                                    <input type="radio" name="stars" value="2" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                  </label>
                                  <label>
                                    <input type="radio" name="stars" value="3" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>   
                                  </label>
                                  <label>
                                    <input type="radio" name="stars" value="4" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                  </label>
                                  <label>
                                    <input type="radio" name="stars" value="5" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                  </label>
                                  <br>
                                  <br>
                                  <br>
                                  <button type="submit" class="btn btn-primary">rate</button>
                                </form>
                                
                        </div>
                    </div>
                </div>
                <a href="{{route('package.checkout', $packages->id)}}" class="custom-button">Book Package</a>
            </div>
        </div>
    </section>
    <!-- ==========Book-Section========== -->

    <!-- ==========Movie-Section========== -->
    <section class="movie-details-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center flex-wrap-reverse mb--50">
                <div class="col-lg-3 col-sm-10 col-md-6 mb-50">
                    <div class="widget-1 widget-tags">
                        <ul>
                            <li>
                                <a href="#0">2D</a>
                            </li>
                            <li>
                                <a href="#0">imax 2D</a>
                            </li>
                            <li>
                                <a href="#0">4DX</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-1 widget-offer">
                        <h3 class="title">Applicable offer</h3>
                        <div class="offer-body">
                            <div class="offer-item">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/sidebar/offer01.png')}}" alt="sidebar">
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="#0">Amazon Pay Cashback Offer</a>
                                    </h6>
                                    <p>Win Cashback Upto Rs 300*</p>
                                </div>
                            </div>
                            <div class="offer-item">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/sidebar/offer02.png')}}" alt="sidebar">
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="#0">PayPal Offer</a>
                                    </h6>
                                    <p>Transact first time with Paypal and
                                        get 100% cashback up to Rs. 500</p>
                                </div>
                            </div>
                            <div class="offer-item">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/sidebar/offer03.png')}}" alt="sidebar">
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="#0">HDFC Bank Offer</a>
                                    </h6>
                                    <p>Get 15% discount up to INR 100* 
                                        and INR 50* off on F&B T&C apply</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="{{asset('frontend/assets/images/sidebar/banner/banner01.jpg')}}" alt="banner">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mb-50">
                    <div class="movie-details">
                        <h3 class="title">photos</h3>
                        <div class="details-photos owl-carousel">
                            
                            <div class="thumb">
                                <a href="{{ asset('/backend/package/img/'.$packages['img']) }}" class="img-pop">
                                    <img src="{{ asset('/backend/package/img/'.$packages['img']) }}" alt="movie">
                                </a>
                            </div>
                            <div class="thumb">
                                <a href="{{ asset('/backend/package/img/'.$packages['img']) }}" class="img-pop">
                                    <img src="{{ asset('/backend/package/img/'.$packages['img']) }}" alt="movie">
                                </a>
                            </div>
                            <div class="thumb">
                                <a href="{{ asset('/backend/package/img/'.$packages['img']) }}" class="img-pop">
                                    <img src="{{ asset('/backend/package/img/'.$packages['img']) }}" alt="movie">
                                </a>
                            </div>
                            <div class="thumb">
                                <a href="{{ asset('/backend/package/img/'.$packages['img']) }}" class="img-pop">
                                    <img src="{{ asset('/backend/package/img/'.$packages['img']) }}" alt="movie">
                                </a>
                            </div>
                            <div class="thumb">
                                <a href="{{ asset('/backend/package/img/'.$packages['img']) }}" class="img-pop">
                                    <img src="{{ asset('/backend/package/img/'.$packages['img']) }}" alt="movie">
                                </a>
                            </div>
                        </div>
                        <div class="tab summery-review">
                            <ul class="tab-menu">
                                <li class="active">
                                    Overview
                                </li>
                                
                            </ul>
                            <div class="tab-area">
                                <div class="tab-item active">
                                    <div class="item">
                                        <h5 class="sub-title">Overview</h5>
                                        <p>{!!$packages->overview !!}</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Movie-Section========== -->



@endsection
