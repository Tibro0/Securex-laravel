<div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('admin.about-us.part-two-update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Title</label>
                    <input type="name" name="about_us_part_two_title"
                        value="{{ @$aboutUs['about_us_part_two_title'] }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="name" name="about_us_part_two_description"
                        value="{{ @$aboutUs['about_us_part_two_description'] }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Button Text</label>
                    <input type="name" name="about_us_part_two_button_text"
                        value="{{ @$aboutUs['about_us_part_two_button_text'] }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Button Url</label>
                    <input type="name" name="about_us_part_two_button_url"
                        value="{{ @$aboutUs['about_us_part_two_button_url'] }}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
