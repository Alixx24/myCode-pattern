<!-- start header -->
<header class="header mb-4">


    <!-- start top-header logo, searchbox and cart -->
    <section class="top-header">
        <section class="container-xxl ">
            <section class="d-md-flex justify-content-md-between align-items-md-center py-3">




                <section class="mt-md-auto text-end">
                    <section class="d-inline px-md-3">
                        @auth
                        <button class="btn btn-link text-decoration-none text-white dropdown-toggle profile-button" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user"></i>
                        </button>
                        <a id="homeIcon" href="{{ route('customer.home') }}"><img src="" alt="">Home
                        </a>

                        @if(auth()->user()->id)
                        <h5> {{ auth()->user()->name }} </h5>

                        @endif

                        <section class="dropdown-menu dropdown-menu-end custom-drop-down" aria-labelledby="dropdownMenuButton1">
                            <section><a class="dropdown-item" href="#"><i class="fa fa-user-circle"></i>پروفایل کاربری</a></section>
                            <section><a class="dropdown-item" href="#"><i class="fa fa-newspaper"></i>سفارشات</a></section>
                            <section><a class="dropdown-item" href="#"><i class="fa fa-heart"></i>لیست علاقه مندی</a></section>
                            <section>
                                <hr class="dropdown-divider">
                            </section>
                            <section><a class="dropdown-item" href="#"><i class="fa fa-sign-out-alt"></i>خروج</a>
                            </section>

                        </section>
                        @endauth


                        @guest
                        <a href="{{ route('user.register') }}" class="btn btn-link text-decoration-none text-white profile-button">
                            <i class="fa fa-user-lock"></i>
                        </a> <a id="homeIcon" href="{{ route('customer.home') }}"><img src="" alt="">Home
                        </a>
                        @endguest



                    </section>


                </section>



            </section>
        </section>
    </section>
    <!-- end top-header logo, searchbox and cart -->


    <!-- start menu -->

    <!-- end menu -->


</header>
<!-- end header -->