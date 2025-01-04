@extends('frontend.layouts.master')

@push('frontend-css')
    <title>Securex | Support</title>
    <!-- toastr css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
@endpush

@section('frontend-content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Support</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Support</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Support Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                <h1 class="display-5 mb-5">Support</h1>
            </div>
            <div class="row g-0">
                {!! @$supportPageContent['support_page_content'] !!}
            </div>
        </div>
    </div>
    <!-- Support End -->
@endsection
