<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container quote px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('frontend/img/quote.jpg') }}"
                        style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                    <h1 class="display-5 mb-5">Free Quote</h1>
                    <p class="mb-4 pb-2">{{ @$allDescription['free_quote_description'] }}</p>
                    <form action="{{ route('free-quote-form.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" name="your_name" value="{{ old('your_name') }}"
                                    class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                @if ($errors->has('your_name'))
                                    <p class="error text-danger mt-1 mb-0">{{ $errors->first('your_name') }}</p>
                                @endif
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" name="your_email" value="{{ old('your_email') }}"
                                    class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                @if ($errors->has('your_email'))
                                    <p class="error text-danger mt-1 mb-0">{{ $errors->first('your_email') }}</p>
                                @endif
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" name="your_mobile" value="{{ old('your_mobile') }}"
                                    class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                @if ($errors->has('your_mobile'))
                                    <p class="error text-danger mt-1 mb-0">{{ $errors->first('your_mobile') }}</p>
                                @endif
                            </div>
                            <div class="col-12 col-sm-6">
                                <select name="all_service_name_id" class="form-select border-0" style="height: 55px;">
                                    <option selected value="">Select A Service</option>
                                    @foreach ($allServiceNames as $allServiceName)
                                        <option value="{{ $allServiceName->id }}">{{ $allServiceName->service_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('all_service_name_id'))
                                    <p class="error text-danger mt-1 mb-0">{{ $errors->first('all_service_name_id') }}
                                    </p>
                                @endif
                            </div>
                            <div class="col-12">
                                <textarea name="special_note" class="form-control border-0" placeholder="Special Note">{{ old('special_note') }}</textarea>
                                @if ($errors->has('special_note'))
                                    <p class="error text-danger mt-1 mb-0">{{ $errors->first('special_note') }}</p>
                                @endif
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Get A Free
                                    Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
