@extends('layout.admin')
@section('content')


    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="{{asset('images/fondo2.jpg') }}" alt="">
                    <div class="text-content">
                        <h1>Bienvenido</h1>
                        <h1 style="color: #000000; background-color: #FFFFFF;">{{ ucwords($nombre) }}</h1>



                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="{{asset('images/fondo2-2.jpg') }}" alt="">
                    <div class="text-content">

                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="{{asset ('images/fondo3.jpg') }}" alt="">
                    <div class="text-content">

                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Acerca</h6>
                            <h2>We work with top brands and startups</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="{{asset ('images/service-item-01.png') }}" alt="">
                                    <h4>Top Notch</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="{{asset('images/service-item-01.png') }}" alt="">
                                    <h4>Robust</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="{{asset('images/contact-info-03.png') }}" alt="">
                                    <h4>Reliable</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="{{asset('images/contact-info-03.png') }}" alt="">
                                    <h4>Up-to-date</h4>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="#" class="main-button-icon">
                                    Learn More <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-text-content">
                        <p><a rel="nofollow noopener" href="https://templatemo.com/tm-543-breezed" target="_parent">Breezed HTML Template</a> is provided by TemplateMo for absolutely free of charge. You can download, edit and use this for your non-commercial and commercial websites.
                            <br><br>Redistributing this template as a downloadable ZIP file on any template collection website is strictly prohibited. You will need to talk to us if you want to redistribute this template. Thank you.
                            <br><br>This is a Bootstrap v4.3.1 CSS layout. Do you like it? You can feel free to <a rel="nofollow noopener" href="https://templatemo.com/contact" target="_parent">talk to us</a> if you have anything.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="{{asset('images/features-icon-1.png') }}" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Initial Work</h4>
                            <p>Proin euismod sem ut diam ultricies, ut faucibus velit ultricies. Nam eu turpis quam. Duis ac condimentum eros.</p>
                            <a href="#" class="text-button-icon">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="{{asset('images/features-icon-1.png') }}" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Master Planning</h4>
                            <p>Proin euismod sem ut diam ultricies, ut faucibus velit ultricies. Nam eu turpis quam. Duis ac condimentum eros.</p>
                            <a href="#" class="text-button-icon">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="{{asset('images/features-icon-1.png')}}" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Smooth Execution</h4>
                            <p>Proin euismod sem ut diam ultricies, ut faucibus velit ultricies. Nam eu turpis quam. Duis ac condimentum eros.</p>
                            <a href="#" class="text-button-icon">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h6>Subscribe Newsletters</h6>
                        <h2>Don’t miss this chance!</h2>
                    </div>
                    <div class="subscribe-content">
                        <p>Vivamus suscipit blandit nibh, in cursus mi. Proin vel blandit metus, et auctor elit. Vivamus tincidunt tristique convallis. Ut nec odio vel arcu euismod semper nec ac sem.</p>
                        <div class="subscribe-form">
                            <form id="subscribe-now" action="" method="get">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" id="email" placeholder="Enter your email..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="main-button">Subscribe Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Projects Area Starts ***** -->
    <section class="section" id="projects">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="section-heading">
                        <h6>Our Projects</h6>
                        <h2>Some of our latest projects</h2>
                    </div>
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".des">Web Design</li>
                            <li data-filter=".dev">Web Development</li>
                            <li data-filter=".gra">Graphics</li>
                            <li data-filter=".tsh">Artworks</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="filters-content">
                        <div class="row grid">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                                <div class="item">
                                    <a href="{{asset ('images/project-big-item-01.jpg')}}" data-lightbox="image-1" data-title="Our Projects"><img src="{{asset ('images/project-item-01.jpg') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                                <div class="item">
                                    <a href="{{asset('images/project-big-item-02.jpg') }}" data-lightbox="image-1" data-title="Our Projects"><img src="{{asset ('images/project-item-02.jpg') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all gra">
                                <div class="item">
                                    <a href="{{asset ('images/project-big-item-03.jpg') }}" data-lightbox="image-1" data-title="Our Projects"><img src="{{asset('images/project-item-03.jpg')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all tsh">
                                <div class="item">
                                    <a href="{{asset('images/project-big-item-04.jpg') }}" data-lightbox="image-1" data-title="Our Projects"><img src="{{asset('images/project-item-04.jpg') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                                <div class="item">
                                    <a href="{{asset('images/project-big-item-05.jpg') }}" data-lightbox="image-1" data-title="Our Projects"><img src="{{asset('images/project-item-05.jpg') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                                <div class="item">
                                    <a href="{{asset ('images/project-big-item-06.jpg')}}" data-lightbox="image-1" data-title="Our Projects"><img src="{{asset('images/project-item-06.jpg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Projects Area Ends ***** -->

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h6>Digital Team</h6>
                        <h2>young and talented members</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{asset('images/member-item-01.jpg')}}" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.01 White Cheese</h4>
                            <span>Digital Marketer</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{asset('images/member-item-04.jpg') }}" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.02 Snow Mary</h4>
                            <span>Site Analyst</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{asset('images/member-item-02.jpg')}}" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.03 Johnny Egg</h4>
                            <span>Digital Influencer</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{asset('images/member-item-05.jpg')}}" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.04 Catherine Phyu</h4>
                            <span>Co Founder</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{asset('images/member-item-03.jpg') }}" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.05 Shao Lynn</h4>
                            <span>Chief Marketing</span>
                        </div>

                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{asset('images/member-item-04.jpg')}}" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.06 Emma Honey</h4>
                            <span>Digital Influencer</span>
                        </div>

                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{asset('images/member-item-06.jpg') }}" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.07 Oliva Sofie</h4>
                            <span>Website Analyst</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Feel free to keep in touch with us!</h2>
                        </div>
                        <ul class="contact-info">
                            <li><img src="{{asset('images/contact-info-01.png')}}" alt="">010-020-0860</li>
                            <li><img src="{{asset('images/contact-info-02.png')}}" alt="">info@company.com</li>
                            <li><img src="{{asset('images/contact-info-03.png')}}" alt="">www.company.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Your Name *" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="phone" type="text" id="phone" placeholder="Your Phone" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="email" id="email" placeholder="Your Email *" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="Subject">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button-icon">Send Message Now <i class="fa fa-arrow-right"></i></button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->

@endsection

