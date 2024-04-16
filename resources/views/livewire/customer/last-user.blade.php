<div>
    <p>its show</p>


    <div>

        <!-- start product lazy load -->
        <section id="lazyHome" class="mb-3">
            <section class="container-xxl">
                <section class="row">
                    <section class="col">
                        <section class="content-wrapper p-3 rounded-2">
                            <!-- start vontent header -->
                            <section class="content-header">
                                <section class="d-flex justify-content-between align-items-center">
                                    <h2 class="content-header-title">
                                        <span>last users</span>
                                    </h2>
                                    <section class="content-header-link">
                                        <a href="#">مشاهده همه</a>
                                    </section>
                                </section>
                            </section>
                            <!-- start vontent header -->
                            <section class="lazyload-wrapper">
                                <section class="lazyload light-owl-nav owl-carousel owl-theme">
                                    @foreach($users as $ad)
                                    <section class="item">
                                        <section class="">
                                            <section class="container-fluid row">

                                                <div class="card mx-19 mr-5" style="width: 18rem;">
                                                    @if($ad->avatar != null)
                                                    <img class="rounded-circle card-img-top mb-5" src="{{ asset( $ad->avatar['indexArray'][$ad->avatar['currentImage']]) }}" alt="Card image cap">
                                                    @else
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="card-img-top mb-5 bi bi-person-bounding-box" viewBox="0 0 16 16">
                                                        <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5" />
                                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                                    </svg>

                                                    
                                                    @endif
                                                    <div class="card-body">
                                                        <h6 class="card-title">for: {{ $ad->email}}</h6>
                                                        <p class="card-text">{{ $ad->title }}</p>
                                                    </div>

                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">age :{{ $ad->age }}</li>
                                                        <li class="list-group-item">Follower :{{ $ad->followers()->count() }}</li>
                                                        <li class="list-group-item">Following :{{ $ad->following()->count() }}</li>

                                                    </ul>
                                                    <div class="card-body">
                                                        <a href="#" wire:click.prevent="showProf({{ $ad->id }})" class="card-link">See profile</a>
                                                    </div>
                                                </div>

                                            </section>
                                        </section>
                                    </section>

                                    @endforeach
                                </section>
                            </section>
                        </section>
                    </section>
                </section>
            </section>
        </section>
        <!-- end product lazy load -->


        <!-- end product lazy load -->
    </div>
</div>