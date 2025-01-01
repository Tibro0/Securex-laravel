<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
            <h1 class="display-5 mb-5">Team Members</h1>
        </div>
        <div class="row g-4">
            @foreach ($teamMembers as $teamMember)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="{{ asset($teamMember->image) }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark rounded-circle m-1"
                                    href="{{ $teamMember->facebook_url }}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1"
                                    href="{{ $teamMember->linkedin_url }}"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1"
                                    href="{{ $teamMember->whatsapp_url }}"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">{{ $teamMember->name }}</h5>
                            <span class="text-primary">{{ $teamMember->designation }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
