<div class="rts-footer-area footer-three rts-section-gapTop footer-bg-2">
    <div class="container pb--100 pb_sm--40">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-6">
                <div class="footer-three-single-wized left">
                    <a href="index.html" class="logo_footer">
                        <img src="{{ config('data.footer_logo') }}" alt="Logo-image">
                    </a>
                    <p class="disc">{{ config('data.footer_about') }}</p>
                    <ul class="social-three-wrapper">
                        <li><a href="{{ config('data.facebook') }}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ config('data.twitter') }}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ config('data.linkedin') }}"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="{{ config('data.instagram') }}"><i class="fab fa-instagram"></i></a></li>
                        {{-- <li><a href="#"><i class="fab fa-skype"></i></a></li> --}}
                    </ul>
                </div>
            </div>
            <!-- footer three mid area -->
            <div class="col-xl-8 col-lg-6">
                <div class="row">
                    <!-- footer mid area left -->
                    <div class="col-lg-6">
                        <div class="footer-three-single-wized mid-left">
                            <h5 class="title">Office Information</h5>
                            <div class="body">
                                <div class="info-wrapper">
                                    <div class="single">
                                        <ul class="icon">
                                            <li><i class="fas fa-phone-alt"></i></li>
                                        </ul>
                                        <div class="info">
                                            <span>Call Us 24/7</span>
                                            <a href="#">{{ config('data.phone1') }}</a>
                                        </div>
                                    </div>
                                    <div class="single">
                                        <ul class="icon">
                                            <li><i class="far fa-envelope"></i></li>
                                        </ul>
                                        <div class="info">
                                            <span>Work with us</span>
                                            <a href="#">{{ config('data.email') }}</a>
                                        </div>
                                    </div>
                                    <div class="single">
                                        <ul class="icon">
                                            <li><i class="fas fa-map-marker-alt"></i></li>
                                        </ul>
                                        <div class="info">
                                            <span>Our Location</span>
                                            <a href="#">{{ config('data.address') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer mid area left end -->

                    <!-- footer mid area right -->
                    <div class="col-lg-6">
                        <div class="footer-three-single-wized mid-right">
                            <h5 class="title">Get Updates</h5>
                            <div class="body">
                                <div class="update-wrapper">
                                    <p class="disc">Sign up for our latest news &amp; articles. We won’t give you
                                        spam
                                        mails.</p>
                                    <form class="email-footer-area">
                                        <input type="email" placeholder="Enter Email Address" required="">
                                        <button type="submit"><i class="fas fa-location-arrow"></i></button>
                                    </form>
                                    <div class="note-area">
                                        <p><span>Note:</span> We do not publish your email</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer mid area right end -->
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area ptb--20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="disc text-center">
                        {{ config('data.name') }} - Copyright
                        <script>
                            document.write(
                                new Date().getFullYear()
                            )
                        </script>. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>