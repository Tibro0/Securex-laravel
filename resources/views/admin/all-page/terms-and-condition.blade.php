@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Terms And Condition Page</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/summernote/summernote-bs4.css') }}">
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Update Terms And Condition Page</h1>
        </div>
        <div class="card card-primary">
            <div class="card-body">
                <form action="{{ route('admin.terms-and-condition-page.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Terms And Condition Page Content</label>
                        <textarea name="terms_and_condition_page_content" class="form-control summernote">{!! @$termsAndConditionContent['terms_and_condition_page_content'] !!}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('admin-js')
    <script src="{{ asset('admin/assets/modules/summernote/summernote-bs4.js') }}"></script>
@endpush
