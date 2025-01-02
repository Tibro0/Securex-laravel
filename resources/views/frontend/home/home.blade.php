@extends('frontend.layouts.master')

@push('frontend-css')
    <title>Securex | Home</title>
    <!-- toastr css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
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

@push('frontend-js')
    <!-- toastr js link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options.progressBar = true;

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif
    </script>
@endpush
