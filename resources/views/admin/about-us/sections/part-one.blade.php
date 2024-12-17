<div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('admin.about-us.part-one-update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Preview</label><br>
                    <img width="100" src="{{ asset($aboutUs['about_us_part_one_image']) }}">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="about_us_part_one_image" class="form-control">
                    <input type="hidden" name="part_one_old_image" value="{{ $aboutUs['about_us_part_one_image'] }}">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
