<div>
    <p>its show</p>


    <div>

        <!-- start product lazy load -->
        <section class="mb-3" id="lazyHome">
            <section class="container-xxl">
                <section class="row">
                    <section class="col">
                        <section class="content-wrapper p-3 rounded-2">
                            <!-- start vontent header -->
                            <section class="content-header">
                                <section class="d-flex justify-content-between align-items-center">
                                    <h2 class="content-header-title">
                                        <span>آخرین تبلیغات</span>
                                    </h2>
                                    <section class="content-header-link">
                                        <a href="#">مشاهده همه</a>
                                    </section>
                                </section>
                            </section>
                            <!-- start vontent header -->
                            <section class="lazyload-wrapper">
                                <section class="lazyload light-owl-nav owl-carousel owl-theme">
                                    @foreach($ads as $ad)
                                    <section class="item">
                                        <section class="">
                                            <section class="container-fluid row">

                                                <div class="card mx-19 mr-5" style="width: 18rem;">
                                                    @if($ad->image != null)
                                                    <img class="card-img-top mb-5" src="{{ asset( $ad->image['indexArray'][$ad->image['currentImage']]) }}" alt="Card image cap">
                                                    @else
                                                    <img class="card-img-top mb-5" src="..." alt="Card image cap">
                                                    @endif
                                                    <div class="card-body">
                                                        <h6 class="card-title">for: {{ $ad->forUser->email}}</h6>
                                                        <p class="card-text">{{ $ad->title }}</p>
                                                    </div>
                                                    id{{ $ad->id }}
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">price(Rial) :{{ $ad->adPrice->price }}</li>
                                                        <h6 class="card-title">by: {{ $ad->fromUser->email}}</h6>

                                                    </ul>
                                                    <div class="card-body">
                                                        <a href="#" class="card-link">Another link</a>
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