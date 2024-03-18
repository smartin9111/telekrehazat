@php
    $property = App\Models\Property::where('featured', '1')->limit(3)->get();
@endphp

<section class="feature-section sec-pad bg-color-1">
    <div class="auto-container">
        <div class="sec-title centred">
        </div>
        <div class="row clearfix">

            @foreach ($property as $item)
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset($item->property_thambnail) }}" alt="">
                                </figure>
                                <span class="category">Kiemelt</span>
                            </div>
                            <div class="lower-content">
                                <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        <figure class="author-thumb"></figure>
                                        <h6>{{ $item->levelOfPreparation }}</h6>
                                    </div>
                                    <div class="buy-btn pull-right"><a
                                            href="{{ url('property/details/' . $item->id) }}">Nézd meg
                                            {{ $item->energeticClasssification }}</a></div>
                                </div>
                                <div class="title-text">
                                    <h4><a href="property-details.html">{{ $item->company_name }}</a></h4>
                                </div>
                                <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>Netto</h6>
                                        <h4>${{ $item->priceNet }}</h4>
                                    </div>

                                </div>
                                <p>{{ $item->short_descp }}</p>
                                <ul class="more-details clearfix">
                                    <li><i class="icon-14"></i>{{ $item->rooms }} szobák</li>
                                    <li><i class="icon-15"></i>{{ $item->bathrooms }} fürdők</li>
                                    <li><i class="icon-16"></i>{{ $item->useFullArea }} m2</li>

                                </ul>
                                <div class="btn-box"><a href="{{ url('property/details/' . $item->id) }}"
                                        class="theme-btn btn-two">See Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <div class="more-btn centred"><a href="{{ route('properties.all') }}" class="theme-btn btn-one">Összes</a>
        </div>
    </div>
</section>
