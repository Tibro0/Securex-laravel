@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Footer Grid One</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Footer Grid One</h1>
        </div>
        <div class="card card-primary">
            <div class="card-body">
                <form action="{{ route('admin.footer-grid-one.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Website Name</label>
                        <input type="text" name="website_name" value="{{ @$footerGridOne->website_name }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" value="{{ @$footerGridOne->address }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" value="{{ @$footerGridOne->phone }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="{{ @$footerGridOne->email }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Store Open Time</label>
                        <input type="text" name="store_open_time" value="{{ @$footerGridOne->store_open_time }}"
                            class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection
