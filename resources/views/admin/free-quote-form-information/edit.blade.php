@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Update Free Quote Form Information</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Update Free Quote Form Information</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Update Free Quote Form Information</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.free-quote-form-information.update', $freeQuoteFormInformation->id) }}"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" name="your_name" value="{{ $freeQuoteFormInformation->your_name }}"
                            class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Your Email</label>
                        <input type="text" name="your_email" value="{{ $freeQuoteFormInformation->your_email }}"
                            class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Service Name</label>
                        <input type="text" name="all_service_name_id"
                            value="{{ $freeQuoteFormInformation->allServiceName->service_name }}" class="form-control"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label>Special Note</label>
                        <textarea name="special_note" class="form-control" readonly>{{ $freeQuoteFormInformation->special_note }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Seen</label>
                        <select name="seen" class="form-control">
                            <option @selected($freeQuoteFormInformation->seen === 'yes') value="yes">Yes</option>
                            <option @selected($freeQuoteFormInformation->seen === 'no') value="no">No</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection
