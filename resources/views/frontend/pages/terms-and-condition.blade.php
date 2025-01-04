@extends('frontend.layouts.master')

@push('frontend-css')
    <title>Securex | Terms And Condition</title>
    <!-- toastr css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
@endpush

@section('frontend-content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Terms And Condition</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Terms And Condition</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Terms And Condition Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                <h1 class="display-5 mb-5">Terms And Condition</h1>
            </div>
            <div class="row g-0">
                {!! @$termsAndConditionPageContent['terms_and_condition_page_content'] !!}
            </div>
        </div>
    </div>
    <!-- Terms And Condition End -->
@endsection
