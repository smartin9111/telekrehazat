@extends('frontend.frontend_dashboard')
@section('main')
    <!-- banner-section -->
    @include('frontend.home.banner')
    <!-- banner-section end -->




    <!-- feature-section -->
    @include('frontend.home.feature')
    <!-- feature-section end -->


    <!-- allservices-section -->
    @include('frontend.home.allservices')
    <!-- allservices-section-end -->



    <!-- team-section -->
    @include('frontend.home.inspiration')
    <!-- team-section end -->

    <!-- articles-section -->
    @include('frontend.home.articles')
    <!-- articles-section end -->
    <div id="house">
        @include('frontend.home.guide')
    </div>
    <!-- chooseus-section -->
    @include('frontend.home.clients')
    <!-- chooseus-section end -->






    <!-- download-section -->
@endsection
