<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center">
            <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
            <h1 class="display-5 mb-5">Our Services</h1>
        </div>
        <div class="row g-0 service-row">
            @foreach ($ourServices as $ourService)
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset($ourService->image) }}" alt="Icon">
                        </div>
                        <h4 class="mb-3">{{ $ourService->title }}</h4>
                        <p class="mb-4">{{ $ourService->description }}</p>
                        <a class="btn" href="{{ $ourService->button_url }}"><i
                                class="fa fa-arrow-right text-white me-3"></i>Read
                            More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
