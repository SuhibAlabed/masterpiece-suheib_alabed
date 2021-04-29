@extends('public.layout.layout')
@section('content')
    <!-- Breadcrumbs-->
    <section class="section-40 section-lg-64 bg-light-05">
        <div class="breadcrumbs-wrap">
            <div class="container text-center">
                <div class="wrap-sm-justify-horizontal">
                    <div class="text-md-left">
                        <h1 class="breadcrumbs-custom-title text-white">Contacts</h1>
                    </div>
                    <div class="offset-top-22 offset-md-top-0 text-md-right">
                        <ul class="breadcrumbs-custom">
                            <li ><a href="/" class="text-white">Home</a></li>
                            <li class="text-white">Contacts</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-60 section-sm-90">
        <div class="container">
            <div class="row row-60">
                <div class="col-lg-8">
                    <h5>Get in Touch</h5>
                    <hr>
                    <p>You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit our office personally.</p>
                    <p>We would be happy to answer your questions.</p>
                    <div class="offset-top-50">
                        <!-- RD Mailform-->
                        <form class="rd-mailform" data-form-output="form-output-global" data-form-type="forms" method="post" action="bat/rd-mailform.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="form-label-outside" for="contact-first-name">First name</label>
                                        <input class="form-input" id="contact-first-name" type="text" name="first-name" data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="col-md-6 offset-top-18 offset-md-top-0">
                                    <div class="form-wrap">
                                        <label class="form-label-outside" for="contact-last-name">Last name</label>
                                        <input class="form-input" id="contact-last-name" type="text" name="last-name" data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="col-md-6 offset-top-18">
                                    <div class="form-wrap">
                                        <label class="form-label-outside" for="contact-email">E-mail</label>
                                        <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                    </div>
                                </div>
                                <div class="col-md-6 offset-top-18">
                                    <div class="form-wrap">
                                        <label class="form-label-outside" for="contact-phone">Phone</label>
                                        <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Required @Numeric">
                                    </div>
                                </div>
                                <div class="col-sm-12 offset-top-18">
                                    <div class="form-wrap">
                                        <label class="form-label-outside" for="contact-message">Message</label>
                                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 offset-top-30">
                                    <button class="btn btn-primary" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row inset-xl-left-30">
                        <div class="col-md-6 col-lg-12">
                            <h5>Social</h5>
                            <hr>
                            <!-- List social-->
                            <ul class="list-inline list-inline-xxs">
                                <li><a class="icon icon-xs icon-circle icon-white icon-filled-facebook fa-facebook" href="https://www.facebook.com/suheib.alabed/"></a></li>
                                <li><a class="icon icon-xs icon-circle icon-white icon-filled-google fa-google" href="#"></a></li>
                                <li><a class="icon icon-xs icon-circle icon-white icon-filled-linkedin fa-linkedin" href="https://www.linkedin.com/in/suheib-alabed/"></a></li>
                            </ul>
                            <div class="offset-top-30 offset-md-top-55">
                                <h5>Phone</h5>
                                <hr>
                                <address class="contact-info">
                                    <div class="unit flex-row unit-spacing-xs">
                                        <div class="unit-left icon-adjust-vertical"><span class="icon icon-xs icon-primary mdi mdi-phone"></span></div>
                                        <div class="text-dark">
                                            <ul class="list-links">
                                                <li ><a href="tel:#">+962 778870791</a></li><br>
                                                <li><a href="tel:#">+962 798388572</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </address>
                            </div>
                            <div class="offset-top-30 offset-md-top-55">
                                <h5>Address</h5>
                                <hr>
                                <address class="contact-info">
                                    <div class="unit flex-row unit-spacing-xs">
                                        <div class="unit-left icon-adjust-vertical"><span class="icon icon-xs icon-primary mdi mdi-map-marker"></span></div>
                                        <div class="text-dark"><a class="nowrap" href="#">
                                                2319 Wasfi Al-Tal Street, Khalda,<br>Amman, Jordan</a></div>
                                    </div>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 offset-top-30 offset-md-top-0 offset-lg-top-55">
                            <h5>Open Hours</h5>
                            <hr>
                            <div class="offset-top-22">
                                <div class="contact-info">
                                    <div class="unit flex-row unit-spacing-xs">
                                        <div class="unit-left icon-adjust-vertical"><span class="icon icon-xs icon-primary mdi mdi-calendar-clock"></span></div>
                                        <div class="text-dark"><span>Mon-Fri: 9:00am-6:00pm</span><br><span>Sat-Sun: 10:00am-5:00pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-30 offset-md-top-55">
                                <h5>E-mail</h5>
                                <hr>
                                <div class="unit flex-row unit-spacing-xs offset-top-22">
                                    <div class="unit-left icon-adjust-vertical"><span class="icon icon-xs icon-primary mdi mdi-email-outline"></span></div>
                                    <div class="text-dark"><a href="mailto:#">suhib.alabed@gmail.com</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <!-- Google Map-->
        <div class="google-map-container" data-zoom="5" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:43},{&quot;lightness&quot;:-11},{&quot;hue&quot;:&quot;#0088ff&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#ff0000&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:99}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#808080&quot;},{&quot;lightness&quot;:54}]},{&quot;featureType&quot;:&quot;landscape.man_made&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ece2d9&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ccdca1&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#767676&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;landscape.natural&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#b8cb93&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.sports_complex&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.medical&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]}]">
            <div class="google-map google-map-big"></div>
            <ul class="google-map-markers">
                <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
            </ul>
        </div>
    </section>

@endsection
