@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Free Quote Description</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Free Quote Description</h1>
        </div>
        <div class="card card-primary">
            <div class="card-body">
                <form action="{{ route('admin.free-quote-description.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Free Quote Description</label>
                        <textarea name="free_quote_description" class="form-control">{{ @$description['free_quote_description'] }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection
