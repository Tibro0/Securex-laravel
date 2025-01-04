@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Contact Form Message Description</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Contact Form Message Description</h1>
        </div>
        <div class="card card-primary">
            <div class="card-body">
                <form action="{{ route('admin.contact-form-page-description.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Contact Form Message Description</label>
                        <textarea name="contact_form_page_description" class="form-control">{{ @$contactFormPageDescription['contact_form_page_description'] }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection
