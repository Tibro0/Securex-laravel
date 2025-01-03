@php
    $footerGridOne = App\Models\FooterGridOne::first();
@endphp
<div class="container-fluid bg-dark px-5">
    <div class="row gx-4 d-none d-lg-flex">
        <div class="col-lg-6 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <div class="btn-sm-square rounded-circle bg-primary me-2">
                    <small class="fa fa-map-marker-alt text-white"></small>
                </div>
                <small>{{ @$footerGridOne->address }}</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <div class="btn-sm-square rounded-circle bg-primary me-2">
                    <small class="fa fa-envelope-open text-white"></small>
                </div>
                <small>{{ @$footerGridOne->email }}</small>
            </div>
        </div>
        <div class="col-lg-6 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <div class="btn-sm-square rounded-circle bg-primary me-2">
                    <small class="fa fa-phone-alt text-white"></small>
                </div>
                <small>{{ @$footerGridOne->phone }}</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <div class="btn-sm-square rounded-circle bg-primary me-2">
                    <small class="far fa-clock text-white"></small>
                </div>
                <small>{{ @$footerGridOne->store_open_time }}</small>
            </div>
        </div>
    </div>
</div>
