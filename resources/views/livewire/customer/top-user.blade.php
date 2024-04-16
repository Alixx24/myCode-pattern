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
                                        <span> سه تبلیغ آخر- کاربران برتر</span>
                                    </h2>
                                    <section class="content-header-link">
                                        <a href="#">مشاهده همه</a>
                                    </section>
                                </section>
                            </section>
                            <!-- start vontent header -->
                            <section class="lazyload-wrapper">
                                <section class="lazyload light-owl-nav owl-carousel owl-theme">
                                    @foreach($topUser as $ad)
                                    <section class="item">
                                        <section class="">
                                            <section class="container-fluid row">

                                                <div class="card mx-19 mr-5" style="width: 18rem;">
                                                    <img class="card-img-top mb-5" src="..." alt="Card image cap">
                                                    <div class="card-body">
                                                        <h6 class="card-title">From: {{ $ad->fromUser->email}}</h5>

                                                            <h6 class="card-title">follower: {{ $ad->followers()->count()}}</h5>
                                                                <h6>Following: {{ $ad->following()->count() }}</h6>

                                                    </div>

                                                    <ul class="list-group list-group-flush">

                                                    </ul>
                                                    <div class="card-body">
                                                        <a href="#" wire:click.prevent="showProf({{ $ad->id }})" class="card-link">Another link</a>

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