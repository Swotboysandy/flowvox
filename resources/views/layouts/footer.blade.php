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
 <!-- hidden elements -->
 <div class="mil-hidden-elements">
                    <div class="mil-dodecahedron">
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mil-arrow">
                        <path d="M 14 5.3417969 C 13.744125 5.3417969 13.487969 5.4412187 13.292969 5.6367188 L 13.207031 5.7226562 C 12.816031 6.1136563 12.816031 6.7467188 13.207031 7.1367188 L 17.070312 11 L 4 11 C 3.448 11 3 11.448 3 12 C 3 12.552 3.448 13 4 13 L 17.070312 13 L 13.207031 16.863281 C 12.816031 17.254281 12.816031 17.887344 13.207031 18.277344 L 13.292969 18.363281 C 13.683969 18.754281 14.317031 18.754281 14.707031 18.363281 L 20.363281 12.707031 C 20.754281 12.316031 20.754281 11.682969 20.363281 11.292969 L 14.707031 5.6367188 C 14.511531 5.4412187 14.255875 5.3417969 14 5.3417969 z" />
                    </svg>

                    <svg width="250" viewBox="0 0 300 1404" fill="none" xmlns="http://www.w3.org/2000/svg" class="mil-lines">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1 892L1 941H299V892C299 809.71 232.29 743 150 743C67.7096 743 1 809.71 1 892ZM0 942H300V892C300 809.157 232.843 742 150 742C67.1573 742 0 809.157 0 892L0 942Z" class="mil-move" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M299 146V97L1 97V146C1 228.29 67.7096 295 150 295C232.29 295 299 228.29 299 146ZM300 96L0 96V146C0 228.843 67.1573 296 150 296C232.843 296 300 228.843 300 146V96Z" class="mil-move" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M299 1H1V1403H299V1ZM0 0V1404H300V0H0Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M150 -4.37115e-08L150 1404L149 1404L149 0L150 -4.37115e-08Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M150 1324C232.29 1324 299 1257.29 299 1175C299 1092.71 232.29 1026 150 1026C67.7096 1026 1 1092.71 1 1175C1 1257.29 67.7096 1324 150 1324ZM150 1325C232.843 1325 300 1257.84 300 1175C300 1092.16 232.843 1025 150 1025C67.1573 1025 0 1092.16 0 1175C0 1257.84 67.1573 1325 150 1325Z" class="mil-move" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M300 1175H0V1174H300V1175Z" class="mil-move" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M150 678C232.29 678 299 611.29 299 529C299 446.71 232.29 380 150 380C67.7096 380 1 446.71 1 529C1 611.29 67.7096 678 150 678ZM150 679C232.843 679 300 611.843 300 529C300 446.157 232.843 379 150 379C67.1573 379 0 446.157 0 529C0 611.843 67.1573 679 150 679Z" class="mil-move" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M299 380H1V678H299V380ZM0 379V679H300V379H0Z" class="mil-move" />
                    </svg>
                </div>
                <!-- hidden elements end -->

<!-- footer end -->
