<!-- footer -->
<footer class="mil-dark-bg">
    <div class="mi-invert-fix">
        <div class="container mil-p-120-60">
            <div class="row justify-content-between">
                <div class="col-md-4 col-lg-4 mil-mb-60">

                    <a href="{{ url('/') }}" class="mil-logo">
                        <img src="{{ asset('img/icons/logo-white.svg') }}" alt="Logo">
                    </a>

                    <p class="mil-light-soft mil-up mil-mb-30">Subscribe our newsletter:</p>

                    <form class="mil-subscribe-form mil-up" method="POST" action="#">
                        @csrf
                        <input type="email" name="email" placeholder="Enter your email">
                        <button type="submit" class="mil-button mil-icon-button-sm mil-arrow-place"></button>
                    </form>

                </div>
                <div class="col-md-7 col-lg-6">
                    <div class="row justify-content-end">
                        <div class="col-md-6 col-lg-7">

                            <nav class="mil-footer-menu mil-mb-60">
                                <ul>
                                    <li class="mil-up {{ Request::is('/') ? 'mil-active' : '' }}">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="mil-up">
                                        <a href="#">Portfolio - Coming Soon</a>
                                    </li>
                                    <li class="mil-up {{ Request::is('about-us') ? 'mil-active' : '' }}">
                                        <a href="{{ url('about-us') }}">About Us</a>
                                    </li>
                                    <li class="mil-up {{ Request::is('contact') ? 'mil-active' : '' }}">
                                        <a href="{{ url('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                        <div class="col-md-6 col-lg-5">
                            <ul class="mil-menu-list mil-up mil-mb-60">
                                <li><a href="{{ url('privacy-policy') }}" class="mil-light-soft">Privacy Policy</a></li>
                                <li><a href="{{ url('terms') }}" class="mil-light-soft">Terms and Conditions</a></li>
                                <li><a href="{{ url('cookie') }}" class="mil-light-soft">Cookie Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between flex-sm-row-reverse">
                <div class="col-md-7 col-lg-6">

                    <div class="row justify-content-between">

                        <div class="col-md-6 col-lg-5 mil-mb-60">

                            <h6 class="mil-muted mil-up mil-mb-30">India</h6>

                            <p class="mil-light-soft mil-up">
                                Vijay Nagar 136 34 A2, Indore, Madhya Pradesh 
                                <span class="mil-no-wrap">+91 9755859988</span> <br>
                                <a href="mailto:Business@flowvox.in">Business@flowvox.in</a>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-lg-6 mil-mb-60">
                    <div class="mil-vert-between">
                        <div class="mil-mb-30">
                            <ul class="mil-social-icons mil-up">
                                <li><a href="#" target="_blank" class="social-icon"><i class="far fa-circle"></i></a></li>
                                <li><a href="#" target="_blank" class="social-icon"><i class="far fa-circle"></i></a></li>
                                <li><a href="#" target="_blank" class="social-icon"><i class="far fa-circle"></i></a></li>
                                <li><a href="#" target="_blank" class="social-icon"><i class="far fa-circle"></i></a></li>
                            </ul>
                        </div>
                        <p class="mil-light-soft mil-up">© Copyright {{ date('Y') }} - FlowVox. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
