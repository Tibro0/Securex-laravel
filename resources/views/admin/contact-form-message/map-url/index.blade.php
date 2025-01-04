@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Contact Form Message Map</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Contact Form Message Map</h1>
        </div>
        <div class="card card-primary">
            <div class="card-body">
                <form action="{{ route('admin.contact-form-page-map.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Contact Form Message Map</label>
                        <textarea name="contact_form_page_map" style="height: 150px !important;" class="form-control">{{ @$contactFormPageMap['contact_form_page_map'] }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection
