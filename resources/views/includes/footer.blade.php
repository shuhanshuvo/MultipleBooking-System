   <!-- ==========Newslater-Section========== -->
    <footer class="footer-section">
        <div class="newslater-section padding-bottom">
            <div class="container">
                <div class="newslater-container bg_img" data-background="assets/images/newslater/newslater-bg01.jpg">
                    <div class="newslater-wrapper">
                        <h5 class="cate">subscribe to Boleto </h5>
                        <h3 class="title">to get exclusive benifits</h3>
                        <form class="newslater-form" action="{{ url('/subscriber') }}" method="post">
                            {{ csrf_field() }}
                            <input type="text" placeholder="Your Email Address" name="subs_mail">
                            <button type="submit">subscribe</button>
                        </form>
                        <p>We respect your privacy, so we never share your info</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-top">
                <div class="logo">
                    <a href="index-1.html">
                        <img src="{{asset('frontend/assets/images/footer/footer-logo.png')}}" alt="footer">
                    </a>
                </div>
                <ul class="social-icons">
                    <li>
                        <a href="#0">
                            <i class="fab fa-{{$gnrlstng->facebook }}"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0" class="active">
                            <i class="fab fa-{{ $gnrlstng->tweeter }}"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-{{ $gnrlstng->linkin }}"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-{{ $gnrlstng->google_plus }}"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-{{ $gnrlstng->youtube }}"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom-area">
                    <div class="left">
                        <p>Copyright © 2020.All Rights Reserved By <a href="#0">{!!$gnrlstng->fotr_btm_txt!!}</a></p>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="#0">About</a>
                        </li>
                        <li>
                            <a href="#0">Terms Of Use</a>
                        </li>
                        <li>
                            <a href="#0">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#0">FAQ</a>
                        </li>
                        <li>
                            <a href="#0">Feedback</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>