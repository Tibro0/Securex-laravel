@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Create Footer Grid Three</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Create Footer Grid Three</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Footer Grid Three</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.footer-grid-three.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>URL</label>
                        <input type="text" name="url" value="{{ old('url') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Priority Number</label>
                        <input type="text" name="priority_number" value="{{ old('priority_number') }}"
                            class="form-control">
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
