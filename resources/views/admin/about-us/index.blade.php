@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | About Us</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Update About Us</h1>
        </div>
        <div class="card card-primary">
            <div class="card-body">
                <form action="{{ route('admin.about-us.update', 1) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Right Main Image</label>
                        <input type="file" name="right_main_image" class="form-control">
                        <input type="hidden" name="old_right_main_image" value="{{ @$aboutUs['0']['right_main_image'] }}">
                    </div>
                    <div class="form-group">
                        <label>Left Title</label>
                        <input type="text" name="left_title" value="{{ @$aboutUs['0']['left_title'] }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Left Description</label>
                        <textarea name="left_description" class="form-control">{{ @$aboutUs['0']['left_description'] }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Left Icon First Image</label>
                        <input type="file" name="left_icon_first_image" value="" class="form-control">
                        <input type="hidden" name="old_left_icon_first_image"
                            value="{{ @$aboutUs['0']['left_icon_first_image'] }}">
                    </div>
                    <div class="form-group">
                        <label>Left Icon First Number</label>
                        <input type="text" name="left_icon_first_number"
                            value="{{ @$aboutUs['0']['left_icon_first_number'] }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Left Icon First Title</label>
                        <input type="text" name="left_icon_first_title"
                            value="{{ @$aboutUs['0']['left_icon_first_title'] }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Left Icon Second Image</label>
                        <input type="file" name="left_icon_second_image" value="" class="form-control">
                        <input type="hidden" name="old_left_icon_second_image"
                            value="{{ @$aboutUs['0']['left_icon_second_image'] }}">
                    </div>

                    <div class="form-group">
                        <label>Left Icon Second Number</label>
                        <input type="text" name="left_icon_second_number"
                            value="{{ @$aboutUs['0']['left_icon_second_number'] }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Left Icon Second Title</label>
                        <input type="text" name="left_icon_second_title"
                            value="{{ @$aboutUs['0']['left_icon_second_title'] }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Left Button Title</label>
                        <input type="text" name="left_button_title" value="{{ @$aboutUs['0']['left_button_title'] }}"
                            class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Left Button Url</label>
                        <input type="text" name="left_button_url" value="{{ @$aboutUs['0']['left_button_url'] }}"
                            class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection
