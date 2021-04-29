    @extends('public.layout.layout')
    <!-- Page Content-->
    <!-- Swiper-->
    @section('content')
    <div class="swiper-container swiper-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="Assests/images/home-slide-1-1920x600.jpg" alt="" width="1920" height="600"/>
                <div class="swiper-slide-caption">
                    <div class="container text-center text-md-left">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-xl-9">
                                <h1>We've reimagined the home renovation experience!</h1>
                                <div class="swiper-slide-text">
                                    <h5 class="text-style-1">Welcome to Trunk, the leading home renovation services provider. We have been bringing the ideas of our clients into life since 1999.</h5>
                                </div>
                                <div class="offset-top-35"><a class="btn btn-primary btn-mod-1" href="appointment.html">Order a consultation</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide"><img src="Assests/images/home-slide-2-1920x600.jpg" alt="" width="1920" height="600"/>
                <div class="swiper-slide-caption">
                    <div class="container text-center text-md-left">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-xl-7">
                                <h1>Plumbing. Painting. Anything!</h1>
                                <div class="offset-top-35 offset-sm-top-65"><a class="btn btn-primary btn-mod-1" href="appointment.html">Order a consultation</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide"><img src="Assests/images/home-slide-3-1920x600.jpg" alt="" width="1920" height="600"/>
                <div class="swiper-slide-caption">
                    <div class="container text-center text-md-left">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-xl-7">
                                <h1>Professional. Friendly. Courteous.</h1>
                                <div class="swiper-slide-text">
                                    <h5 class="text-style-1">You can fully rely on our professionals. With years of experience, they are glad to help you with any renovation.</h5>
                                </div>
                                <div class="offset-top-35"><a class="btn btn-primary btn-mod-1" href="appointment.html">Order a consultation</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination-wrap">
            <div class="container">
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <!-- Counters-->
    <section class="section-80 section-md-110">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <!-- CountTo-->
                    <div class="counter-wrap"><span style="color:#FFAB17" class="icon icon-lg icon-gray-600 linecons-like"></span>
                        <div class="counter-value">
                            <p class="h3"><span  class="counter" data-from="0" data-to="100">100%</span><span class="symbol">%</span></p>
                        </div>
                        <div style="background:#FFAB17" class="divider-center divider-md divider-primary"></div>
                        <div class="counter-text">
                            <p class="text-style-2">Customer Satisfaction</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3 offset-top-45 offset-xs-top-0">
                    <!-- CountTo-->
                    <div class="counter-wrap"><span style="color:#FFAB17" class="icon icon-lg icon-gray-600 linecons-small58"></span>
                        <div class="counter-value">
                            <p class="h3"><span class="counter" data-from="0" data-to="10">10</span></p>
                        </div>
                        <div style="background:#FFAB17" class="divider-center divider-md divider-primary"></div>
                        <div class="counter-text">
                            <p class="text-style-2">Years in the Market</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3 offset-top-45 offset-md-top-0">
                    <!-- CountTo-->
                    <div class="counter-wrap"><span style="color:#FFAB17" class="icon icon-lg icon-gray-600 linecons-user12"></span>
                        <div class="counter-value">
                            <p class="h3"><span  class="counter" data-from="0" data-to="2954">2 954</span></p>
                        </div>
                        <div style="background:#FFAB17" class="divider-center divider-md divider-primary"></div>
                        <div class="counter-text">
                            <p class="text-style-2">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3 offset-top-45 offset-md-top-0">
                    <!-- CountTo-->
                    <div class="counter-wrap"><span style="color:#FFAB17" class="icon icon-lg-variant-1 icon-gray-600 linecons-tv1"></span>
                        <div class="counter-value">
                            <p class="h3"><span class="counter" data-from="0" data-to="3597">3 597</span></p>
                        </div>
                        <div style="background:#FFAB17" class="divider-center divider-md divider-primary"></div>
                        <div class="counter-text">
                            <p class="text-style-2">Projects Completed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Services-->
    <section>
        <div class="section-60 section-sm-110 bg-light">
            <div class="bg-light-element"></div>
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-12" >
                        <h2 class="text-white">Our Services</h2>
                        <p  class="big text-gray">Take a look at the range of services that our renovation experts offer.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-60 section-sm-110">
            <div class="container container-wide container-1 container-mod-1">
                <div class="row">
                    <!-- Slick Carousel-->
                    <div class="slick-slider slick-slider-style-1" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-xs-items="2" data-md-items="3" data-lg-items="3" data-xl-items="4" data-xxl-items="6" data-slide-to-scroll="1" data-mobile-center-mode="true" data-sm-center-mode="false" data-center-padding="30px" data-sm-center-padding="0.5">
                        <div class="item height-fill">
                            <div class="product"><a class="product-image" href="services.html#painting"><img src="Assests/images/icon-01-101x100.png" alt="" width="101" height="100"/></a>
                                <div class="product-caption">
                                    <div style="background: #FFAB17" class="divider divider-sm divider-primary"></div>
                                    <div class="product-title">
                                        <h5><a href="services.html#painting">Painting</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item height-fill">
                            <div class="product"><a class="product-image" href="services.html#plumbing"><img src="Assests/images/icon-02-101x100.png" alt="" width="101" height="100"/></a>
                                <div class="product-caption">
                                    <div style="background: #FFAB17"  class="divider divider-sm divider-primary"></div>
                                    <div class="product-title">
                                        <h5><a href="services.html#plumbing">Plumbing</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item height-fill">
                            <div class="product"><a class="product-image" href="services.html#painting"><img src="Assests/images/icon-03-101x100.png" alt="" width="101" height="100"/></a>
                                <div class="product-caption">
                                    <div style="background: #FFAB17"  class="divider divider-sm divider-primary"></div>
                                    <div class="product-title">
                                        <h5><a href="services.html#painting">Cleaning</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item height-fill">
                            <div class="product"><a class="product-image" href="services.html#cleaning"><img src="Assests/images/icon-04-101x100.png" alt="" width="101" height="100"/></a>
                                <div class="product-caption">
                                    <div style="background: #FFAB17"  class="divider divider-sm divider-primary"></div>
                                    <div class="product-title">
                                        <h5><a href="services.html#cleaning">Electricity</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item height-fill">
                            <div class="product"><a class="product-image" href="services.html#roofing"><img src="Assests/images/icon-05-101x100.png" alt="" width="101" height="100"/></a>
                                <div class="product-caption">
                                    <div style="background: #FFAB17"  class="divider divider-sm divider-primary"></div>
                                    <div class="product-title">
                                        <h5><a href="services.html#roofing">Roofing</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item height-fill">
                            <div class="product"><a class="product-image" href="services.html#renovation"><img src="Assests/images/icon-06-101x100.png" alt="" width="101" height="100"/></a>
                                <div class="product-caption">
                                    <div style="background: #FFAB17"  class="divider divider-sm divider-primary"></div>
                                    <div class="product-title">
                                        <h5><a href="services.html#renovation">Renovation</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container offset-top-30 offset-sm-top-40">
                <div class="text-center"><a class="btn btn-primary min-width-230" href="/services">view all services</a></div>
            </div>
        </div>
    </section>

    <!-- Manufacturers-->
    <section class="parallax-container bg-black" data-parallax-img="images/parallax-1.jpg">
        <div class="parallax-content section-60 section-lg-110">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-12">
                        <h2>Our Partners</h2>
                        <div style="background: #FFAB17" class="divider divider-md divider-primary"></div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-carousel-style-1" data-autoplay="true" data-items="1" data-sm-items="3" data-lg-items="4" data-xl-items="5" data-stage-padding="0" data-loop="true" data-margin="30" data-sm-margin="73" data-nav="false" data-dots="true" data-sm-dots-each="2">
                        <div class="item"><a class="link-image link-image-contrast" href="#"><img src="Assests/images/clients-inverse-1-200x90.png" alt="" width="200" height="90"/></a></div>
                        <div class="item"><a class="link-image link-image-contrast" href="#"><img src="Assests/images/clients-inverse-2-200x90.png" alt="" width="200" height="90"/></a></div>
                        <div class="item"><a class="link-image link-image-contrast" href="#"><img src="Assests/images/clients-inverse-3-200x90.png" alt="" width="200" height="90"/></a></div>
                        <div class="item"><a class="link-image link-image-contrast" href="#"><img src="Assests/images/clients-inverse-4-200x90.png" alt="" width="200" height="90"/></a></div>
                        <div class="item"><a class="link-image link-image-contrast" href="#"><img src="Assests/images/clients-inverse-5-200x90.png" alt="" width="200" height="90"/></a></div>
                        <div class="item"><a class="link-image link-image-contrast" href="#"><img src="Assests/images/clients-inverse-6-200x90.png" alt="" width="200" height="90"/></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Happy Customer Testimonials-->
    <section class="section-60 section-sm-top-110 section-sm-bottom-100">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <h2>What Our Clients Say</h2>
                    <div class="divider divider-md divider-primary"></div>
                </div>
            </div>
            <div class="row">
                <!-- Owl Carousel-->
                <div class="owl-carousel" data-autoplay="true" data-items="1" data-md-items="2" data-lg-items="3" data-stage-padding="15" data-loop="true" data-margin="30" data-nav="false" data-dots="true" data-dots-each="1">
                    <div class="item">
                        <blockquote class="quote-variant-1">
                            <div class="quote-meta">
                                <div class="unit unit-spacing-xs align-items-center flex-row">
                                    <div class="unit-left">
                                        <figure class="quote-image"><img src="Assests/images/home-12-47x47.jpg" alt="" width="47" height="47"/>
                                        </figure>
                                    </div>
                                    <div class="unit-body">
                                        <cite>Jennifer West</cite>
                                        <p class="small">Housewife</p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-body">
                                <p>
                                    <q>
                                        I just wanted to say thank you and the team very much for the brilliant service around renovating the floors at our house.

                                    </q>
                                </p>
                            </div>
                        </blockquote>
                    </div>
                    <div class="item">
                        <blockquote class="quote-variant-1">
                            <div class="quote-meta">
                                <div class="unit unit-spacing-xs align-items-center flex-row">
                                    <div class="unit-left">
                                        <figure class="quote-image"><img src="Assests/images/home-13-47x47.jpg" alt="" width="47" height="47"/>
                                        </figure>
                                    </div>
                                    <div class="unit-body">
                                        <cite>Patrick Carlson</cite>
                                        <p class="small">Web Designer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-body">
                                <p>
                                    <q>
                                        The floor looks magnificent and the parquet in the hall sets it off beautifully. Your men were excellent, you were delightful and nothing was too much trouble for you.

                                    </q>
                                </p>
                            </div>
                        </blockquote>
                    </div>
                    <div class="item">
                        <blockquote class="quote-variant-1">
                            <div class="quote-meta">
                                <div class="unit unit-spacing-xs align-items-center flex-row">
                                    <div class="unit-left">
                                        <figure class="quote-image"><img src="Assests/images/home-14-47x47.jpg" alt="" width="47" height="47"/>
                                        </figure>
                                    </div>
                                    <div class="unit-body">
                                        <cite>Christine Bryant</cite>
                                        <p class="small">Journalist</p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-body">
                                <p>
                                    <q>I would strongly recommend Trunk. Our project was not the largest, but you wouldn’t have known that from the level of service and professionalism we received.</q>
                                </p>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Blog Posts-->
    <section class="section-60 section-sm-110 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white">Latest Blog Posts</h2>
                    <div style="background: #FFAB17"  class="divider divider-md divider-primary"></div>
                </div>
            </div>
            <div class="isotope-wrap offset-top-35 offset-md-top-55">
                <div class="row isotope isotope-spacing-1" data-isotope-layout="masonry">
                    <div class="col-sm-6 col-md-4 isotope-item">
                        <article class="post post-variant-1">
                            <figure class="post-image"><a class="post-image-link" href="blog-post.html"><img src="Assests/images/home-16-370x247.jpg" alt="" width="370" height="247"/></a></figure>
                            <div class="post-body">
                                <div class="post-header">
                                    <h6><a href="blog-post.html">6 Home Renovation Mistakes</a></h6>
                                </div>
                                <div class="post-meta">
                                    <time datetime="2020-03-05">May 26, 2020 at 10:34 am</time>
                                </div>
                                <div class="post-text">
                                    <p>Taking on a renovation takes time, money and effort – so you want to get it done right the first time! To help make sure your home renovation is a smooth, fun and fulfilling process, our renovation specialists...</p>
                                </div>
                                <div class="post-footer">
                                    <ul class="list-tags-variant-1">
                                        <li><a href="#">News</a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 isotope-item">
                        <article class="post post-variant-1">
                            <figure class="post-image"><a class="post-image-link" href="blog-post.html"><img src="Assests/images/home-17-370x247.jpg" alt="" width="370" height="247"/></a></figure>
                            <div class="post-body">
                                <div class="post-header">
                                    <h6><a href="blog-post.html">How to Future-Proof Your Next Office Renovation Project</a></h6>
                                </div>
                                <div class="post-meta">
                                    <time datetime="2020-03-05">May 26, 2020 at 10:34 am</time>
                                </div>
                                <div class="post-text">
                                    <p>In light of a global pandemic, weeks of lockdown and heightened hygiene, the average office started to look a little different. While this particular disruption to business...</p>
                                </div>
                                <div class="post-footer">
                                    <ul class="list-tags-variant-1">
                                        <li><a href="#">News</a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 isotope-item">
                        <article class="post post-variant-1">
                            <figure class="post-image"><a class="post-image-link" href="blog-post.html"><img src="Assests/images/home-18-370x247.jpg" alt="" width="370" height="247"/></a></figure>
                            <div class="post-body">
                                <div class="post-header">
                                    <h6><a href="blog-post.html">Designing your Dream Kitchen</a></h6>
                                </div>
                                <div class="post-meta">
                                    <time datetime="2020-03-05">May 26, 2020 at 10:34 am</time>
                                </div>
                                <div class="post-text">
                                    <p>Kitchen renovations have a reputation for being expensive – but don’t let a tight budget put you off upgrading this crucial room. With clever design, strategic decisions and clear communications, building a dreamy kitchen...</p>
                                </div>
                                <div class="post-footer">
                                    <ul class="list-tags-variant-1">
                                        <li><a href="#">News</a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="container offset-top-30 offset-sm-top-60">
            <div class="text-center"><a class="btn btn-primary min-width-230" href="/blog">view all blog posts</a></div>
        </div>
    </section>

    <!-- Google Map-->
    <section class="section">
        <div class="google-map-container" data-zoom="5" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:43},{&quot;lightness&quot;:-11},{&quot;hue&quot;:&quot;#0088ff&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#ff0000&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:99}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#808080&quot;},{&quot;lightness&quot;:54}]},{&quot;featureType&quot;:&quot;landscape.man_made&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ece2d9&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ccdca1&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#767676&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;landscape.natural&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#b8cb93&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.sports_complex&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.medical&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]}]">
            <div class="google-map google-map-big"></div>
            <ul class="google-map-markers">
                <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
            </ul>
        </div>
    </section>
    @endsection
