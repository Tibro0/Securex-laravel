<div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('admin.about-us.part-three-section-one-update') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>First Icon Image Preview</label><br>
                    <img width="100" src="{{ asset(@$aboutUs['about_us_part_three_icon_first_image']) }}">
                </div>
                <div class="form-group">
                    <label>First Icon Image</label>
                    <input type="file" name="about_us_part_three_icon_first_image" class="form-control">
                    <input type="hidden" name="old_about_us_part_three_icon_first_image"
                        value="{{ @$aboutUs['about_us_part_three_icon_first_image'] }}">
                </div>
                <div class="form-group">
                    <label>First Number</label>
                    <input type="text" name="about_us_part_three_icon_first_number"
                        value="{{ @$aboutUs['about_us_part_three_icon_first_number'] }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>First Title</label>
                    <input type="text" name="about_us_part_three_icon_first_title"
                        value="{{ @$aboutUs['about_us_part_three_icon_first_title'] }}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
