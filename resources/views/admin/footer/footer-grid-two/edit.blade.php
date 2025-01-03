@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Update Footer Grid Two</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Update Footer Grid Two</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Update Footer Grid Two</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.footer-grid-two.update', $footerGridTwo->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $footerGridTwo->name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>URL</label>
                        <input type="text" name="url" value="{{ $footerGridTwo->url }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Priority Number</label>
                        <input type="text" name="priority_number" value="{{ $footerGridTwo->priority_number }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option @selected($footerGridTwo->status === 1) value="1">Active</option>
                            <option @selected($footerGridTwo->status === 0) value="0">InActive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection
