@php
    $socialLinks = App\Models\SocialLink::where('status', 1)->orderBy('id', 'DESC')->get();
    $footerGridOne = App\Models\FooterGridOne::first();

    function menuActive(array $routes)
    {
        foreach ($routes as $route) {
            if (request()->routeIs($route)) {
                return 'active';
            }
        }
        return '';
    }
@endphp
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
        <h2 class="m-0 text-primary">{{ @$footerGridOne->website_name }}</h2>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-4 py-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ menuActive(['home']) }}">Home</a>
            <a href="{{ route('about-us') }}" class="nav-item nav-link {{ menuActive(['about-us']) }}">About</a>
            <a href="{{ route('our-service') }}" class="nav-item nav-link {{ menuActive(['our-service']) }}">Our
                Service</a>
            <a href="{{ route('contact.index') }}"
                class="nav-item nav-link {{ menuActive(['contact.index']) }}">Contact</a>
        </div>
        <div class="h-100 d-lg-inline-flex align-items-center d-none">
            @foreach ($socialLinks as $socialLink)
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="{{ $socialLink->link }}"><i
                        class="{{ $socialLink->icon }}"></i></a>
            @endforeach
        </div>
    </div>
</nav>
