<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
            <h1 class="display-5 mb-5">Our Projects</h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    @foreach ($categories as $category)
                        <li class="mx-2" data-filter=".{{ $category->slug }}">
                            {{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">
            @foreach ($categories as $category)
                @php
                    $ourProjects = App\Models\OurProject::where([
                        'status' => 1,
                        'category_id' => $category->id,
                    ])
                        ->orderBy('id', 'DESC')
                        ->take(8)
                        ->get();
                @endphp
                @foreach ($ourProjects as $ourProject)
                    <div class="col-lg-4 col-md-6 portfolio-item {{ $category->slug }} wow fadeInUp"
                        data-wow-delay="0.1s">
                        <div class="portfolio-inner">
                            <img class="img-fluid w-100" src="{{ asset($ourProject->thumb_image) }}" alt="">
                            <div class="text-center p-4">
                                <p class="text-primary mb-2">{{ $ourProject->title }}</p>
                                <h5 class="lh-base mb-0">{{ $ourProject->description }}</h5>
                            </div>
                            <div class="portfolio-text text-center bg-white p-4">
                                <p class="text-primary mb-2">{{ $ourProject->title }}</p>
                                <h5 class="lh-base mb-3">{{ $ourProject->description }}</h5>
                                <div class="d-flex justify-content-center">
                                    {{-- <a class="btn btn-square btn-primary rounded-circle mx-1"
                                        href="{{ asset('frontend/img/portfolio-1.jpg') }}" data-lightbox="portfolio"><i
                                            class="fa fa-eye"></i></a> --}}
                                    <a class="btn btn-square btn-primary rounded-circle mx-1"
                                        href="{{ $ourProject->url }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>
