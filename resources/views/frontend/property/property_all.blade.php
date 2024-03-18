@extends('frontend.frontend_dashboard')
@section('main')
    <!-- page wrapper -->

    <!-- page-content end -->
    <div class="page-content clearfix">

        <div class="left-column pull-left">

        </div>

        <div class="right-column pull-right">


            <!-- deals-style-two -->
            <section class="deals-style-two">
                <div class="auto-container">
                    <div class="item-shorting clearfix">
                        <div class="left-column pull-left">
                            <h5>Search Reasults: <span>Showing 1-5 of 20 Listings</span></h5>
                        </div>
                        <div class="right-column pull-right clearfix">
                            <div class="short-box clearfix">
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Sort by: Newest">Sort by: Newest</option>
                                        <option value="1">New Arrival</option>
                                        <option value="2">Top Rated</option>
                                        <option value="3">Offer Place</option>
                                        <option value="4">Most Place</option>
                                    </select>
                                </div>
                            </div>
                            <div class="short-menu clearfix">
                                <button class="list-view on"><i class="icon-35"></i></button>
                                <button class="grid-view"><i class="icon-36"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper list">
                        <div class="deals-list-content list-item">

                            @foreach ($property as $item)
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img
                                                    src="{{ asset($item->property_thambnail) }}"style="width: 300px; height: 350px;"
                                                    alt="">
                                            </figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">{{ $item->priceAvailable }}</span>
                                            <div class="buy-btn"><a
                                                    href="{{ url('property/details/' . $item->id) }}">Mutasd</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title-text">
                                                <h4><a href="property-details.html">{{ $item->typePlanName }}</a></h4>
                                            </div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Bruttó Ár</h6>
                                                    <h4>{{ $item->priceGross }} Ft</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb">

                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Partnerünk elérhetősége: <a
                                                    href="{{ $item->company_link }}">{{ $item->company_link }}</a></p>

                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>{{ $item->rooms }} Szobák</li>
                                                <li><i class="icon-15"></i>{{ $item->baths }} Fürdők</li>
                                                <li><i class="icon-16"></i>{{ $item->useFullArea }} m2</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a
                                                        href="{{ url('property/details/' . $item->id) }}"
                                                        class="theme-btn btn-two">Részletek</a></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                        <div class="deals-grid-content">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/feature/feature-1.jpg"
                                                        alt="">
                                                </figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <div class="author-info clearfix">
                                                    <div class="author pull-left">
                                                        <figure class="author-thumb"><img
                                                                src="assets/images/feature/author-1.jpg" alt="">
                                                        </figure>
                                                        <h6>Michael Bean</h6>
                                                    </div>
                                                    <div class="buy-btn pull-right"><a href="property-details.html">For
                                                            Buy</a></div>
                                                </div>
                                                <div class="title-text">
                                                    <h4><a href="property-details.html">Villa on Grand Avenue</a>
                                                    </h4>
                                                </div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$30,000.00</h4>
                                                    </div>
                                                    <ul class="other-option pull-right clearfix">
                                                        <li><a href="property-details.html"><i class="icon-12"></i></a>
                                                        </li>
                                                        <li><a href="property-details.html"><i class="icon-13"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                </ul>
                                                <div class="btn-box"><a href="{{ url('property/details/' . $item->id) }}"
                                                        class="theme-btn btn-two">See Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/feature/feature-2.jpg"
                                                        alt="">
                                                </figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <div class="author-info clearfix">
                                                    <div class="author pull-left">
                                                        <figure class="author-thumb"><img
                                                                src="assets/images/feature/author-2.jpg" alt="">
                                                        </figure>
                                                        <h6>Robert Niro</h6>
                                                    </div>
                                                    <div class="buy-btn pull-right"><a href="property-details.html">For
                                                            Rent</a></div>
                                                </div>
                                                <div class="title-text">
                                                    <h4><a href="property-details.html">Contemporary Apartment</a>
                                                    </h4>
                                                </div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$45,000.00</h4>
                                                    </div>
                                                    <ul class="other-option pull-right clearfix">
                                                        <li><a href="property-details.html"><i class="icon-12"></i></a>
                                                        </li>
                                                        <li><a href="property-details.html"><i class="icon-13"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                </ul>
                                                <div class="btn-box"><a href="property-details.html"
                                                        class="theme-btn btn-two">See Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/feature/feature-3.jpg"
                                                        alt="">
                                                </figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <div class="author-info clearfix">
                                                    <div class="author pull-left">
                                                        <figure class="author-thumb"><img
                                                                src="assets/images/feature/author-3.jpg" alt="">
                                                        </figure>
                                                        <h6>Keira Mel</h6>
                                                    </div>
                                                    <div class="buy-btn pull-right"><a href="property-details.html">Sold
                                                            Out</a></div>
                                                </div>
                                                <div class="title-text">
                                                    <h4><a href="property-details.html">Luxury Villa With Pool</a>
                                                    </h4>
                                                </div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$63,000.00</h4>
                                                    </div>
                                                    <ul class="other-option pull-right clearfix">
                                                        <li><a href="property-details.html"><i class="icon-12"></i></a>
                                                        </li>
                                                        <li><a href="property-details.html"><i class="icon-13"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                </ul>
                                                <div class="btn-box"><a href="property-details.html"
                                                        class="theme-btn btn-two">See Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/feature/feature-4.jpg"
                                                        alt="">
                                                </figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <div class="author-info clearfix">
                                                    <div class="author pull-left">
                                                        <figure class="author-thumb"><img
                                                                src="assets/images/feature/author-1.jpg" alt="">
                                                        </figure>
                                                        <h6>Michael Bean</h6>
                                                    </div>
                                                    <div class="buy-btn pull-right"><a
                                                            href="{{ url('property/details/' . $item->id) }}">For
                                                            Buy</a></div>
                                                </div>
                                                <div class="title-text">
                                                    <h4><a href="property-details.html">Home in Merrick Way</a>
                                                    </h4>
                                                </div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$30,000.00</h4>
                                                    </div>
                                                    <ul class="other-option pull-right clearfix">
                                                        <li><a href="property-details.html"><i class="icon-12"></i></a>
                                                        </li>
                                                        <li><a href="property-details.html"><i class="icon-13"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                </ul>
                                                <div class="btn-box"><a href="property-details.html"
                                                        class="theme-btn btn-two">See Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/feature/feature-5.jpg"
                                                        alt="">
                                                </figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <div class="author-info clearfix">
                                                    <div class="author pull-left">
                                                        <figure class="author-thumb"><img
                                                                src="assets/images/feature/author-2.jpg" alt="">
                                                        </figure>
                                                        <h6>Robert Niro</h6>
                                                    </div>
                                                    <div class="buy-btn pull-right"><a href="property-details.html">For
                                                            Rent</a></div>
                                                </div>
                                                <div class="title-text">
                                                    <h4><a href="property-details.html">Apartment in Glasgow</a>
                                                    </h4>
                                                </div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$45,000.00</h4>
                                                    </div>
                                                    <ul class="other-option pull-right clearfix">
                                                        <li><a href="property-details.html"><i class="icon-12"></i></a>
                                                        </li>
                                                        <li><a href="property-details.html"><i class="icon-13"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                </ul>
                                                <div class="btn-box"><a href="property-details.html"
                                                        class="theme-btn btn-two">See Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/feature/feature-6.jpg"
                                                        alt="">
                                                </figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <div class="author-info clearfix">
                                                    <div class="author pull-left">
                                                        <figure class="author-thumb"><img
                                                                src="assets/images/feature/author-3.jpg" alt="">
                                                        </figure>
                                                        <h6>Keira Mel</h6>
                                                    </div>
                                                    <div class="buy-btn pull-right"><a href="property-details.html">Sold
                                                            Out</a></div>
                                                </div>
                                                <div class="title-text">
                                                    <h4><a href="property-details.html">Family Home For Sale</a>
                                                    </h4>
                                                </div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$63,000.00</h4>
                                                    </div>
                                                    <ul class="other-option pull-right clearfix">
                                                        <li><a href="property-details.html"><i class="icon-12"></i></a>
                                                        </li>
                                                        <li><a href="property-details.html"><i class="icon-13"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                </ul>
                                                <div class="btn-box"><a href="property-details.html"
                                                        class="theme-btn btn-two">See Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrapper">

                        {{ $property->links('vendor.pagination.custom') }}

                    </div>
                </div>
            </section>
            <!-- deals-style-two end -->
        </div>

    </div>
    <!-- page-content end -->

    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fal fa-angle-up"></span>
    </button>
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jQuery.style.switcher.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/jquery.paroller.min.js"></script>
    <script src="assets/js/product-filter.js"></script>
    <script src="assets/js/nav-tool.js"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>
@endsection
