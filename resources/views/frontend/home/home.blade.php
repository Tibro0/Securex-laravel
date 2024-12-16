@extends('frontend.layouts.master')

@push('frontend-css')
    <title>Securex | Home</title>
@endpush

@section('frontend-content')
    <!-- Carousel Start -->
    @include('frontend.home.component.carousel')
    <!-- Carousel End -->

    <!-- Facts Start -->
    @include('frontend.home.component.facts')
    <!-- Facts Start -->

    <!-- About Start -->
    @include('frontend.home.component.about')
    <!-- About End -->

    <!-- Service Start -->
    @include('frontend.home.component.service')
    <!-- Service End -->

    <!-- Feature Start -->
    @include('frontend.home.component.feature')
    <!-- Feature End -->

    <!-- Projects Start -->
    @include('frontend.home.component.projects')
    <!-- Projects End -->

    <!-- Quote Start -->
    @include('frontend.home.component.quote')
    <!-- Quote End -->

    <!-- Team Start -->
    @include('frontend.home.component.team')
    <!-- Team End -->

    <!-- Testimonial Start -->
    @include('frontend.home.component.testimonial')
    <!-- Testimonial End -->
@endsection
