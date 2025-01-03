@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Create Social Link</title>
    <!-- bootstrap-iconpicker css link -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap-iconpicker.css') }}" />
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Create Social Link</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Social Link</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.social-link.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Icon</label>
                        <br>
                        <button class="btn btn-secondary" role="iconpicker" name="icon" data-icon=""></button>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input type="text" name="link" value="{{ old('link') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('admin-js')
    <!-- bootstrap-iconpicker js link -->
    <script src="{{ asset('admin/assets/js/bootstrap-iconpicker.js') }}"></script>
@endpush
