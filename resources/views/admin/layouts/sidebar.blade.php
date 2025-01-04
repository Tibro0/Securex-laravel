@php
    function setSidebarActive(array $routes)
    {
        foreach ($routes as $route) {
            if (request()->routeIs($route)) {
                return 'active';
            }
        }
        return '';
    }
@endphp
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard') }}">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ setSidebarActive(['admin.dashboard']) }}"><a class="nav-link"
                    href="{{ route('admin.dashboard') }}"><i class="fab fa-dashcube"></i></i> Dashboard</a>
            </li>
            <li class="menu-header">Starter</li>
            <li
                class="dropdown {{ setSidebarActive(['admin.slider.*', 'admin.detail.*', 'admin.about-us.*', 'admin.our-service.*', 'admin.team-member.*', 'admin.testimonial.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-home"></i></i>
                    <span>Homepage Content</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.slider.*']) }}"><a class="nav-link"
                            href="{{ route('admin.slider.index') }}">Slider</a></li>
                    <li class="{{ setSidebarActive(['admin.detail.*']) }}"><a class="nav-link"
                            href="{{ route('admin.detail.index') }}">Details</a></li>
                    <li class="{{ setSidebarActive(['admin.about-us.*']) }}"><a class="nav-link"
                            href="{{ route('admin.about-us.index') }}">About Us</a></li>
                    <li class="{{ setSidebarActive(['admin.our-service.*']) }}"><a class="nav-link"
                            href="{{ route('admin.our-service.index') }}">Our Services</a></li>
                    <li class="{{ setSidebarActive(['admin.team-member.*']) }}"><a class="nav-link"
                            href="{{ route('admin.team-member.index') }}">Team Members</a></li>
                    <li class="{{ setSidebarActive(['admin.testimonial.*']) }}"><a class="nav-link"
                            href="{{ route('admin.testimonial.index') }}">Testimonial</a></li>
                </ul>
            </li>

            <li
                class="dropdown {{ setSidebarActive(['admin.why-choose-us-icon-box.*', 'admin.why-choose-us-description.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-star"></i>
                    <span>Why Choose Us</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.why-choose-us-icon-box.*']) }}"><a class="nav-link"
                            href="{{ route('admin.why-choose-us-icon-box.index') }}">Why Choose Us Icon
                            Box</a></li>
                    <li class="{{ setSidebarActive(['admin.why-choose-us-description.*']) }}"><a class="nav-link"
                            href="{{ route('admin.why-choose-us-description.index') }}">Description</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ setSidebarActive(['admin.category.*', 'admin.our-project.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-project-diagram"></i>
                    <span>Our Projects</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.category.*']) }}"><a class="nav-link"
                            href="{{ route('admin.category.index') }}">Category</a></li>
                    <li class="{{ setSidebarActive(['admin.our-project.*']) }}"><a class="nav-link"
                            href="{{ route('admin.our-project.index') }}">Our Project</a></li>
                </ul>
            </li>


            <li
                class="dropdown {{ setSidebarActive(['admin.service-name.*', 'admin.free-quote-description.*', 'admin.free-quote-form-information.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file-alt"></i>
                    <span>Free Quote</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.service-name.*']) }}"><a class="nav-link"
                            href="{{ route('admin.service-name.index') }}">Service Name</a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.free-quote-description.*']) }}"><a class="nav-link"
                            href="{{ route('admin.free-quote-description.index') }}">Free Quote
                            Description</a></li>

                    <li class="{{ setSidebarActive(['admin.free-quote-form-information.*']) }}"><a class="nav-link"
                            href="{{ route('admin.free-quote-form-information.index') }}">Free Quote
                            Form</a>
                    </li>
                </ul>
            </li>

            <li
                class="dropdown {{ setSidebarActive(['admin.footer-grid-one.*', 'admin.social-link.*', 'admin.footer-grid-two.*', 'admin.footer-grid-three.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-shoe-prints"></i>
                    <span>Footer</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.footer-grid-one.*']) }}"><a class="nav-link"
                            href="{{ route('admin.footer-grid-one.index') }}">Footer Grid One</a></li>
                    <li class="{{ setSidebarActive(['admin.social-link.*']) }}"><a class="nav-link"
                            href="{{ route('admin.social-link.index') }}">Social Link</a></li>
                    <li class="{{ setSidebarActive(['admin.footer-grid-two.*']) }}"><a class="nav-link"
                            href="{{ route('admin.footer-grid-two.index') }}">Footer Grid Two</a></li>
                    <li class="{{ setSidebarActive(['admin.footer-grid-three.*']) }}"><a class="nav-link"
                            href="{{ route('admin.footer-grid-three.index') }}">Footer Grid Three</a>
                    </li>
                </ul>
            </li>

            <li
                class="dropdown {{ setSidebarActive(['admin.about-us.*', 'admin.service.*', 'admin.terms-and-condition.*', 'admin.support.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file"></i>
                    <span>All Pages</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.about-us.index') }}">About Us</a></li>
                    <li><a class="nav-link" href="{{ route('admin.service.index') }}">Services</a></li>
                    <li><a class="nav-link" href="{{ route('admin.terms-and-condition.index') }}">Terms And
                            Condition</a></li>
                    <li><a class="nav-link" href="{{ route('admin.support.index') }}">Support</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="far fa-address-card"></i>
                    <span>Contact Form</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.contact-form-message.index') }}">Contact Form
                            Message</a></li>
                    <li><a class="nav-link" href="{{ route('admin.contact-form-page-description.index') }}">Contact
                            Page
                            Description</a></li>

                    <li><a class="nav-link" href="{{ route('admin.contact-form-page-map.index') }}">Contact
                            Page
                            Map</a></li>
                </ul>
            </li>

            {{-- <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Layout</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                    <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                    <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                </ul>
            </li> --}}

            {{-- <li class=active><a class="nav-link" href="blank.html"><i class="far fa-square"></i>
                    <span>Blank Page</span></a></li> --}}
        </ul>
    </aside>
</div>
