<div>
    <p>its show</p>


    <div>

        <!-- start product lazy load -->
        <section class="mb-3" id="backAbout">
            <section class="">
                <section class="row">
                    <section class="col">
                        <section class="content-wrapper mt-2">
                            <!-- start vontent header -->
                            <section>



                            </section>
                        </section>
                        <!-- start vontent header -->
                        <section class="lazyload-wrapper">


                            <h5 class="">
                                <div id="backDesc" @mouseover="open = true" class="col-md-12 offet-md-3 text-center" x-data="{ open: false }" class="content-wrapper bg-white p-3 rounded-2" @mouseleave="open = false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="180" height="180" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />
                                    </svg>
                                    <div x-show="open" class="h-30 bg-red-90" x-transition:enter.duration.1000ms x-transition:leave.duration.5000ms>
                                        <br>
                                        <p id="descP" :class="open ? '' : 'hidden' ">
                                            {{ $desc->getAttribute('body') }}

                                        </p>
                                    </div>

                                </div>


                            </h5>


                            </h5>



                        </section>
                    </section>
                </section>


                <!-- end product lazy load -->


                <!-- end product lazy load -->
    </div>
</div>