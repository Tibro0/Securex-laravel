@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Why Choose Us Description</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Why Choose Us Description</h1>
        </div>
        <div class="card card-primary">
            <div class="card-body">
                <form action="{{ route('admin.why-choose-us-description.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Why Choose Us Description</label>
                        <textarea name="why_choose_us_description" class="form-control">{{ @$description['why_choose_us_description'] }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection
