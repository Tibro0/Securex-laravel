@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Update Our Project</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Update Our Project</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Update Our Project</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.our-project.update', $ourProject->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Thumb Image</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="thumb_image" id="image-upload" />
                            <input type="hidden" name="old_image" value="{{ $ourProject->thumb_image }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            <option value="">select</option>
                            @foreach ($categories as $category)
                                <option @selected($ourProject->category_id === $category->id) value="{{ $category->id }}">{{ $category->name }}
                                </option>
                            @endforeach
                        </select </select>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ $ourProject->title }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control">{{ $ourProject->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Url</label>
                        <input type="text" name="url" value="{{ $ourProject->url }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option @selected($ourProject->status === 1) value="1">Active</option>
                            <option @selected($ourProject->status === 0) value="0">InActive</option>
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
                'background-image': 'url({{ asset($ourProject->thumb_image) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })
        })
    </script>
@endpush
