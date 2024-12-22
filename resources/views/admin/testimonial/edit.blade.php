@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Update Testimonial</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Update Testimonial</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Update Testimonial</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.testimonial.update', $testimonial->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Image</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" id="image-upload" />
                            <input type="hidden" name="old_image" value="{{ $testimonial->image }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Client Name</label>
                        <input type="text" name="client_name" value="{{ $testimonial->client_name }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Profession</label>
                        <input type="text" name="profession" value="{{ $testimonial->profession }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control">{{ $testimonial->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option @selected($testimonial->status === 1) value="1">Active</option>
                            <option @selected($testimonial->status === 0) value="0">InActive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('admin-js')
    <!-- image-preview js -->
    <script src="{{ asset('admin/assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
    <script>
        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });
    </script>
    <!-- show image -->
    <script>
        $(document).ready(function() {
            $('.image-preview').css({
                'background-image': 'url({{ asset($testimonial->image) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })
        })
    </script>
@endpush
