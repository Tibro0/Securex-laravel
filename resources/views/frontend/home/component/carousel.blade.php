<div class="container-fluid p-0 pb-5">
    <div class="owl-carousel header-carousel position-relative">
        @foreach ($sliders as $slider)
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset($slider->image) }}">
                <div class="carousel-inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h1 class="display-3 text-white animated slideInDown mb-4">{{ $slider->title }}</h1>
                                <p class="fs-5 text-white mb-4 pb-2">{{ $slider->description }}</p>
                                <a href="{{ $slider->first_button_url }}"
                                    class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft">{{ $slider->first_button_name }}</a>
                                <a href="{{ $slider->second_button_url }}"
                                    class="btn btn-light rounded-pill py-md-3 px-md-5 animated slideInRight">{{ $slider->second_button_name }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
