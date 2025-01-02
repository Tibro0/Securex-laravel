@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Update Service Name</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Update Service Name</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Update Service Name</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.service-name.update', $serviceName->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Service Name</label>
                        <input type="text" name="service_name" value="{{ $serviceName->service_name }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option @selected($serviceName->status === 1) value="1">Active</option>
                            <option @selected($serviceName->status === 0) value="0">InActive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection
