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
                            <h5>Találat: {{ $property->total() }}<span> Mutat
                                    {{ $property->firstItem() }}-{{ $property->lastItem() }}
                                </span></h5>
                        </div>
                        <div class="right-column pull-right clearfix">x
                            <div class="short-box clearfix">
                                <div class="select-box">

                                </div>
                            </div>
                            <div class="short-menu clearfix">

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
                                                <li><i class="icon-15"></i>{{ $item->bathrooms }} Fürdők</li>
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
@endsection
