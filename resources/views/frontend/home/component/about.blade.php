<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100"
                        src="{{ asset($aboutUs['0']['right_main_image']) }}" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                    <h1 class="display-5 mb-4">{{ $aboutUs['0']['left_title'] }}</h1>
                    <p class="mb-4 pb-2">{{ $aboutUs['0']['left_description'] }}</p>
                    <div class="row g-4 mb-4 pb-3">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center">
                                <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                    <img class="img-fluid" src="{{ asset($aboutUs['0']['left_icon_first_image']) }}"
                                        alt="Icon">
                                </div>
                                <div class="ms-4">
                                    <h2 class="mb-1" data-toggle="counter-up">
                                        {{ $aboutUs['0']['left_icon_first_number'] }}</h2>
                                    <p class="fw-medium text-primary mb-0">{{ $aboutUs['0']['left_icon_first_title'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center">
                                <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                    <img class="img-fluid" src="{{ asset($aboutUs['0']['left_icon_second_image']) }}"
                                        alt="Icon">
                                </div>
                                <div class="ms-4">
                                    <h2 class="mb-1" data-toggle="counter-up">
                                        {{ $aboutUs['0']['left_icon_second_number'] }}</h2>
                                    <p class="fw-medium text-primary mb-0">{{ $aboutUs['0']['left_icon_second_title'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ $aboutUs['0']['left_button_url'] }}"
                        class="btn btn-primary rounded-pill py-3 px-5">{{ $aboutUs['0']['left_button_title'] }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
