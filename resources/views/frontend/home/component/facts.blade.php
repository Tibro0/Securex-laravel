<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            @foreach ($facts as $fact)
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100 bg-dark p-4 p-xl-5">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="btn-square rounded-circle"
                                style="width: 64px; height: 64px; background: #000000;">
                                <img class="img-fluid" src="{{ asset($fact->image) }}" alt="Icon">
                            </div>
                            <h1 class="display-1 mb-0" style="color: #000000;">{{ $loop->iteration }}</h1>
                        </div>
                        <h5 class="text-white">{{ $fact->title }}</h5>
                        <hr class="w-25">
                        <span>{{ $fact->description }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
