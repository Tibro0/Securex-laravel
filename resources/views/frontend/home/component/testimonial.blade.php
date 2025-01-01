<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
            <h1 class="display-5 mb-5">Testimonial</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            @foreach ($testimonials as $testimonial)
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset($testimonial->image) }}' alt=''>">
                    <p class="fs-5">{{ $testimonial->description }}</p>
                    <h4>{{ $testimonial->client_name }}</h4>
                    <span class="text-primary">{{ $testimonial->profession }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
