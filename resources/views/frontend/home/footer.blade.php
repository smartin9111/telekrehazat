<footer class="main-footer">
    <div class="footer-top bg-color-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml-70">
                        <div class="widget-title">
                            <h3>Linkek</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list class">
                                <li><a href="/impressum">Impresszum</a></li>
                                <li><a href="/littlesmart">Kisokos</a></li>
                                <li><a href="/about_us">Rólunk</a></li>
                                <li><a href="{{ route('properties.all') }}">Típustervek</a></li>
                                <li><a href="/inspiration_details">Inspiráció</a></li>
                                <li><a href="/articles">Cikkek</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Kapcsolat</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">

                                <li><i class="fas fa-envelope"></i><a
                                        href="mailto:info@telekrehazat.hu">info@telekrehazat.hu</a></li>
                            </ul>
                        </div>
                        <section class="mb-4">
                            <!-- Facebook -->
                            <a class="btn btn-outline-light btn-floating m-1"
                                href="https://www.facebook.com/telekrehazatkft" role="button">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <!-- Instagram -->
                            <a class="btn btn-outline-light btn-floating m-1"
                                href="https://www.instagram.com/telekrehazat/?hl=en" role="button">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a class="btn btn-outline-light btn-floating m-1"
                                href="https://www.linkedin.com/company/telekrehazat/about/" role="button">
                                <i class="fab fa-linkedin"></i>
                            </a>






                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-box clearfix">
                <figure class="footer-logo"><a href="/">
                        <div
                            style="width: 130px; height: 130px; background-color: white; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                            <img style="width: 110px; height:auto; border-radius:20px;"
                                src="{{ asset('frontend/assets/images/footer_logo.png') }}" alt="">
                        </div>

                    </a>
                </figure>
                <div class="copyright pull-left">
                    <p><a href="/">TELEKREHÁZAT</a> &copy; 2024 Minden jog fentartva!</p>
                </div>
                <ul class="footer-nav pull-right clearfix">
                    <li><a href="/">Szolgáltatás feltételei</a></li>
                    <li><a href="/">Adatvédelmi irányelvek</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
