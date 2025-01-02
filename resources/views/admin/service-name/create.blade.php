@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Create Service Name</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Create Service Name</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Service Name</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.service-name.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Service Name</label>
                        <input type="text" name="service_name" value="{{ old('service_name') }}" class="form-control">
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
