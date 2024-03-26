@extends('frontend.frontend_dashboard')
@section('main')
    <!--Page Title-->
    <section class="page-title-two bg-color-1 centred">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('frontend/assets/images/shape/shape-9.png') }});">
            </div>
            <div class="pattern-2" style="background-image: url({{ asset('frontend/assets/images/shape/shape-10.png') }});">
            </div>
        </div>
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>{{ $property->property_name }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Főoldal</a></li>
                    <li>{{ $property->typePlanName }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- property-details -->
    <section class="property-details property-details-one">
        <div class="auto-container">

            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="property-details-content">
                        <div class="carousel-inner">
                            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                                @foreach ($multiImage as $img)
                                    <figure class="image-box"><img src="{{ asset($img->photo_name) }}" alt="">
                                    </figure>
                                @endforeach
                            </div>
                        </div>
                        <div class="discription-box content-widget">
                            <div class="title-box">
                                <h4>Technológia</h4>
                            </div>
                            <div class="text">
                                <p>{!! $property->short_description !!}</p>
                            </div>
                        </div>

                        <div class="details-box content-widget">
                            <div class="title-box">
                                <h4>Részletek</h4>
                            </div>
                            <ul class="list clearfix">
                                <li>Ár Bruttó: <span>{{ $property->priceGross }} Ft</span></li>
                                <li>Ár Nettó: <span>{{ $property->priceNet }} Ft</span></li>
                                <li>Típusterv neve: <span>{{ $property->typePlanName }}</span></li>


                                <li>Alaprajz neve: <span>{{ $property->floorMap }}</span></li>
                                <li>Hasznos terület: <span>{{ $property->useFullArea }} m2</span></li>
                                <li>Szintek: <span>{{ $property->floors }}</span></li>
                                <li>Szobák: <span>{{ $property->rooms }}</span></li>
                                <li>Fürdöszobák: <span>{{ $property->bathrooms }}</span></li>
                                <li>Terasz: <span>{{ $property->terraceSize }} m2</span></li>
                                <li>Belmagasság: <span>{{ $property->innerHeight }} cm</span></li>
                                <li>Terv típusa: <span>{{ $property->planType }}</span></li>
                                <li>Akadálymentes: <span>{{ $property->accessibility }}</span></li>
                                <li>Kivitelezés: <span>{{ $property->terraceSize }} hónap</span></li>
                                <li>Falazat: <span>{{ $property->wallType }}</span></li>
                                <li>Alap: <span>{{ $property->foundation }}</span></li>
                                <li>Fűtés: <span>{{ $property->heatingType }}</span></li>
                                <li>Fűtési energia ellátása: <span>{{ $property->heatingEnergySupply }}</span></li>
                                <li>Hűtés: <span>{{ $property->coolingType }}</span></li>
                                <li>Megújuló energia <span>{{ $property->renewableEnergy }}</span></li>
                                <li>Energia osztály: <span>{{ $property->energeticClassification }}</span></li>
                                <li>Állapot: <span>{{ $property->levelOfPreparation }}</span></li>
                                <li>Az ár érvényes: <span>{{ $property->priceAvailable }}</span></li>
                            </ul>
                        </div>


                        <div class="discription-box content-widget">
                            <div class="title-box">

                            </div>
                            <div class="text">
                                <p>Az ezen az oldalon látható leírás egy a Telekre Házat Kft. által – tájékoztatás céljából
                                    – szerkesztett tartalom. Nem tekinthető ajánlattételnek! A pontos részletekkel és
                                    műszaki leírással kapcsolatban érdeklődjön Partnerünknél!</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="property-sidebar default-sidebar">
                        <div class="author-widget sidebar-widget">
                            <div class="author-box">
                                <figure class="author-thumb"><img src="assets/images/resource/author-1.jpg" alt="">
                                </figure>
                                <div class="inner">
                                    <h4>{{ $property->company_name }}</h4>
                                    <ul class="info clearfix">
                                        <li><i class="fas fa-dollar-sign"></i>Br {{ $property->priceGross }} Ft</li>
                                        <li><i class="fas fa-phone"></i>{{ $property->telephone }}</li>
                                        <li><i class="fas fa-envelope"></i>{{ $property->email }}</li>
                                        <li><i class="fas fa-calendar-alt"></i>
                                            {{ $property->priceAvailable }}</li>
                                        <li><i class="fas fa-id-badge"></i>{{ $property->typePlanName }}</li>
                                        <li><i class="fas fa-globe"></i><a href="{{ $property->company_link }}">Link</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- property-details end -->
@endsection
